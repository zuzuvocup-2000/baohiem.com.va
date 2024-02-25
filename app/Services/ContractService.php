<?php

namespace App\Services;

use App\Models\Contract;

/**
 * Class ContractService
 * @package App\Services
 */
class ContractService
{
    public function getContractByCompanyAndPeriod($company = 0, $period = 0)
    {
        return Contract::select('tbl_contract.*')
            ->join('tbl_period_detail', function ($join) use ($company, $period) {
                $join->on('tbl_period_detail.period_id', '=', 'tbl_contract.period_id')
                    ->where('tbl_period_detail.company_id', $company)
                    ->where('tbl_period_detail.active', STATUS_ACTIVE);
            })
            ->where(['tbl_contract.period_id' => $period, 'tbl_contract.active' => STATUS_ACTIVE])
            ->get();
    }
}
