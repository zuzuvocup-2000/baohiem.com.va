<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Services\VaccinationService;
use Illuminate\Http\Request;


class VaccinationController extends Controller
{
    protected $vaccinationService;

    public function __construct(VaccinationService $vaccinationService)
    {
        $this->vaccinationService = $vaccinationService;
    }

    public function list(Request $request)
    {
        return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thu thập dữ liệu thành công.', 'data' => $this->vaccinationService->getVaccinationByClassification($request->get('vaccination'))]);
    }
}
