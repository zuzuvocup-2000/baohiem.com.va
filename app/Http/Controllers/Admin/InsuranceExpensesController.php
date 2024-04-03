<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CustomerGroupService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerService;
use App\Services\PeriodService;
use App\Services\AccountService;
use Illuminate\Http\Request;

class InsuranceExpensesController extends Controller
{
    protected $customerGroupService;
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $accountService;
    protected $customerService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, ContractService $contractService, CustomerGroupService $customerGroupService, CustomerService $customerService, AccountService $accountService)
    {
        $this->customerGroupService = $customerGroupService;
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->customerService = $customerService;
        $this->accountService = $accountService;
    }

    public function index(Request $request)
    {
        $params = $request->query();
        $customerGroupList = $this->customerGroupService->getCustomerGroupActive();
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
        $contractDetail = $this->contractService->getContractDetail($params['contract']);
        $accountList = (isset($params['keyword']) && !empty($params['keyword']) ? $this->customerService->getCustomerByKeyword($params) : null);
        // dd($accountList);
        return view('admin.insurance-expenses.index', compact(['customerGroupList', 'companyList', 'periodList', 'contractList', 'accountList', 'contractDetail']));
    }
}
