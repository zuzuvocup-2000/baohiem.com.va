<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Services\PeriodService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function create(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $data = $request->all();
            $period = Period::create([
                'period_name' => (string)$data['period_name'],
                'from_year' => (int)$data['from_year'],
                'to_year' => (int)$data['to_year'],
                'order' => (int)$data['order'],
                'log_date' => now(),
                'active' => STATUS_ACTIVE,
            ]);
            if ($period) {
                $this->saveLog(Auth::user()->id, 'Thông tin niên hạn được tạo thành công.');
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thông tin niên hạn được tạo thành công.', 'period' => $period]);
            }
        }
        return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.', 'period' => []]);
    }

    public function delete(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $periodId = $request->input('periodId');
            $period = Period::find($periodId);

            if ($period) {
                $period->update(['active' => STATUS_INACTIVE]);
                $this->saveLog(Auth::user()->id, 'Xóa niên hạn thành công.');
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa niên hạn thành công.']);
            }
        }
        return response()->json(['status' => STATUS_ERROR, 'message' => 'Không tìm thấy niên hạn.']);
    }

    public function update(Request $request)
    {
        if (Auth::guard('web')->check()) {
            $data = $request->all();
            $period = Period::find($data['periodId']);

            if ($period) {
                $period->update($data);
                $this->saveLog(Auth::user()->id, 'Cập nhật niên hạn thành công.');
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật niên hạn thành công.']);
            }
        }
        return response()->json(['status' => STATUS_ERROR, 'message' => 'Không tìm thấy niên hạn.']);
    }
}
