<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Services\HospitalService;
use App\Services\HospitalTypeService;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    protected $hospitalService;
    protected $hospitalTypeService;

    public function __construct(
        HospitalService $hospitalService,
        HospitalTypeService $hospitalTypeService
    ) {
        $this->hospitalService = $hospitalService;
        $this->hospitalTypeService = $hospitalTypeService;
    }
    public function index(Request $request)
    {
        $hospitalList = null;

        if ($request->has('hospital_type_id')) {
            $hospitalTypeId = $request->get('hospital_type_id');
            if ($hospitalTypeId == -1) {
                $hospitalList = $this->hospitalService->getAllHospitals();
            } else {
                $hospitalList = $this->hospitalService->getHospital($hospitalTypeId);
            }
        } else {
            $hospitalList = $this->hospitalService->getAllHospitals();
        }
        $hospitalTypeList = $this->hospitalTypeService->getHospitalType();
        return view('admin.hospital.index', compact(['hospitalList' , 'hospitalTypeList']));
    }
    public function healthReport()
    {
        return view('admin.hospital.health_report');
    }
}
