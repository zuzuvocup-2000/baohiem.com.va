<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AccountService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerGroupService;
use App\Services\CustomerService;
use App\Services\HospitalService;
use App\Services\PaymentTypeService;
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
    protected $paymentTypeService;
    protected $hospitalService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, ContractService $contractService, CustomerGroupService $customerGroupService, CustomerService $customerService, AccountService $accountService, RevenueService $revenueService, HospitalService $hospitalService, PaymentTypeService $paymentTypeService)
    {
        $this->customerGroupService = $customerGroupService;
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->customerService = $customerService;
        $this->revenueService = $revenueService;
        $this->accountService = $accountService;
        $this->hospitalService = $hospitalService;
        $this->paymentTypeService = $paymentTypeService;
    }

    public function generalInsurance(Request $request)
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
        if (!isset($params['contract'])) {
            $params['contract'] = $contractList->first() ? $contractList->first()->id : 0;
        }
        $periodDetail = $this->periodService->findOne($params['period']);
        if (!isset($params['time_range'])) {
            $params['time_range'] = (isset($periodDetail->from_year) ? date('01/01/' . $periodDetail->from_year) : date('01/01/Y')) . ' - ' . date('d/m/Y');
        }
        if (!isset($params['only_period'])) {
            $params['only_period'] = false;
        }
        $generalInsurance = $this->revenueService->getAllGeneralInsurance($params);
        return view('admin.revenue.general-insurance', compact(['companyList', 'periodList', 'contractList', 'generalInsurance', 'periodDetail']));
    }

    public function detailReport(Request $request)
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
        if (!isset($params['contract'])) {
            $params['contract'] = $contractList->first() ? $contractList->first()->id : 0;
        }
        $periodDetail = $this->periodService->findOne($params['period']);
        if (!isset($params['time_range'])) {
            $params['time_range'] = (isset($periodDetail->from_year) ? date('01/01/' . $periodDetail->from_year) : date('01/01/Y')) . ' - ' . date('d/m/Y');
        }
        if (!isset($params['only_period'])) {
            $params['only_period'] = false;
        }
        return view('admin.revenue.detail-report', compact(['companyList', 'periodList', 'contractList', 'periodDetail']));
    }

    public function reportByHospital(Request $request)
    {
        $params = $request->query();

        $hospitalList = $this->hospitalService->getHospital();

        if (!isset($params['time_range'])) {
            $params['time_range'] = date('01/01/Y') . ' - ' . date('d/m/Y');
        }
        if (!isset($params['hospital'])) {
            $params['hospital'] = $hospitalList->first()->id;
        }

        $recordList = $this->customerService->getPaymentCustomerByHospital($params);
        return view('admin.revenue.hospital-report', compact(['hospitalList', 'recordList']));
    }

    public function reportByContent(Request $request)
    {
        $params = $request->query();
        if (!isset($params['time_range'])) {
            $params['time_range'] = date('01/01/Y') . ' - ' . date('d/m/Y');
        }

        $paymentTypeList = $this->paymentTypeService->getPaymentTypeList();
        if (isset($paymentTypeList) && is_array($paymentTypeList) && count($paymentTypeList)) {
            foreach ($paymentTypeList as $key => $value) {
                $paymentTypeList[$key]['data'] = $this->paymentTypeService->countPaymentInsuranceById($value['id'], $params['time_range']);
            }
        }

        $paymentTypeListAnother = $this->paymentTypeService->getPaymentTypeListAnother($params['time_range']);
        return view('admin.revenue.content-report', compact(['paymentTypeList', 'paymentTypeListAnother']));
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
