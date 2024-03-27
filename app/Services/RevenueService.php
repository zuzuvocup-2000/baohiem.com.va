<?php

namespace App\Services;

use App\Models\Account;
use App\Models\AccountDetail;
use App\Models\Customer;
use App\Models\InsuranceAllowancebenefits;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class RevenueService
 * @package App\Services
 */
class RevenueService
{
    public function getAllGeneralInsurance($companyId, $periodId, $contractId, $timeRange)
    {
        [$from, $to] = explode('-', $timeRange);

        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];

        $total_value_period_before = $this->getTotalValuePeriodBefore($periodId, trim($time['to']));
        $total_package = $this->getTotalPackage($periodId, trim($time['to']));
        return [
            'account_holder' => $this->getTotalAccountHolders($periodId),
            'account_customer' => $this->getTotalAccountCustomers($periodId),
            'total_value_period_before' => $total_value_period_before,
            'total_package' => $total_package,
            'total_initial_limit_value' => $total_value_period_before + $total_package,
            'number_of_insurance_payments' => $this->numberOfInsurancePayments($periodId, trim($time['from']), trim($time['to'])),
            'total_insurance_payout' => $this->totalInsurancePayout($periodId, trim($time['from']), trim($time['to'])),
        ];
    }

    private function getTotalAccountHolders($periodId)
    {
        return Account::join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->selectRaw(
                'COUNT(tbl_account.id) AS total_accounts,
                SUM(CASE WHEN tbl_customer.locked = 1 THEN 1 ELSE 0 END) AS total_locked_accounts,
                SUM(CASE WHEN tbl_customer.locked = 0 THEN 1 ELSE 0 END) AS total_not_locked_accounts',
            )
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.period_id', $periodId)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('account_holder', STATUS_ACTIVE)
            ->first()
            ->toArray();
    }

    private function getTotalAccountCustomers($periodId)
    {
        return Account::join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->selectRaw(
                'COUNT(tbl_account.id) AS total_accounts,
                SUM(CASE WHEN tbl_customer.locked = 1 THEN 1 ELSE 0 END) AS total_locked_accounts,
                SUM(CASE WHEN tbl_customer.locked = 0 THEN 1 ELSE 0 END) AS total_not_locked_accounts',
            )
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.period_id', $periodId)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('account_holder', STATUS_ACTIVE)
            ->first()
            ->toArray();
    }

    // Baocaothongke_tonggiatrigioihantruockhichuyensang
    private function getTotalValuePeriodBefore($periodId, $timeTo)
    {
        return DB::table('tbl_account')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.period_id', '=', $periodId)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->whereDate('tbl_account_detail.log_date', '<', $timeTo)
            ->sum('tbl_account_detail.advance_payment');
    }

    // Baocaothongke_tonggiatrigioihanbandau
    private function getTotalPackage($periodId, $timeTo)
    {
        $totalMoney = Customer::join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_account_package', 'tbl_account.account_package_id', '=', 'tbl_account_package.id')
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_account_package.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.period_id', $periodId)
            ->whereDate('tbl_account_detail.log_date', '<', $timeTo)
            ->where('tbl_account_detail.account_holder', 1)
            ->where('locked', 0)
            ->sum('tbl_account_package.package_price');

        $numberPeople = AccountDetail::join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->where('tbl_account_detail.account_holder', 1)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.period_id', $periodId)
            ->count('tbl_account_detail.id');

        $amountVnd = InsuranceAllowancebenefits::where('active', STATUS_ACTIVE)
            ->where('period_id', $periodId)
            ->value('amount_vnd');

        $totalMoney += $numberPeople * $amountVnd;
        return $totalMoney;
    }

    // Baocaothongke_tongsoluotchiBH
    private function numberOfInsurancePayments($periodId, $timeFrom, $timeTo)
    {
        return Customer::join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_payment_detail', 'tbl_account_detail.id', '=', 'tbl_payment_detail.account_detail_id')
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.period_id', $periodId)
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->whereBetween('tbl_account_detail.log_date', [$timeFrom, $timeTo])
            ->count('tbl_payment_detail.id');
    }

    // Baocaothongke_tongsotienchiBH
    private function totalInsurancePayout($periodId, $timeFrom, $timeTo)
    {
        return Customer::join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_payment_detail', 'tbl_account_detail.id', '=', 'tbl_payment_detail.account_detail_id')
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.period_id', $periodId)
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->whereBetween('tbl_account_detail.log_date', [$timeFrom, $timeTo])
            ->selectRaw('SUM(tbl_payment_detail.amount_paid) as total')
            ->first()->toArray();
    }
}
