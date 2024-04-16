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
