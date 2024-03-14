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
}
