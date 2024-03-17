<?php

namespace App\Services;

use App\Models\HospitalType;

/**
 * Class HospitalTypeService
 * @package App\Services
 */
class HospitalTypeService
{
    public function getHospitalType()
    {
        return HospitalType::where(['active' => STATUS_ACTIVE])->get();
    }
}
