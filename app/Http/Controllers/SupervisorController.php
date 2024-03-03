<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\PeriodService;

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
        return view('pages.supervisor.insuranceExpenses');
    }

    public function account()
    {
        $companyList = $this->companyService->getCompanyActive();
        $periodList = $this->periodService->getPeriodActive();
        $contractList = $this->contractService->getContractByCompanyAndPeriod($companyList->first()->id, $periodList->first()->id);
        return view('pages.supervisor.account', compact(['companyList', 'periodList', 'contractList']));
    }

    public function accountOnline()
    {
        $companyList = $this->companyService->getCompanyActive();
        $periodList = $this->periodService->getPeriodActive();
        $contractList = $this->contractService->getContractByCompanyAndPeriod($companyList->first()->id, $periodList->first()->id);
        return view('pages.supervisor.account-online', compact(['companyList', 'periodList', 'contractList']));
    }
}
