<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Services\HorseService;
use Illuminate\Http\Request;


class HorseController extends Controller
{
    protected $horseService;

    public function __construct(HorseService $horseService)
    {
        $this->horseService = $horseService;
    }

    public function list(Request $request)
    {
        return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thu thập dữ liệu thành công.', 'data' => $this->horseService->getHorsesByClassification($request->get('horse_classification'))]);
    }
}
