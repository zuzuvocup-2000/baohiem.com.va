<?php

namespace App\Services;

use App\Models\Account;
use App\Models\Customer;
use App\Models\InsuranceAllowancebenefits;
use App\Models\PeriodDetail;
use Illuminate\Support\Facades\DB;

/**
 * Class AccountService
 * @package App\Services
 */
class AccountService
{
    public function getDetailAccount($customerId, $periodId, $contractId)
    {
        return PeriodDetail::join('tbl_company', 'tbl_period_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
            ->join('tbl_period', 'tbl_period_detail.period_id', '=', 'tbl_period.id')
            ->join('tbl_package_detail', function ($join) {
                $join->on('tbl_package_detail.period_id', '=', 'tbl_period.id')->on('tbl_package_detail.company_id', '=', 'tbl_company.id');
            })
            ->join('tbl_account_detail_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
            ->join('tbl_account', 'tbl_account_detail_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_customer_group', 'tbl_customer.customer_group_id', '=', 'tbl_customer_group.id')
            ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
            ->join('tbl_customer_type', 'tbl_customer.customer_type_id', '=', 'tbl_customer_type.id')
            ->select(
                'tbl_customer.id',
                'tbl_customer.full_name',
                DB::raw('CONVERT(nvarchar, tbl_customer.birth_year, 103) AS birth_year'),
                'tbl_customer.address',
                'tbl_customer.images',
                'tbl_account.note',
                'tbl_customer.folder',
                'tbl_customer.identity_card_number',
                'tbl_customer.issue_date',
                'tbl_customer.issue_place',
                'tbl_customer.contact_phone',
                'tbl_customer.email',
                'tbl_customer.gender',
                'tbl_information_insurance.card_number',
                DB::raw('CONVERT(nvarchar, tbl_contract.effective_time, 103) AS effective_time'),
                DB::raw('CONVERT(nvarchar, tbl_contract.end_time, 103) AS end_time'),
                'tbl_account_package.package_price',
                'tbl_account_package.id',
                'tbl_account_package.package_name',
                'tbl_customer_group.id',
                'tbl_customer_group.group_name',
                'tbl_contract.id',
                'tbl_account_detail.account_holder',
                'tbl_contract.contract_name',
                'tbl_contract.contract_supplement_number',
                'tbl_period.period_name',
                'tbl_company.company_name',
                'tbl_account.active',
                'tbl_province.id',
                'tbl_province.province_name',
                'tbl_customer_type.id',
                'tbl_account.staff_code',
                'tbl_account.id',
                'tbl_account_detail_detail.prepayment',
                'tbl_customer_type.type_name',
                'tbl_customer.locked',
                'tbl_information_insurance.old_card_number',
                'tbl_account_detail.first_visit_date',
            )
            ->where('tbl_customer.id', '=', $customerId)
            ->where('tbl_contract.active', '=', 1)
            ->where('tbl_period.id', '=', $periodId)
            ->where('tbl_account_detail.active', '=', 1)
            ->where('tbl_contract.id', '=', $contractId)
            ->distinct()
            ->first();
    }

    public function getAccountReport($params = [])
    {
        $accountList = DB::table('tbl_customer')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_customer_group', 'tbl_customer.customer_group_id', '=', 'tbl_customer_group.id')
            ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
            ->join('tbl_account_detail_detail', 'tbl_account.id', '=', 'tbl_account_detail_detail.account_id')
            ->join('tbl_package_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
            ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_period', 'tbl_account_package.period_id', '=', 'tbl_period.id')
            ->join('tbl_period_detail', 'tbl_period.id', '=', 'tbl_period_detail.period_id')
            ->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
            ->select('tbl_customer.id', 'tbl_customer.full_name', 'tbl_customer.images', 'tbl_customer.folder', 'tbl_customer.birth_year', 'tbl_customer.address', 'tbl_customer.issue_date', 'tbl_customer.issue_place', 'tbl_customer.identity_card_number', 'tbl_customer.email', 'tbl_customer.gender', 'tbl_customer.contact_phone', 'tbl_information_insurance.card_number', 'tbl_customer_group.group_name', 'tbl_customer_group.id as customer_group_id', 'tbl_account_package.package_price', 'tbl_account_package.id as account_package_id', 'tbl_account_package.package_name', 'tbl_account.start_date', 'tbl_contract.id as contract_id', 'tbl_account_detail.account_holder', 'tbl_account.end_date', 'tbl_account.note', 'tbl_province.province_name', 'tbl_province.id as province_id', 'tbl_account_detail.advance_payment', 'tbl_account_detail.account_id', 'locked', 'old_card_number')
            ->where('tbl_contract.id', $params['contract'])
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_information_insurance.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.account_holder', STATUS_ACTIVE)
            ->where('tbl_account_detail_detail.active', STATUS_ACTIVE)
            ->orderBy('tbl_account_detail.account_id')
            ->orderBy('tbl_account_detail.account_holder', 'DESC')
            ->orderBy('tbl_customer.full_name')
            ->distinct()
            ->paginate(PER_PAGE_SMALL);
        foreach ($accountList as $value) {
            $value->data = $this->calculationMoneyPayment($value);
        }
        return $accountList;
    }

    private function calculationMoneyPayment($customer)
    {
        $moneyStartPeriod = 0;
        $totalAmountSpent = 0;
        $theRemainingAmount = 0;

        $periodId = DB::table('tbl_contract')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->where('tbl_contract.id', $customer->contract_id)
            ->value('tbl_period_detail.period_id');

        $contract = DB::table('tbl_contract')
            ->where('active', 1)
            ->where('id', $customer->contract_id)
            ->select('effective_time', 'end_time')
            ->first();

        $account = Customer::selectRaw('MAX(tbl_account.id) as account_id, max(dbo.tbl_account_detail.id) as account_detail_id')
            ->join('tbl_account_detail', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_account_detail_detail', 'tbl_account.id', '=', 'tbl_account_detail_detail.account_id')
            ->join('tbl_package_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
            ->join('tbl_company', 'tbl_package_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_period_detail', 'tbl_company.id', '=', 'tbl_period_detail.company_id')
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_customer.id', $customer->id)
            ->where('tbl_period_detail.period_id', $periodId)
            ->first();

        $accountDetail = Account::select('reserve_amount', 'start_date')
            ->where('tbl_account.id', $account->account_id)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->first();

        $prepayment = Customer::selectRaw('tbl_account_detail_detail.prepayment')
            ->join('tbl_account_detail', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_account_detail_detail', 'tbl_account.id', '=', 'tbl_account_detail_detail.account_id')
            ->join('tbl_package_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
            ->join('tbl_company', 'tbl_package_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_period_detail', 'tbl_company.id', '=', 'tbl_period_detail.company_id')
            ->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
            ->join('tbl_account_package', 'tbl_account_package.id', '=', 'tbl_package_detail.account_package_id')
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_account_detail_detail.active', STATUS_ACTIVE)
            ->where('tbl_customer.id', $customer->id)
            ->where('tbl_account_package.period_id', $periodId)
            ->where('tbl_contract.id', $customer->contract_id)
            ->value('prepayment');

        $numberOfContractDays = date_diff(date_create($contract->effective_time), date_create($contract->end_time))->days + 1;
        $accountDays = date_diff(date_create($accountDetail->start_date), date_create($contract->end_time))->days + 1;

        $maxValueOfTheQuarter = DB::table('tbl_insurance_allowancebenefits')->where('period_id', $periodId)->value('tbl_insurance_allowancebenefits.maximum_value_of_the_fund');

        if ($accountDetail->reserve_amount == 0) {
            $results = DB::select(
                "
            SELECT DISTINCT package_price
            FROM tbl_period_detail
            INNER JOIN tbl_contract ON tbl_period_detail.id = tbl_contract.period_id
            INNER JOIN tbl_period ON tbl_period_detail.period_id = tbl_period.id
            INNER JOIN tbl_account_detail
            INNER JOIN tbl_account ON tbl_account_detail.account_id = tbl_account.id
            INNER JOIN tbl_account_detail_detail ON tbl_account.id = tbl_account_detail_detail.account_id
            INNER JOIN tbl_package_detail ON tbl_account_detail_detail.package_detail_id = tbl_package_detail.id
            INNER JOIN tbl_account_package ON tbl_package_detail.account_package_id = tbl_account_package.id ON tbl_period.id = tbl_package_detail.period_id
            WHERE
                tbl_account_detail.customer_id = :customer_id
                AND tbl_contract.id = :contract_id
        ",
                [
                    'customer_id' => $customer->id,
                    'contract_id' => $customer->contract_id,
                ],
            );
            $moneyStartPeriod = empty($results) ? null : $results[0]->package_price;
        } else {
            $moneyStartPeriod = $maxValueOfTheQuarter;
        }
        if ($accountDays >= $numberOfContractDays) {
            if ($accountDetail->reserve_amount != 0) {
                $moneyStartPeriod = $maxValueOfTheQuarter;
            } else {
                $moneyStartPeriod += $prepayment;
                $insuranceAllowance = (int) $this->getInsuranceAllowance($periodId, $account, $numberOfContractDays, $contract);
                $moneyStartPeriod += $insuranceAllowance;
            }
        } else {
            if ($accountDays > $numberOfContractDays) {
                $accountDays = $numberOfContractDays;
            }
            $moneyStartPeriod .= '/' . $numberOfContractDays;
            $moneyStartPeriod = round($moneyStartPeriod / $numberOfContractDays, 0);
            $moneyStartPeriod *= $accountDays;
            $moneyStartPeriod += $prepayment;
            $insuranceAllowance = (int) $this->getInsuranceAllowance($periodId, $account, $numberOfContractDays, $contract);
            $moneyStartPeriod += $insuranceAllowance;
            if ($accountDetail->reserve_amount != 0) {
                $moneyStartPeriod = $maxValueOfTheQuarter;
            }
            if ($moneyStartPeriod > $maxValueOfTheQuarter) {
                $moneyStartPeriod = $maxValueOfTheQuarter;
            }
        }

        $resultsTotal = DB::select(
            "
            SELECT DISTINCT SUM
            ( tbl_payment_detail.amount_paid ) AS total_amount_paid
        FROM
            tbl_period_detail
            INNER JOIN tbl_period ON tbl_period_detail.period_id = tbl_period.id
            INNER JOIN tbl_contract ON tbl_period_detail.id = tbl_contract.period_id
            INNER JOIN tbl_account_detail
            INNER JOIN tbl_payment_detail ON tbl_account_detail.id = tbl_payment_detail.account_detail_id ON tbl_contract.effective_time <= tbl_payment_detail.payment_date AND tbl_contract.end_time >= tbl_payment_detail.payment_date
        WHERE
            ( tbl_contract.id = :contract_id )
            AND ( tbl_payment_detail.active = 1 )
            AND ( tbl_period_detail.period_id = :period_id )
            AND ( tbl_account_detail.account_id = :account_id )
    ",
            [
                'period_id' => $periodId,
                'account_id' => $account->account_id,
                'contract_id' => $customer->contract_id,
            ],
        );
        $totalAmountSpent = empty($resultsTotal) ? null : (int) $resultsTotal[0]->total_amount_paid;
        if ($moneyStartPeriod > $maxValueOfTheQuarter && $maxValueOfTheQuarter != 0) {
            $moneyStartPeriod = $maxValueOfTheQuarter;
        }

        $theRemainingAmount = $moneyStartPeriod - $totalAmountSpent;

        return [
            'moneyStartPeriod' => $moneyStartPeriod,
            'totalAmountSpent' => $totalAmountSpent,
            'theRemainingAmount' => $theRemainingAmount,
            'account_id' => $account->account_id,
        ];
    }

    private function getInsuranceAllowance($periodId, $account, $numberOfContractDays, $contract)
    {
        $total = 0;
        $allowance = InsuranceAllowancebenefits::where(['active' => STATUS_ACTIVE])
            ->where(['period_id' => $periodId])
            ->value('amount_vnd');

        $oneDayAllowance = $numberOfContractDays != 0 ? round($allowance / $numberOfContractDays, 0) : 0;

        $detailAccountList = DB::table('tbl_account_detail')
            ->distinct()
            ->select('tbl_account_detail.id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_account_detail_detail', 'tbl_account_detail_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_package_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
            ->where('tbl_account_detail.account_holder', 0)
            ->where('tbl_account_detail.active', 1)
            ->where('tbl_package_detail.period_id', $periodId)
            ->where('tbl_account_detail.account_id', $account->account_id)
            ->get();

        foreach ($detailAccountList as $detailAccount) {
            $startDate = DB::table('tbl_account_detail')
                ->select('first_visit_date')
                ->where('id', $detailAccount->id)
                ->where('active', 1)
                ->value('first_visit_date');

            $periodDays = strtotime($contract->end_time) - strtotime($startDate);
            if ($periodDays >= $numberOfContractDays) {
                $periodDays = $numberOfContractDays;
            }

            if ($numberOfContractDays != $periodDays) {
                $insuranceAllowance = round($oneDayAllowance * $periodDays, 0);
            } else {
                $insuranceAllowance = $allowance;
            }

            $total += $insuranceAllowance;
        }
        return $total;
    }
}
