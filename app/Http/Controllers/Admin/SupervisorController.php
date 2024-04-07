<?php

namespace App\Http\Controllers\Admin;

use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\PeriodService;
use App\Services\SupervisorService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $supervisorService;

    public function __construct(
        CompanyService $companyService,
        SupervisorService $supervisorService,
        PeriodService $periodService,
        ContractService $contractService,
    ) {
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->supervisorService = $supervisorService;
    }

    public function insuranceExpenses(Request $request)
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
        $supervisorList = $this->supervisorService->getDeletedInsuranceExpenseList($params);
        return view('admin.supervisor.insuranceExpenses', compact(['supervisorList']));
    }

    public function account(Request $request)
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
        $companyList = $this->companyService->getCompanyActiveSortByOrder();
        $periodList = $this->periodService->getPeriodActiveByCompany($companyList->first()->id);
        $contractList = $this->contractService->getContractByPeriod($periodList->first()->id);
        $accountList = $this->supervisorService->getDeletedAccountList($params['contract']);

        return view('admin.supervisor.account', compact(['companyList', 'periodList', 'contractList', 'accountList']));
    }

    public function accountOnline()
    {
        $companyList = $this->companyService->getCompanyActiveSortByOrder();
        $periodList = $this->periodService->getPeriodActiveByCompany($companyList->first()->id);
        $contractList = $this->contractService->getContractByPeriod($periodList->first()->id);
        return view('admin.supervisor.account-online', compact(['companyList', 'periodList', 'contractList']));
    }
}
