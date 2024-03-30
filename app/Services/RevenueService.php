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
    public function getAllGeneralInsurance($params = [])
    {
        [$from, $to] = explode('-', $params['time_range']);

        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];

        $total_value_period_before = $this->getTotalValuePeriodBefore($params, trim($time['to']));
        $total_package = $this->getTotalPackage($params, trim($time['to']));
        return [
            'account_holder' => $this->getTotalAccountHolders($params),
            'account_payment' => $this->getTotalAccountPayment($params, trim($time['from']), trim($time['to'])),
            'account_customer' => $this->getTotalAccountCustomers($params),
            'total_value_period_before' => $total_value_period_before,
            'total_package' => $total_package,
            'total_initial_limit_value' => $total_value_period_before + $total_package,
            'number_of_insurance_payments' => $this->numberOfInsurancePayments($params, trim($time['from']), trim($time['to'])),
            'total_insurance_payout' => $this->totalInsurancePayout($params, trim($time['from']), trim($time['to'])),
            'total_remaining_limit_value' => $this->totalRemainingLimitValue($params, trim($time['to']), $total_package),
            'hospital_list' => $this->getHospitalList($params, trim($time['from']), trim($time['to'])),
        ];
    }

    private function getTotalAccountHolders($params = [])
    {
        $query = Account::join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
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
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('account_holder', STATUS_ACTIVE);
        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }

        return $query->first()->toArray();
    }

    private function getTotalAccountPayment($params = [], $timeFrom, $timeTo)
    {
        $query = Customer::join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_payment_detail', 'tbl_account_detail.id', '=', 'tbl_payment_detail.account_detail_id')
            ->selectRaw(
                'COUNT(tbl_account.id) AS total_accounts,
                SUM(CASE WHEN tbl_account_detail.account_holder = 1 THEN 1 ELSE 0 END) AS total_account_holder,
                SUM(CASE WHEN tbl_account_detail.account_holder = 0 THEN 1 ELSE 0 END) AS total_not_account_holder',
            )
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->whereBetween('tbl_account_detail.log_date', [$timeFrom, $timeTo]);
        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }

        return $query->first()->toArray();
    }

    private function getTotalAccountCustomers($params = [])
    {
        $query = Account::join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
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
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('account_holder', STATUS_ACTIVE);
        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }

        return $query->first()->toArray();
    }

    // Baocaothongke_tonggiatrigioihantruockhichuyensang
    private function getTotalValuePeriodBefore($params = [], $timeTo)
    {
        $query = DB::table('tbl_account')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->whereDate('tbl_account_detail.log_date', '<', $timeTo);

        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }
        return $query->sum('tbl_account_detail.advance_payment');
    }

    // Baocaothongke_tonggiatrigioihanbandau
    private function getTotalPackage($params = [], $timeTo)
    {
        $queryTotalMoney = Customer::join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_account_package', 'tbl_account.account_package_id', '=', 'tbl_account_package.id')
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_account_package.active', STATUS_ACTIVE)
            ->whereDate('tbl_account_detail.log_date', '<', $timeTo)
            ->where('tbl_account_detail.account_holder', STATUS_ACTIVE)
            ->where('locked', STATUS_INACTIVE);
        if (isset($params['only_period']) && $params['only_period']) {
            $queryTotalMoney->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $queryTotalMoney->where('tbl_contract.id', $params['contract']);
        }
        $totalMoney = $queryTotalMoney->sum('tbl_account_package.package_price');

        $numberPeople = AccountDetail::join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->where('tbl_account_detail.account_holder', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.period_id', $params['period'])
            ->count('tbl_account_detail.id');

        $amountVnd = InsuranceAllowancebenefits::where('active', STATUS_ACTIVE)
            ->where('period_id', $params['period'])
            ->value('amount_vnd');

        $totalMoney += $numberPeople * $amountVnd;
        return $totalMoney;
    }

    // Baocaothongke_tongsoluotchiBH
    private function numberOfInsurancePayments($params = [], $timeFrom, $timeTo)
    {
        $query = Customer::join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_payment_detail', 'tbl_account_detail.id', '=', 'tbl_payment_detail.account_detail_id')
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->whereBetween('tbl_account_detail.log_date', [$timeFrom, $timeTo]);
        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }
        return $query->count('tbl_payment_detail.id');
    }

    // Baocaothongke_tongsotienchiBH
    private function totalInsurancePayout($params = [], $timeFrom, $timeTo)
    {
        $query = Customer::join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_payment_detail', 'tbl_account_detail.id', '=', 'tbl_payment_detail.account_detail_id')
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->whereBetween('tbl_account_detail.log_date', [$timeFrom, $timeTo])
            ->selectRaw('SUM(tbl_payment_detail.amount_paid) as total');
        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }
        return $query->first()->toArray();
    }

    // Baocaothongke_tonggiatrigioihanconlaihientai
    private function totalRemainingLimitValue($params = [], $timeTo, $totalPackage)
    {
        $query = DB::table('tbl_account')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_payment_detail', 'tbl_account_detail.id', '=', 'tbl_payment_detail.account_detail_id')
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->whereDate('tbl_account_detail.log_date', '<', $timeTo);
        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }
        $total = $query->sum('amount_paid');

        return $totalPackage - $total;
    }

    private function getHospitalList($params = [], $timeFrom, $timeTo)
    {
        $query = Customer::select(['hospital_name', 'tbl_hospital.id'])
            ->join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_payment_detail', 'tbl_account_detail.id', '=', 'tbl_payment_detail.account_detail_id')
            ->join('tbl_hospital', 'tbl_payment_detail.hospital_id', '=', 'tbl_hospital.id')
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->whereBetween('tbl_account_detail.log_date', [$timeFrom, $timeTo]);
        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }

        $hospitalList = $query->distinct()->get()->toArray();
        if (isset($hospitalList) && is_array($hospitalList) && count($hospitalList)) {
            foreach ($hospitalList as $key => $value) {
                $hospitalList[$key]['money_payment'] = $this->getMoneyPaymentHospital($params, $value['id'], $timeFrom, $timeTo);
                $hospitalList[$key]['count_payment'] = $this->countPaymentHospital($params, $value['id'], $timeFrom, $timeTo);
            }
        }
        return $hospitalList;
    }

    // Baocaothongke_loadsotienchicuabenhvien
    // Baocaothongke_loadsotienchicuabenhvien_theohopdong
    private function getMoneyPaymentHospital($params = [], $hospitalId, $timeFrom, $timeTo)
    {
        $query = DB::table('tbl_account')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_payment_detail', 'tbl_account_detail.id', '=', 'tbl_payment_detail.account_detail_id')
            ->join('tbl_hospital', 'tbl_payment_detail.hospital_id', '=', 'tbl_hospital.id')
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->where('tbl_hospital.id', $hospitalId)
            ->whereBetween('tbl_account_detail.log_date', [$timeFrom, $timeTo]);
        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }
        return $query->sum('amount_paid');
    }

    private function countPaymentHospital($params = [], $hospitalId, $timeFrom, $timeTo)
    {
        $query = DB::table('tbl_account')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_payment_detail', 'tbl_account_detail.id', '=', 'tbl_payment_detail.account_detail_id')
            ->join('tbl_hospital', 'tbl_payment_detail.hospital_id', '=', 'tbl_hospital.id')
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->where('tbl_hospital.id', $hospitalId)
            ->whereBetween('tbl_account_detail.log_date', [$timeFrom, $timeTo]);
        if (isset($params['only_period']) && $params['only_period']) {
            $query->where('tbl_period_detail.period_id', $params['period']);
        } else {
            $query->where('tbl_contract.id', $params['contract']);
        }
        return $query->count();
    }
}
