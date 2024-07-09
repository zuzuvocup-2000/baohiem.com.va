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
}
