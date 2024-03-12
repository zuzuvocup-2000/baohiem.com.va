<?php

namespace App\Services;

use App\Models\Province;

/**
 * Class ProvinceService
 * @package App\Services
 */
class ProvinceService
{
    public function getProvinceList(){
        return Province::where(['active' => STATUS_ACTIVE])->get();
    }
}
