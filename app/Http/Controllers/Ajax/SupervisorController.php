<?php

namespace App\Http\Controllers\Ajax;

use App\Models\PaymentDetail;
use App\Models\Account;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function recover(Request $request)
    {
        try {
            if (Auth::check()) {
                DB::beginTransaction();
                $ids = $request->input('ids');
                if (!empty($ids)) {
                    PaymentDetail::whereIn('id', $ids)->update(['active' => STATUS_ACTIVE]);
                    $this->saveLog(Auth::user()->id, 'Khôi phục dữ liệu Chi bảo hiểm được chọn thành công');
                    DB::commit();
                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Khôi phục dữ liệu Chi bảo hiểm thành công.']);
                } else {
                    throw new \Exception('Không có Chi bảo hiểm nào được chọn.');
                }
            } else {
                throw new \Exception('Không tìm thấy Chi bảo hiểm.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Khôi phục Chi bảo hiểm thất bại.']);
        }
    }
    public function recoverAccount(Request $request)
    {
        try {
            if (Auth::check()) {
                DB::beginTransaction();
                $ids = $request->input('ids');
                if (!empty($ids)) {
                    Account::whereIn('id', $ids)->update(['active' => STATUS_ACTIVE]);
                    PaymentDetail::whereIn('id', $ids)->update(['active' => STATUS_ACTIVE]);
                    $this->saveLog(Auth::user()->id, 'Khôi phục dữ liệu Chi bảo hiểm được chọn thành công');
                    DB::commit();
                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Khôi phục dữ liệu Chi bảo hiểm thành công.']);
                } else {
                    throw new \Exception('Không có Chi bảo hiểm nào được chọn.');
                }
            } else {
                throw new \Exception('Không tìm thấy Chi bảo hiểm.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Khôi phục Chi bảo hiểm thất bại.']);
        }
    }

    
}
