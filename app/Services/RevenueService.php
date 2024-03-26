<?php

namespace App\Services;

use App\Models\Account;
use Illuminate\Support\Facades\DB;

/**
 * Class RevenueService
 * @package App\Services
 */
class RevenueService
{
    public function getAllGeneralInsurance($companyId, $periodId, $contractId)
    {
        return [
            'account_holder' => $this->getTotalAccountHolders($periodId),
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
}
