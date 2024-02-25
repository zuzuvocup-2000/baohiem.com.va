<?php

namespace App\Services;

use App\Models\Company;

/**
 * Class CompanyService
 * @package App\Services
 */
class CompanyService
{
    public function getCompanyActive()
    {
        return Company::where(['active' => STATUS_ACTIVE])->orderBy('order', 'asc')->get();
    }
}
