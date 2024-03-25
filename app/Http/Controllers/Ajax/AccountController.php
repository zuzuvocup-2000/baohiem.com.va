<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function locked(Request $request)
    {
        try {
            if (Auth::check()) {
                DB::beginTransaction();
                $ids = $request->input('ids');
                if (!empty($ids)) {
                    Customer::whereIn('id', $ids)->update(['locked' => STATUS_INACTIVE]);
                    $this->saveLog(Auth::user()->id, 'Khóa tài khoản được chọn thành công');
                    DB::commit();
                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Khóa tài khoản thành công.']);
                } else {
                    throw new \Exception('Không có tài khoản nào được chọn.');
                }
            } else {
                throw new \Exception('Không tìm thấy tài khoản.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Khóa tài khoản thất bại.']);
        }
    }

    public function unlocked(Request $request)
    {
        try {
            if (Auth::check()) {
                DB::beginTransaction();
                $ids = $request->input('ids');
                if (!empty($ids)) {
                    Customer::whereIn('id', $ids)->update(['locked' => STATUS_ACTIVE]);
                    $this->saveLog(Auth::user()->id, 'Mở khóa tài khoản được chọn thành công');
                    DB::commit();
                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Mở khóa tài khoản thành công.']);
                } else {
                    throw new \Exception('Không có tài khoản nào được chọn.');
                }
            } else {
                throw new \Exception('Không tìm thấy tài khoản.');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Mở khóa tài khoản thất bại.']);
        }
    }
}
