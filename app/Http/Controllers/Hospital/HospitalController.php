<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Services\HospitalService;
use App\Services\HospitalTypeService;
use App\Services\UserHospitalService;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    protected $hospitalService;
    protected $hospitalTypeService;
    protected $userHospitalService;

    public function __construct(
        HospitalService $hospitalService,
        HospitalTypeService $hospitalTypeService,
        UserHospitalService $userHospitalService
    ) {
        $this->hospitalService = $hospitalService;
        $this->hospitalTypeService = $hospitalTypeService;
        $this->userHospitalService = $userHospitalService;
    }
    public function index(Request $request)
    {
        $hospitalList = $this->hospitalService->getHospital();
        $hospitalTypeList = $this->hospitalTypeService->getHospitalType();
        $userHospitalList = $this->userHospitalService->getUserList();
        return view('admin.hospital.index', compact(['hospitalList' , 'hospitalTypeList', 'userHospitalList']));
    }
    public function healthReport()
    {
        return view('admin.hospital.health_report');
    }
}
