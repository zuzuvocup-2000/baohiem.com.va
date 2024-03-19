<?php

namespace App\Services;

use App\Models\Company;

/**
 * Class CompanyService
 * @package App\Services
 */
class CompanyService
{
    public function getCompanyActiveByProvince($provinceId = 0)
    {
        return Company::where('active', STATUS_ACTIVE)
            ->where('province_id', $provinceId)
            ->orderBy('id', 'asc')
            ->get();
    }

    public function getAllCompany()
    {
        return Company::where('active', STATUS_ACTIVE)
            ->orderBy('id', 'asc')
            ->get();
    }

    public function getCompanyActiveDefault()
    {
        return Company::where('active', STATUS_ACTIVE)
            ->orderBy('id', 'asc')
            ->get();
    }

    public function getCompanyActiveSortByOrder()
    {
        return Company::where('active', STATUS_ACTIVE)
            ->orderBy('order', 'asc')
            ->get();
    }

    public function getCompanyNameInList($companyId, $companyList)
    {
        foreach ($companyList as $value) {
            if ($value->id === $companyId) {
                return $value->company_name;
            }
        }
    }

    public function getCompanyByContract()
    {
        return Company::select('tbl_company.company_name', 'tbl_company.id', 'tbl_contract.active', 'order')
            ->distinct()
            ->join('tbl_period_detail', 'tbl_company.id', '=', 'tbl_period_detail.company_id')
            ->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
            ->where('tbl_contract.active', STATUS_ACTIVE)
            ->where('tbl_company.active', STATUS_ACTIVE)
            ->where('tbl_period_detail.active', STATUS_ACTIVE)
            ->orderBy('tbl_company.order', 'asc')
            ->get();
    }
}
