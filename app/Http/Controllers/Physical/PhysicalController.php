<?php

namespace App\Http\Controllers\Physical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\PeriodService;

class PhysicalController extends Controller
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
    public function index()
    {
        $companyList = $this->companyService->getCompanyActive();
        $periodList = $this->periodService->getPeriodActive();
        $contractList = $this->contractService->getContractByCompanyAndPeriod($companyList->first()->id, $periodList->first()->id);
        return view('pages.physical.index', compact(['companyList', 'periodList', 'contractList']));
    }
}
