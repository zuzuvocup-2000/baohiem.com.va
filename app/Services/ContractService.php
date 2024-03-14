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
}
