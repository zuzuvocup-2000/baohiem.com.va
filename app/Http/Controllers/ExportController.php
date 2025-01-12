<?php

namespace App\Http\Controllers;

use App\Services\CustomerService;
use App\Services\AccountService;
use App\Services\CompanyService;
use App\Services\ContractService;
use App\Services\PeriodService;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AccountListExport;
use App\Exports\AccountListResultExport;

class ExportController extends Controller
{
    protected $companyService;
    protected $periodService;
    protected $contractService;
    protected $accountService;
    protected $customerService;

    public function __construct(CompanyService $companyService, PeriodService $periodService, ContractService $contractService, CustomerService $customerService, AccountService $accountService)
    {
        $this->customerService = $customerService;
        $this->accountService = $accountService;
        $this->companyService = $companyService;
        $this->periodService = $periodService;
        $this->contractService = $contractService;
        $this->customerService = $customerService;
        $this->accountService = $accountService;
    }

    public function exportAccountList(Request $request)
    {
        $data = $this->customerService->getListAccountExport($request->all());

        if ($data !== null) {
            return Excel::download(new AccountListExport($data), 'AccountList.xlsx');
        } else {
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Không có dữ liệu để xuất']);
        }
    }

    public function exportAccountListResult(Request $request)
    {
        $params = $request->all();
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
        $data = $this->accountService->getAccountReport($params, false);

        if ($data !== null) {
            $exportPath = (new AccountListResultExport($data, $params['time_range']))->exportAccountListResult();
            return response()->download($exportPath)->deleteFileAfterSend(true);
        } else {
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Không có dữ liệu để xuất']);
        }
    }
}
