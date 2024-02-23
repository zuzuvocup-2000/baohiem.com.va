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
        return Company::where(['active' => 1])->orderBy('order', 'desc')->get();
    }
}
