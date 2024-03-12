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
        $companyList = $this->companyService->getCompanyActiveSortByOrder();
        $periodList = $this->periodService->getPeriodActiveByCompany($companyList->first()->id);
        $contractList = $this->contractService->getContractByPeriod($periodList->first()->id);
        return view('admin.physical.index', compact(['companyList', 'periodList', 'contractList']));
    }
    public function detail()
    {
        return view('admin.physical.detail');
    }
}
