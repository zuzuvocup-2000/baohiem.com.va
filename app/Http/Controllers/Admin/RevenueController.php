<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AccountService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerGroupService;
use App\Services\CustomerService;
use App\Services\PeriodService;
use App\Services\RevenueService;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $accountService;
    protected $customerService;
    protected $customerGroupService;
    protected $revenueService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, ContractService $contractService, CustomerGroupService $customerGroupService, CustomerService $customerService, AccountService $accountService, RevenueService $revenueService)
    {
        $this->customerGroupService = $customerGroupService;
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->customerService = $customerService;
        $this->revenueService = $revenueService;
        $this->accountService = $accountService;
    }
    public function generalInsurance(Request $request)
    {
        $params = $request->query();
        if(!isset($params['time_range'])) $params['time_range'] = date('01/01/Y') . ' - ' . date('d/m/Y');
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

        $generalInsurance = $this->revenueService->getAllGeneralInsurance($params['company'], $params['period'], $params['contract'], $params['time_range']);
        return view('admin.revenue.general-insurance', compact(['companyList', 'periodList', 'contractList', 'generalInsurance']));
    }
    public function detailReport(Request $request)
    {
        return view('admin.revenue.detail-report');
    }
    public function reportByHospital(Request $request)
    {
        return view('admin.revenue.hospital-report');
    }
    public function reportByContent(Request $request)
    {
        return view('admin.revenue.content-report');
    }
    public function reportByHealth(Request $request)
    {
        return view('admin.revenue.health-report');
    }
    public function reportByAccount(Request $request)
    {
        return view('admin.revenue.account-report');
    }
}
