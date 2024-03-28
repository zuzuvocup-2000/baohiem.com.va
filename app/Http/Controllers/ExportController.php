<?php

namespace App\Http\Controllers;
 
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Customer;
use App\Exports\AccountListExport;
use App\Exports\ContractExtensionExport;

class ExportController extends Controller
{
    protected $customerService;


    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
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
    public function ContractExtensionList(Request $request)
    {
        $data = $this->customerService->getListAccountExport($request->all());

        if ($data !== null) {
            return Excel::download(new ContractExtensionExport($data), 'ContractExtensionList.xlsx');
        } else {
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Không có dữ liệu để xuất']);
        }
    }
}

