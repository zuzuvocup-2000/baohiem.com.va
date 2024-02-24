<?php

namespace App\Services;

use App\Models\PackageDetail;

/**
 * Class PackageDetailService
 * @package App\Services
 */
class PackageDetailService
{
    public function getPackageByCompanyAndPeriod($company = 0, $period = 0)
    {
        return PackageDetail::where(['active' => 1, 'company_id' => $company, 'period_id' => $period])->with(['accountPackage'])->get();
    }
}
