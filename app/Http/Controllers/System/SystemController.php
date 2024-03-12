<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerGroupService;
use App\Services\CustomerTypeService;
use App\Services\PackageDetailService;
use App\Services\PeriodService;
use App\Services\ProvinceService;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $customerTypeService;
    protected $packageDetailService;
    protected $contractService;
    protected $provinceService;
    protected $customerGroupService;

    public function __construct(
        CompanyService $companyService,
        PeriodService $periodService,
        CustomerTypeService $customerTypeService,
        PackageDetailService $packageDetailService,
        ContractService $contractService,
        ProvinceService $provinceService,
        CustomerGroupService $customerGroupService
    ) {
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->customerTypeService = $customerTypeService;
        $this->packageDetailService = $packageDetailService;
        $this->provinceService = $provinceService;
        $this->contractService = $contractService;
        $this->customerGroupService = $customerGroupService;
    }

    public function index(Request $request)
    {
        $provinceList = $this->provinceService->getProvinceList();
        $companyList = $this->companyService->getCompanyActiveByProvince($request->get('province_id') ? $request->get('province_id') : $provinceList->first()->id);
        $periodList = $this->periodService->getPeriodList();
        $periodListByCompany = $this->periodService->getPeriodActiveByCompany();
        $customerTypeList = $this->customerTypeService->getCustomerTypeActive();
        // $packageDetailList = $this->packageDetailService->getPackageByCompanyAndPeriod($companyList->first()->id, $periodList->first()->id);
        $packageDetailList = [];
        $contractList = $this->contractService->getContractByPeriod($periodList->first()->id);
        $customerGroupList = $this->customerGroupService->getCustomerGroupActive();
        return view('admin.system.index', compact(['companyList', 'provinceList', 'periodList', 'periodListByCompany', 'customerTypeList', 'packageDetailList', 'contractList', 'customerGroupList']));
    }

    public function searchPackageDetail()
    {
    }

    public function searchContract()
    {
    }
}
