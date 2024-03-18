<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AccountPackageService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerGroupService;
use App\Services\CustomerTypeService;
use App\Services\PeriodService;
use App\Services\ProvinceService;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $customerTypeService;
    protected $accountPackageService;
    protected $contractService;
    protected $provinceService;
    protected $customerGroupService;

    public function __construct(
        CompanyService $companyService,
        PeriodService $periodService,
        CustomerTypeService $customerTypeService,
        AccountPackageService $accountPackageService,
        ContractService $contractService,
        ProvinceService $provinceService,
        CustomerGroupService $customerGroupService
    ) {
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->customerTypeService = $customerTypeService;
        $this->accountPackageService = $accountPackageService;
        $this->provinceService = $provinceService;
        $this->contractService = $contractService;
        $this->customerGroupService = $customerGroupService;
    }

    public function index(Request $request)
    {
        $provinceList = $this->provinceService->getProvinceList();

        // Danh sách công ty bằng thành phố
        $companyList = $this->companyService->getCompanyActiveByProvince($request->get('province_id') ? $request->get('province_id') : $provinceList->first()->id);

        // Tất cả công ty
        $companyAll = $this->companyService->getAllCompany();

        // Danh sách niên hạn
        $periodList = $this->periodService->getPeriodList();

        // Danh sách gói tài khoản từ công ty và niên hạn
        $accountPackageList = $this->accountPackageService->getPackageByCompanyAndPeriod(($request->get('account_package_company_id') ? $request->get('account_package_company_id') : $companyAll->first()->id), ($request->get('account_package_period_id') ? $request->get('account_package_period_id') : $periodList->first()->id));

        // Danh sách phân nhóm khách hàng theo bệnh viện
        $customerTypeList = $this->customerTypeService->getCustomerTypeActive();

        // Danh sách hợp đồng
        $contractList = $this->contractService->getAllContract();

        // Danh sách phân loại khách hàng
        $customerGroupList = $this->customerGroupService->getCustomerGroupActive();
        return view('admin.system.index', compact(['companyList', 'companyAll', 'provinceList', 'periodList', 'customerTypeList', 'accountPackageList', 'contractList', 'customerGroupList']));
    }
}
