<?php

namespace App\Services;

use App\Models\Contract;

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
}
