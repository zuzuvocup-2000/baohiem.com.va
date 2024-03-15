<?php

namespace App\Services;

use App\Models\Hospital;

/**
 * Class HospitalService
 * @package App\Services
 */
class HospitalService
{
    public function getHospital($hospitalId = 0)
    {
        return Hospital::where(['active' => STATUS_ACTIVE])->where('hospital_type_id', $hospitalId)->orderBy('id', 'asc')->get();
    }
    public function getAllHospitals()
    {
        return Hospital::where(['active' => STATUS_ACTIVE])->get();
    }
}
