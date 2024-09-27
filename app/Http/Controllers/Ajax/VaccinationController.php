<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\VaccinationSchedule;
use App\Models\VaccinationResult;
use App\Services\VaccinationService;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
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
        return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thu thập dữ liệu thành công.', 'data' => $this->vaccinationService->getVaccinationByClassification($request->get('classification_id'))]);
    }
    public function create(Request $request)
    {
        try {
            if (Auth::guard('isUserAdmin')->check()) {
                DB::beginTransaction();
                $data = $request->all();
                $vaccinationShedule = VaccinationSchedule::create([
                    'injection_name' => (string)$data['injection_name'],
                    'months_to_first' => (int)$data['months_to_first'],
                    'vaccination_id' => (int)$data['vaccination_id'],
                    'months_to_repeat' => (int)$data['months_to_repeat'],
                    'active' => STATUS_ACTIVE
                ]);
                $vaccinationResult = VaccinationResult::create([
                    'injection_date' => Carbon::createFromTimestamp($data['injection_date'])->format('Y-m-d H:i:s'),
                    'vaccination_schedule_id' => $vaccinationShedule->id,
                    'customer_id' => $vaccinationShedule->id,
                    'active' => STATUS_ACTIVE
                ]);
                if (!$vaccinationShedule || !$vaccinationResult) {
                    throw new \Exception('Error creating Vaccination');
                }
                $this->saveLog(Auth::user()->id, 'Thêm thông tin chủng ngừa thành công.');
                DB::commit();
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thông tin lần tiêm được tạo thành công.']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm thông tin chủng ngừa']);
        }
    }
}
