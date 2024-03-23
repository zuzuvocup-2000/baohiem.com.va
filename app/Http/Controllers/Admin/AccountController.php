<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CustomerGroupService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\CustomerService;
use App\Services\PeriodService;
use App\Models\Customer;
use App\Models\PeriodDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AccountController extends Controller
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
        $accountList = $this->customerService->getListAccount($params);
        return view('admin.account.index', compact(['customerGroupList', 'companyList', 'periodList', 'contractList', 'accountList', 'contractDetail']));
    }

    public function detail($id, $periodId, $contractId)
    {
        $distinctid = Customer::join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')->crossJoin('tbl_package_detail')->join('tbl_company', 'tbl_package_detail.company_id', '=', 'tbl_company.id')->join('tbl_account_detail_detail', 'tbl_package_detail.id', '=', 'tbl_account_detail_detail.package_detail_id')->join('tbl_period_detail', 'tbl_company.id', '=', 'tbl_period_detail.company_id')->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')->select('tbl_contract.id')->where('tbl_account_detail.customer_id', '=', $id)->where('tbl_period_detail.period_id', '=', $periodId)->where('tbl_contract.active', '=', 1)->distinct()->get();
        $distinctData = PeriodDetail::join('tbl_company', 'tbl_period_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
            ->join('tbl_period', 'tbl_period_detail.period_id', '=', 'tbl_period.id')
            ->crossJoin('tbl_package_detail')
            ->join('tbl_account_detail_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
            ->join('tbl_account', 'tbl_account_detail_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_customer_group', 'tbl_customer.customer_group_id', '=', 'tbl_customer_group.id')
            ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
            ->join('tbl_customer_type', 'tbl_customer.customer_type_id', '=', 'tbl_customer_type.id')
            ->select(
                'tbl_customer.id',
                'tbl_customer.full_name',
                DB::raw('CONVERT(nvarchar, tbl_customer.birth_year, 103) AS birth_year'),
                'tbl_customer.address',
                'tbl_customer.images',
                'tbl_account.note',
                'tbl_customer.folder',
                'tbl_customer.identity_card_number',
                'tbl_customer.issue_date',
                'tbl_customer.issue_place',
                'tbl_customer.contact_phone',
                'tbl_customer.email',
                'tbl_customer.gender',
                'tbl_information_insurance.card_number',
                DB::raw('CONVERT(nvarchar, tbl_contract.effective_time, 103) AS effective_time'),
                DB::raw('CONVERT(nvarchar, tbl_contract.end_time, 103) AS end_time'),
                'tbl_account_package.package_price',
                'tbl_account_package.id',
                'tbl_account_package.package_name',
                'tbl_customer_group.id',
                'tbl_customer_group.group_name',
                'tbl_contract.id',
                'tbl_account_detail.account_holder',
                'tbl_contract.contract_name',
                'tbl_contract.contract_supplement_number',
                'tbl_period.period_name',
                'tbl_company.company_name',
                'tbl_account.active',
                'tbl_province.id',
                'tbl_province.province_name',
                'tbl_customer_type.id',
                'tbl_account.staff_code',
                'tbl_account.id',
                'tbl_account_detail_detail.prepayment',
                'tbl_customer_type.type_name',
                'tbl_customer.locked',
                'tbl_information_insurance.old_card_number',
                'tbl_account_detail.first_visit_date',
            )
            ->where('tbl_customer.id', '=', $id)
            ->where('tbl_contract.active', '=', 1)
            ->where('tbl_period.id', '=', $periodId)
            ->where('tbl_account_detail.active', '=', 1)
            ->where('tbl_contract.id', '=', $contractId)
            ->distinct()
            ->get();
        return view('admin.account.detail', compact(['distinctid', 'distinctData']));
    }
    public function insurance()
    {
        return view('admin.account.insurance');
    }
    public function expenses()
    {
        return view('admin.account.expenses');
    }
}
