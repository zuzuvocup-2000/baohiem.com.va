<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\DiaryService;
use App\Services\HospitalService;
use App\Services\UserHospitalService;
use App\Services\CustomerService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\PeriodService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    
    protected $diaryService;
    protected $userHospitalService;
    protected $customerService;
    protected $companyService;
    protected $periodService;
    protected $contractService;

    public function __construct(
        HospitalService $hospitalService,
        DiaryService $diaryService,
        CustomerService $customerService,
        CompanyService $companyService, 
        PeriodService $periodService, 
        ContractService $contractService,
        
    ) {
        $this->hospitalService = $hospitalService;
        $this->diaryService = $diaryService;
        $this->customerService = $customerService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->companyService = $companyService;
    }
  
    public function index()
    {
        $activities = DB::table('tbl_user')
        ->select('tbl_log_user.action', 'tbl_log_user.date_log', 'tbl_user.role_id', 'tbl_user.username', 'tbl_employee.employee_name', 'tbl_user.employee_id', 'tbl_log_user.id')
        ->join('tbl_employee', 'tbl_user.employee_id', '=', 'tbl_employee.id')
        ->join('tbl_log_user', 'tbl_user.id', '=', 'tbl_log_user.user_id')
        ->where('tbl_user.active', '=', STATUS_ACTIVE)
        ->orderBy('tbl_log_user.date_log', 'desc')
        ->paginate(20);
        return view('admin.diary.index', compact(['activities']));
    }
  
    public function employeeDiary(){
        $hospitalList = $this->hospitalService->getHospital();
        $employeeDiaryList = $this->diaryService->getEmployeeDiary();
        
        return view('admin.diary.employee', compact(['employeeDiaryList', 'hospitalList']));
    }
  
    public function hospitalDiary(){
        $hospitalDiaryList = $this->diaryService->getHospitalDiary();
        return view('admin.diary.hospital', compact(['hospitalDiaryList']));
    }
  
    public function customerDiary(Request $request){
        $params = $request->query();
        if (!isset($params['time_range'])) {
            $params['time_range'] = date('01/01/Y') . ' - ' . date('d/m/Y');
        }
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
        $customerDiaryList = $this->diaryService->getCustomerDiary();
        return view('admin.diary.customer',compact(['customerDiaryList', 'companyList', 'periodList', 'contractList']));
    }
}
