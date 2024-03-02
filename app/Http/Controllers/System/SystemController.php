<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerGroupService;
use App\Services\CustomerTypeService;
use App\Services\PackageDetailService;
use App\Services\PeriodService;

class SystemController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $customerTypeService;
    protected $packageDetailService;
    protected $contractService;
    protected $customerGroupService;

    public function __construct(
        CompanyService $companyService,
        PeriodService $periodService,
        CustomerTypeService $customerTypeService,
        PackageDetailService $packageDetailService,
        ContractService $contractService,
        CustomerGroupService $customerGroupService
    ) {
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->customerTypeService = $customerTypeService;
        $this->packageDetailService = $packageDetailService;
        $this->contractService = $contractService;
        $this->customerGroupService = $customerGroupService;
    }

    public function index()
    {
        $companyList = $this->companyService->getCompanyActive();
        $periodList = $this->periodService->getPeriodActive();
        $customerTypeList = $this->customerTypeService->getCustomerTypeActive();
        $packageDetailList = $this->packageDetailService->getPackageByCompanyAndPeriod($companyList->first()->id, $periodList->first()->id);
        $contractList = $this->contractService->getContractByCompanyAndPeriod($companyList->first()->id, $periodList->first()->id);
        $customerGroupList = $this->customerGroupService->getCustomerGroupActive();
        return view('pages.system.index', compact(['companyList', 'periodList', 'customerTypeList', 'packageDetailList', 'contractList', 'customerGroupList']));
    }

    public function searchPackageDetail()
    {
    }

    public function searchContract()
    {
    }
}
