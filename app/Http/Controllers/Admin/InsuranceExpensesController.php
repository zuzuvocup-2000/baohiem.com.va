<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CustomerGroupService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerService;
use App\Services\PeriodService;
use App\Services\AccountService;
use App\Services\HospitalService;
use App\Services\PaymentTypeService;
use Illuminate\Http\Request;

class InsuranceExpensesController extends Controller
{
    protected $customerGroupService;
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $accountService;
    protected $customerService;
    protected $hospitalService;
    protected $paymentTypeService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, ContractService $contractService, CustomerGroupService $customerGroupService, CustomerService $customerService, AccountService $accountService, HospitalService $hospitalService, PaymentTypeService $paymentTypeService)
    {
        $this->customerGroupService = $customerGroupService;
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->customerService = $customerService;
        $this->accountService = $accountService;
        $this->hospitalService = $hospitalService;
        $this->paymentTypeService = $paymentTypeService;
    }

    public function index(Request $request)
    {
        $data = $this->prepareData($request);
        $params = $request->query();
        $hospitalList = $this->hospitalService->getHospital();
        $paymentTypeList = $this->paymentTypeService->getPaymentTypeList();
        $accountList = isset($params['keyword']) && !empty($params['keyword']) ? $this->customerService->getCustomerByKeyword($params) : [];
        return view('admin.insurance-expenses.index', array_merge($data, compact(['accountList', 'hospitalList', 'paymentTypeList'])));
    }

    public function insuranceDay(Request $request)
    {
        $data = $this->prepareData($request);
        return view('admin.insurance-expenses.insurance-day', $data);
    }

    public function insuranceHospital(Request $request)
    {
        $data = $this->prepareData($request);
        return view('admin.insurance-expenses.insurance-hospital', $data);
    }

    public function insuranceDiary(Request $request)
    {
        $data = $this->prepareData($request);
        return view('admin.insurance-expenses.insurance-diary', $data);
    }

    public function getDetailAccount(Request $request)
    {
        $params = $request->query();
        $customer = $this->customerService->getCustomerByCustomerId($params['id'], $params['periodId']);
        $customerPay = $this->customerService->getListCustomersPayForInsuranceByCustomerId($params['id']);
        $amountSpent = $this->customerService->getMoneyAmountSpent($params['id'], $params['periodId']);
        return [
            'customer' => $customer,
            'customerPay' => $customerPay,
            'amountSpent' => $amountSpent,
        ];
    }

    private function prepareData(Request $request)
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

        // Trả về một mảng chứa dữ liệu đã chuẩn bị
        return compact('customerGroupList', 'companyList', 'periodList', 'contractList', 'contractDetail');
    }
}
