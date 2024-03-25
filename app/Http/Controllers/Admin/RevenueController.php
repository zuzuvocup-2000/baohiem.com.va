<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AccountService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerGroupService;
use App\Services\CustomerService;
use App\Services\PeriodService;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $accountService;
    protected $customerService;
    protected $customerGroupService;

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


        return view('admin.revenue.index', compact(['companyList', 'periodList', 'contractList']));
    }
}
