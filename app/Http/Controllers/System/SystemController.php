<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Services\CompanyService;
use App\Services\CustomerTypeService;
use App\Services\PackageDetailService;
use App\Services\PeriodService;

class SystemController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $customerTypeService;
    protected $packageDetailService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, CustomerTypeService $customerTypeService, PackageDetailService $packageDetailService)
    {
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->customerTypeService = $customerTypeService;
        $this->packageDetailService = $packageDetailService;
    }

    public function index()
    {
        $companyList = $this->companyService->getCompanyActive();
        $periodList = $this->periodService->getPeriodActive();
        $customerTypeList = $this->customerTypeService->getCustomerTypeActive();
        $packageDetailList = $this->packageDetailService->getPackageByCompanyAndPeriod($companyList->first()->id, $periodList->first()->id);
        return view('pages.system.index', compact(['companyList', 'periodList', 'customerTypeList', 'packageDetailList']));
    }
}
