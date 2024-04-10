<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Contract;
use App\Models\AccountDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class SupervisorService
 * @package App\Services
 */
class SupervisorService
{
    public function getDeletedInsuranceExpenseList($params = []){
        $timeStart = isset($params['time_start']) ? Carbon::createFromFormat('d/m/Y', $params['time_start'])->format('Y-m-d') : null;
        $timeEnd = isset($params['time_end']) ? Carbon::createFromFormat('d/m/Y', $params['time_end'])->format('Y-m-d') : null;
        return Customer::select([
            'tbl_customer.id',
            'tbl_customer.full_name',
            'tbl_customer.images',
            'tbl_customer.folder',
            DB::raw("CONVERT(NVARCHAR, tbl_customer.birth_year, 103) AS birth_year"),
            'tbl_customer.address',
            'tbl_customer.identity_card_number',
            'tbl_customer.issue_date',
            'tbl_customer.issue_place',
            'tbl_customer.contact_phone',
            'tbl_customer.email',
            'tbl_customer.gender',
            'tbl_information_insurance.card_number',
            DB::raw("CONVERT(NVARCHAR, start_date, 103) AS start_date"),
            DB::raw("CONVERT(NVARCHAR, end_date, 103) AS end_date"),
            'tbl_account_package.package_price',
            'tbl_account_package.package_name',
            'tbl_customer_group.group_name',
            'tbl_contract.id as contract_id',
            'tbl_account_detail.account_holder',
            'locked',
            'tbl_account.active',
            'tbl_payment_detail.amount_paid',
            DB::raw("CONVERT(NVARCHAR, tbl_payment_detail.payment_date, 103) AS payment_date"),
            DB::raw("CONVERT(NVARCHAR, tbl_payment_detail.examination_date, 103) AS examination_date"),
            'tbl_payment_detail.id as payment_id',
            'tbl_payment_detail.note',
            'tbl_payment_detail.approved',
            'tbl_payment_detail.hospital_id',
            'payment_type_id',
            'expected_payment'
        ])
        ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
        ->join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
        ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
        ->join('tbl_account_package', 'tbl_account.account_package_id', '=', 'tbl_account_package.id')
        ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
        ->join('tbl_payment_detail', 'tbl_payment_detail.account_detail_id', '=', 'tbl_account_detail.id')
        ->join('tbl_customer_group', 'tbl_customer_group.id', '=', 'tbl_customer.customer_group_id')
        ->whereBetween('tbl_payment_detail.payment_date', [$timeStart, $timeEnd])
        ->where('tbl_payment_detail.active', 0)
        ->orderBy('tbl_payment_detail.payment_date', 'desc')
        ->paginate(PER_PAGE_SMALL);
    }
    public function getDeletedAccountList($contractId){
        return AccountDetail::select([
            'tbl_customer.id', 
            'tbl_customer.full_name',
            'tbl_customer.images',
            'tbl_customer.folder',
            DB::raw("CONVERT(NVARCHAR, tbl_customer.birth_year, 103) AS birth_year"),
            'tbl_customer.address',
            'tbl_customer.issue_date',
            'tbl_customer.issue_place',
            'tbl_customer.identity_card_number',
            'tbl_customer.email',
            'tbl_customer.gender',
            'tbl_customer.contact_phone',
            'tbl_information_insurance.card_number',
            'tbl_customer_group.group_name',
            'tbl_customer_group.id',
            'tbl_account_package.package_price',
            'tbl_account_package.id',
            'tbl_account_package.package_name',
            DB::raw("CONVERT(NVARCHAR, tbl_contract.effective_time, 103) AS effective_time"),
            'tbl_contract.id',
            'tbl_account_detail.account_holder',
            DB::raw("CONVERT(NVARCHAR, tbl_contract.end_time, 103) AS end_time"),
            'tbl_account.note',
            'tbl_province.province_name',
            'tbl_province.id',
            'tbl_account_detail_detail.prepayment',
            'tbl_account_detail.account_id'
        ])
        ->join('tbl_account_detail_detail', 'tbl_account_detail.account_id', '=', 'tbl_account_detail_detail.account_id')
        ->join('tbl_package_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
        ->join('tbl_period', 'tbl_package_detail.period_id', '=', 'tbl_period.id')
        ->join('tbl_period_detail', 'tbl_period.id', '=', 'tbl_period_detail.period_id')
        ->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
        ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
        ->join('tbl_account', 'tbl_account_detail_detail.account_id', '=', 'tbl_account.id')
        ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
        ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
        ->join('tbl_province', 'tbl_province.id', '=', 'tbl_customer.province_id')
        ->join('tbl_customer_group', 'tbl_customer_group.id', '=', 'tbl_customer.customer_group_id')
        ->where('tbl_contract.id', $contractId)
        ->where('tbl_account.active', STATUS_INACTIVE)
        ->paginate(PER_PAGE_SMALL);
    }
}
