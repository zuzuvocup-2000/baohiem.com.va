<?php

namespace App\Services;

use App\Models\AccountPackage;

/**
 * Class AccountPackageService
 * @package App\Services
 */
class AccountPackageService
{
    public function getPackageByCompanyAndPeriod($companyId, $periodId)
    {
        return AccountPackage::select('tbl_account_package.id', 'tbl_account_package.package_name', 'tbl_account_package.package_price', 'tbl_account_package.note')
            ->join('tbl_package_detail', 'tbl_account_package.id', '=', 'tbl_package_detail.account_package_id')
            ->join('tbl_period', 'tbl_package_detail.period_id', '=', 'tbl_period.id')
            ->join('tbl_company', 'tbl_package_detail.company_id', '=', 'tbl_company.id')
            ->where('tbl_package_detail.active', '=', STATUS_ACTIVE)
            ->where('tbl_period.id', '=', $periodId)
            ->where('tbl_account_package.active', '=', STATUS_ACTIVE)
            ->where('tbl_company.id', '=', $companyId)
            ->get();
    }
}
