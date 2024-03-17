<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomerGroupService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerService;
use App\Services\PeriodService;

class RenewalController extends Controller
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
        $companyList = $this->companyService->getCompanyActiveSortByOrder();

        if (!isset($params['company'])) {
            $params['company'] = $companyList->first()->id;
        }
        $companyName = $this->companyService->getCompanyNameInList($params['company'], $companyList);

        // Lấy danh sách niên hạn
        $periodList = $this->periodService->getPeriodActiveByCompany($params['company']);

        // Lấy danh sách hợp đồng
        if (!isset($params['period'])) {
            $params['period'] = $periodList->first() ? $periodList->first()->id : 0;
        }
        $contractList = $this->contractService->getContractByPeriod($params['period']);

        $contractDetail = $this->contractService->getContractDetail(isset($params['contract']) ? $params['contract'] : (isset($contractList->first()->id) ? $contractList->first()->id : 0));
        $customerPrimary = $this->contractService->getCustomerPrimary($contractDetail->id);
        $customerSecondary = $this->contractService->getCustomerSecondary($contractDetail->id);
        return view('admin.renewal.index', compact(['contractDetail', 'companyList', 'periodList', 'contractList', 'companyName', 'customerPrimary', 'customerSecondary']));
    }
}
