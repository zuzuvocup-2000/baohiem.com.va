<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Services\ContractService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ContractController extends Controller
{
    protected $contractService;

    public function __construct(ContractService $contractService)
    {
        $this->contractService = $contractService;
    }

    public function index(Request $request){
        $contracts = $this->contractService->getContractByPeriod($request->get('period_id'));
        return Response::json($contracts);
    }
}
