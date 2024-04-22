<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\DiaryService;
use App\Services\UserHospitalService;
use App\Services\CustomerService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    
    protected $diaryService;
    protected $userHospitalService;
    protected $customerService;

    public function __construct(
        DiaryService $diaryService,
        CustomerService $customerService,
        
    ) {
        $this->diaryService = $diaryService;
        $this->customerService = $customerService;
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
        $employeeDiaryList = $this->diaryService->getEmployeeDiary();
        
        return view('admin.diary.employee', compact(['employeeDiaryList']));
    }
  
    public function hospitalDiary(){
        $hospitalDiaryList = $this->diaryService->getHospitalDiary();
        return view('admin.diary.hospital', compact(['hospitalDiaryList']));
    }
  
    public function customerDiary(){
        $customerDiaryList = $this->diaryService->getCustomerDiary();
        return view('admin.diary.customer',compact(['customerDiaryList']));
    }
}
