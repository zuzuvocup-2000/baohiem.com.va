<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Services\CustomerGroupService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\PeriodService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    protected $customerGroupService;
    protected $companyService;
    protected $periodService;
    protected $contractService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, ContractService $contractService, CustomerGroupService $customerGroupService)
    {
        $this->customerGroupService = $customerGroupService;
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
    }
    public function index()
    {
        $customerGroupList = $this->customerGroupService->getCustomerGroupActive();
        $companyList = $this->companyService->getCompanyActive();
        $periodList = $this->periodService->getPeriodActiveByCompany($companyList->first()->id);
        $contractList = $this->contractService->getContractByPeriod($periodList->first()->id);
        return view('admin.account.index', compact(['customerGroupList', 'companyList', 'periodList', 'contractList']));
    }
    public function edit()
    {
        return view('admin.account.edit');
    }
    public function insurance()
    {
        return view('admin.account.insurance');
    }
    public function expenses()
    {
        return view('admin.account.expenses');
    }
}
