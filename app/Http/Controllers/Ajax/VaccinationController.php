<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\VaccinationSchedule;
use App\Models\VaccinationResult;
use App\Services\VaccinationService;
use App\Services\VaccinationScheduleService;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;


class VaccinationController extends Controller
{
    protected $vaccinationService;
    protected $vaccinationScheduleService;

    public function __construct(VaccinationService $vaccinationService, VaccinationScheduleService $vaccinationScheduleService)
    {
        $this->vaccinationService = $vaccinationService;
        $this->vaccinationScheduleService = $vaccinationScheduleService;
    }

    public function list(Request $request)
    {
        return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thu thập dữ liệu thành công.', 'data' => $this->vaccinationService->getVaccinationByClassification($request->get('classification_id'))]);
    }

    public function getSchedule(Request $request)
    {
        try {
            $vaccinationId = $request->input('vaccination_id');
            $customerId = $request->input('customer_id');

            if (!$vaccinationId || !$customerId) {
                return response()->json(['status' => 'error', 'message' => 'Thông tin không hợp lệ.'], 400);
            }

            $vaccinationScheduleList = $this->vaccinationScheduleService->getVaccinationScheduleByVaccinationIdAndCustomerId($vaccinationId, $customerId);

            return response()->json([
                'status' => 'success',
                'message' => 'Thu thập dữ liệu thành công.',
                'data' => $vaccinationScheduleList
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Đã xảy ra lỗi khi thu thập dữ liệu.'], 500);
        }
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
                    'injection_date' => Carbon::createFromFormat('d/m/Y', $data['injection_date']),
                    'vaccination_schedule_id' => $vaccinationShedule->id,
                    'customer_id' => (int)$data['customerId'],
                    'result_confirm' => STATUS_ACTIVE,
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
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm thông tin chủng ngừa thất bại']);
        }
    }

    public function update(Request $request)
    {
        try {
            if (Auth::guard('isUserAdmin')->check()) {
                DB::beginTransaction();
                $data = $request->all();

                $vaccinationResult = VaccinationResult::find($data['vaccinationId']);
                $vaccinationShedule = VaccinationSchedule::find($vaccinationResult->vaccination_schedule_id);

                $vaccinationShedule->update([
                    'injection_name' => (string)$data['injection_name'],
                    'months_to_first' => (int)$data['months_to_first'],
                    'months_to_repeat' => (int)$data['months_to_repeat'],
                ]);

                $vaccinationResult->update([
                    'injection_date' => Carbon::createFromFormat('d/m/Y', $data['injection_date']),
                ]);

                $this->saveLog(Auth::user()->id, 'Cập nhật thông tin chủng ngừa thành công.');
                DB::commit();
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật thông tin lần tiêm thành công.']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật thông tin chủng ngừa thất bại: ' . $e->getMessage()]);
        }
    }

    public function delete(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();

            $vaccinationResult = VaccinationResult::find($data['vaccinationId']);
            $vaccinationShedule = VaccinationSchedule::find($vaccinationResult->vaccination_schedule_id);

            if ($vaccinationResult && $vaccinationShedule) {
                $vaccinationShedule->update([
                    'active' => STATUS_INACTIVE,
                ]);

                $vaccinationResult->update([
                    'active' => STATUS_INACTIVE,
                ]);
                $this->saveLog(Auth::user()->id, 'Xóa thông tin chủng ngừa thành công.');
                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa thông tin chủng ngừa thành công.']);
            }

            throw new \Exception('Không tìm thấy thông tin chủng ngừa.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa thông tin chủng ngừa thất bại.']);
        }
    }
}
