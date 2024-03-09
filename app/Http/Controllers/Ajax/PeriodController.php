<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Services\PeriodService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class PeriodController extends Controller
{
    protected $periodService;

    public function __construct(PeriodService $periodService)
    {
        $this->periodService = $periodService;
    }

    public function index(Request $request){
        $periods = $this->periodService->getPeriodActiveByCompany($request->get('company_id'));
        return Response::json($periods);
    }
}
