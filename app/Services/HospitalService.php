<?php

namespace App\Services;

use App\Models\Hospital;

/**
 * Class HospitalService
 * @package App\Services
 */
class HospitalService
{
    public function getHospital()
    {
        return Hospital::where(['active' => STATUS_ACTIVE])->get();
    }
}
