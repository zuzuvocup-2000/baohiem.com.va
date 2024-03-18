<?php

namespace App\Services;

use App\Models\Contract;
use Illuminate\Support\Facades\DB;

/**
 * Class ContractService
 * @package App\Services
 */
class ContractService
{
    public function getContractDetail($contractId = 0)
    {
        return DB::table('tbl_contract')
        ->select(
            'tbl_contract.id',
            'tbl_contract.contract_name',
            'tbl_contract.contract_supplement_number',
            'tbl_contract.extension',
            'tbl_contract.signature_date',
            'tbl_contract.effective_time',
            'tbl_contract.end_time',
            'tbl_contract.total_contract_value',
            'tbl_contract.period_id',
            'tbl_period.period_name',
            'tbl_account_package.active',
            'tbl_account_package.package_name'
        )
        ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
        ->join('tbl_period', 'tbl_period_detail.period_id', '=', 'tbl_period.id')
        ->join('tbl_package_detail', 'tbl_period.id', '=', 'tbl_package_detail.period_id')
        ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
        ->where('tbl_contract.active', STATUS_ACTIVE)
        ->where('tbl_contract.id', $contractId)
        ->where('tbl_account_package.active', STATUS_ACTIVE)
        ->distinct()
        ->first();
    }

    public function getAllContract()
    {
        return Contract::select('tbl_contract.*', 'tbl_contract.period_id as contract_period_id', 'tbl_period_detail.company_id', 'tbl_period_detail.period_id')
            ->where(['tbl_contract.active' => STATUS_ACTIVE])
            ->join('tbl_period_detail', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
            ->get()
            ->toArray();
    }

    public function getContractByPeriod($period = 0)
    {
        return Contract::select('tbl_contract.*')
            ->where(['tbl_contract.period_id' => $period, 'tbl_contract.active' => STATUS_ACTIVE])
            ->get();
    }

    public function getContractByCompanyAndPeriod($company = 0, $period = 0)
    {
        return Contract::join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_company', 'tbl_period_detail.company_id', '=', 'tbl_company.id')
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.id', '=', $period)
            ->where('tbl_company.id', '=', $company)
            ->get();
    }

    public function getCustomerPrimary($contractId = 0){
        return DB::table('tbl_account')
        ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
        ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
        ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
        ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
        ->where('tbl_account.active', STATUS_ACTIVE)
        ->where('tbl_contract.active', STATUS_ACTIVE)
        ->where('tbl_contract.id', $contractId)
        ->where('tbl_period_detail.active', STATUS_ACTIVE)
        ->where('tbl_customer.locked', STATUS_INACTIVE)
        ->where('tbl_account_detail.active', STATUS_ACTIVE)
        ->where('tbl_account_detail.account_holder', STATUS_ACTIVE)
        ->count();
    }

    public function getCustomerSecondary($contractId = 0){
        return DB::table('tbl_account')
        ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
        ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
        ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
        ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
        ->where('tbl_account.active', STATUS_ACTIVE)
        ->where('tbl_contract.active', STATUS_ACTIVE)
        ->where('tbl_contract.id', $contractId)
        ->where('tbl_period_detail.active', STATUS_ACTIVE)
        ->where('tbl_customer.locked', STATUS_INACTIVE)
        ->where('tbl_account_detail.active', STATUS_ACTIVE)
        ->where('tbl_account_detail.account_holder', STATUS_INACTIVE)
        ->count();
    }
}
