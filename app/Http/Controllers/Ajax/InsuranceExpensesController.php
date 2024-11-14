<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Services\CustomerGroupService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerService;
use App\Services\PeriodService;
use App\Services\AccountService;
use App\Services\HospitalService;
use App\Services\InsuranceExpensesService;
use App\Services\PaymentTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    protected $insuranceExpensesService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, ContractService $contractService, CustomerGroupService $customerGroupService, CustomerService $customerService, AccountService $accountService, HospitalService $hospitalService, PaymentTypeService $paymentTypeService, InsuranceExpensesService $insuranceExpensesService)
    {
        $this->customerGroupService = $customerGroupService;
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->customerService = $customerService;
        $this->accountService = $accountService;
        $this->hospitalService = $hospitalService;
        $this->paymentTypeService = $paymentTypeService;
        $this->insuranceExpensesService = $insuranceExpensesService;
    }

    public function detail($id)
    {
        return $this->insuranceExpensesService->getInsuranceDetail($id);
    }

    public function getDetailInsuranceExpenses(Request $request)
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

    public function calculator(Request $request)
    {
        try {
            $sotienchi = (int) str_replace(' ', '', $request->input('sotienchi', 0));
            $sotien = (int) str_replace(' ', '', $request->input('gioihankyBH', 0));
            $uocchi = (int) str_replace(' ', '', $request->input('uocchi', 0));
            $tkkhac = (int) str_replace(' ', '', $request->input('chiTKkhac', 0));
            $goi = filter_var($request->session()->get('goi', false), FILTER_VALIDATE_BOOLEAN);

            $sotienbituchoi = max($uocchi - $sotienchi, 0);
            $gioihanconlai = $sotien - $sotienchi - $tkkhac;

            if (!$goi && $gioihanconlai < 0) {
                return response()->json(['error' => true, 'message' => 'Số tiền chi vượt quá giới hạn!']);
            }

            return response()->json([
                'error' => false,
                'sotienbituchoi' => number_format($sotienbituchoi, 0, '', ' '),
                'gioihanconlai' => number_format($gioihanconlai, 0, '', ' ')
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'message' => 'Lỗi trong quá trình tính toán!']);
        }
    }
}
