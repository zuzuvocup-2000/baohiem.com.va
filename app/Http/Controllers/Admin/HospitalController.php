<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\HospitalService;
use App\Services\HospitalTypeService;
use App\Services\UserHospitalService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\PeriodService;
use App\Services\HealthReportService;
use App\Services\PeriodDetailService;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
    protected $hospitalService;
    protected $hospitalTypeService;
    protected $userHospitalService;
    protected $healthReportService;
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $periodDetailService;

    
    public function __construct(
        HospitalService $hospitalService,
        HospitalTypeService $hospitalTypeService,
        UserHospitalService $userHospitalService,
        CompanyService $companyService, 
        PeriodService $periodService, 
        ContractService $contractService,
        HealthReportService $healthReportService,
        PeriodDetailService $periodDetailService
    ) {
        $this->hospitalService = $hospitalService;
        $this->hospitalTypeService = $hospitalTypeService;
        $this->userHospitalService = $userHospitalService;
        $this->companyService = $companyService;
        $this->healthReportService = $healthReportService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;

    }
    public function index(Request $request)
    {
        $params = $request->query();
        $companyList = $this->companyService->getCompanyByContract();

        // Lấy danh sách niên hạn
        if (!isset($params['company'])) {
            $params['company'] = $companyList->first()->id;
        }
        $periodList = $this->periodService->getPeriodActiveByCompany($params['company']);

        // Lấy danh sách hợp đồng
        if (!isset($params['period'])) {
            $params['period'] = $periodList->first() ? $periodList->first()->id : 0;
        }
        $contractList = $this->contractService->getContractByPeriod($params['period']);
        if (!isset($params['contract'])) {
            $params['contract'] = $contractList->first() ? $contractList->first()->id : 0;
        }
        
        $hospitalList = $this->hospitalService->getHospital();
        $hospitalTypeList = $this->hospitalTypeService->getHospitalType();
        $userHospitalList = $this->userHospitalService->getUserList();
        $hospitalContractList = $this->hospitalService->getHospitalContract();
        return view('admin.hospital.index', compact(['hospitalList' , 'hospitalTypeList', 'userHospitalList', 'companyList', 'periodList', 'contractList','hospitalContractList']));
    }
    public function healthReport(Request $request)
    {
        $params = $request->query();
        if (!isset($params['time_range'])) {
            $params['time_range'] = date('01/01/Y') . ' - ' . date('d/m/Y');
        }
        $companyList = $this->companyService->getCompanyActiveSortByOrder();
        $periodList = $this->periodService->getPeriodActiveByCompany($companyList->first()->id);
        $contractList = $this->contractService->getContractByPeriod($periodList->first()->id);
        $healthReportList = $this->healthReportService->getHealthReportList($companyList->first()->id,$params['time_range'],$params);
        return view('admin.hospital.health_report', compact(['healthReportList' , 'companyList', 'periodList', 'contractList']));
    }
}
