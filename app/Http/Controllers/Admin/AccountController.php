<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CustomerGroupService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerService;
use App\Services\PeriodService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    protected $customerGroupService;
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $customerService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, ContractService $contractService, CustomerGroupService $customerGroupService, CustomerService $customerService)
    {
        $this->customerGroupService = $customerGroupService;
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->customerService = $customerService;
    }
    public function index(Request $request)
    {
        $params = $request->query();
        $customerGroupList = $this->customerGroupService->getCustomerGroupActive();
        $companyList = $this->companyService->getCompanyActiveSortByOrder();

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

        $accountList = $this->customerService->getListAccount($params);
        return view('admin.account.index', compact(['customerGroupList', 'companyList', 'periodList', 'contractList', 'accountList']));
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
