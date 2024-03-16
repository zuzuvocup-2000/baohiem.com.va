<?php

namespace App\Services;

use App\Models\Hospital;
use App\Models\UserHospital;
use Illuminate\Http\Request;

/**
 * Class UserHospitalService
 * @package App\Services
 */
class UserHospitalService
{
    public function getUserList()
    {
        return UserHospital::where(['active' => STATUS_ACTIVE])->get();
    }
}
