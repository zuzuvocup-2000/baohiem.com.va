<?php

namespace App\Http\Controllers\Ajax;

use App\Models\UserHospital;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserHospitalController extends Controller
{
    public function create(Request $request)
    {
        try {
            if (Auth::guard('web')->check()) {
                DB::beginTransaction();
                $data = $request->all();
                $userhospital = UserHospital::create([
                    'hospital_id' => (int)$data['hospital_id'],
                    'employee_name' => (string)$data['employee_name'],
                    'username' => (string)$data['username'],
                    'password' => bcrypt((string)$data['password']),
                    'active' => STATUS_ACTIVE
                ]);

                if (!$userhospital) {
                    throw new \Exception('Error creating Hospital');
                }
                $this->saveLog(Auth::user()->id, 'Thông tin tài khoản bệnh viện được tạo thành công.');

                DB::commit();
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thông tin tài khoản bệnh viện được tạo thành công.']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới tài khoản thất bại.']);
        }
    }

    public function delete(Request $request)
    {
        try {
            if (Auth::guard('web')->check()) {
                DB::beginTransaction();

                $userhospitalId = $request->input('userHospitalId');
                $userhospital = UserHospital::find($userhospitalId);

                if ($userhospital) {
                    $userhospital->update(['active' => STATUS_INACTIVE]);
                    $this->saveLog(Auth::user()->id, 'Xóa tài khoản bệnh viện thành công.');
                    DB::commit();

                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa tài khoản bệnh viện thành công.']);
                }
            }
            throw new \Exception('Không tìm thấy bệnh viện.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa tài khoản bệnh viện thất bại.']);
        }
    }

    public function update(Request $request)
    {
        try {
            if (Auth::guard('web')->check()) {
                DB::beginTransaction();

                $data = $request->all();
                $userhospital = UserHospital::find($data['hospitalUserId']);

                if ($userhospital) {
                    $userhospital->update([
                        'hospital_id' => (int)$data['hospital_id'],
                        'employee_name' => (string)$data['employee_name'],
                        'username' => (string)$data['username'],
                        // 'password' => bcrypt((string)$data['password']),
                    ]);
                    $this->saveLog(Auth::user()->id, 'Cập nhật thông tin tài khoản bệnh viện thành công.');
                    DB::commit();

                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật thông tin tài khoản bệnh viện thành công.']);
                }
            }
            throw new \Exception('Không tìm thông tin tài khoản bệnh viện.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật thông tin tài khoản bệnh viện thất bại.']);
        }
    }
}
