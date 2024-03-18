<?php

namespace App\Http\Controllers\Admin;

use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\PeriodService;
use App\Http\Controllers\Controller;

class SupervisorController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $contractService;

    public function __construct(
        CompanyService $companyService,
        PeriodService $periodService,
        ContractService $contractService,
    ) {
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
    }

    public function insuranceExpenses()
    {
        return view('admin.supervisor.insuranceExpenses');
    }

    public function account()
    {
        $companyList = $this->companyService->getCompanyActiveSortByOrder();
        $periodList = $this->periodService->getPeriodActiveByCompany($companyList->first()->id);
        $contractList = $this->contractService->getContractByPeriod($periodList->first()->id);
        return view('admin.supervisor.account', compact(['companyList', 'periodList', 'contractList']));
    }

    public function accountOnline()
    {
        $companyList = $this->companyService->getCompanyActiveSortByOrder();
        $periodList = $this->periodService->getPeriodActiveByCompany($companyList->first()->id);
        $contractList = $this->contractService->getContractByPeriod($periodList->first()->id);
        return view('admin.supervisor.account-online', compact(['companyList', 'periodList', 'contractList']));
    }
}
