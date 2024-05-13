<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\PeriodService;
use App\Services\PhysicalService;
use Illuminate\Http\Request;

class PhysicalController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $physicalService;

    public function __construct(
        CompanyService $companyService,
        PeriodService $periodService,
        ContractService $contractService,
        PhysicalService $physicalService,
    ) {
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->physicalService = $physicalService;
    }
    public function index(Request $request)
    {
        $params = $request->query();
        if (!isset($params['time_range'])) {
            $params['time_range'] = date('01/01/Y') . ' - ' . date('d/m/Y');
        }
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

        $physicalList = $this->physicalService->getPhysical($companyList->first()->id,$params['time_range'],$params);
        return view('admin.physical.index', compact(['companyList', 'periodList', 'contractList','physicalList']));
    }
    public function detail()
    {
        return view('admin.physical.detail');
    }
    public function periodic()
    {
        return view('admin.physical.periodic');
    }
}
