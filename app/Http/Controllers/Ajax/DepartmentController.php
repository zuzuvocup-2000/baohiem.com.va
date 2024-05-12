<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Department;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function create(Request $request)
    {
        try {
            if (Auth::guard('isUserAdmin')->check()) {
                DB::beginTransaction();
    
                $data = $request->all();
                $department = Department::create([
                    'department_name' => (string)$data['department_name'],
                    'active' => STATUS_ACTIVE
                ]);
    
                if (!$department) {
                    throw new \Exception('Error creating department');
                }
    
                $this->saveLog(Auth::user()->id, 'Thêm mới phòng ban thành công.');
    
                DB::commit();
                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thêm mới phòng ban thành công.']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.']);
        }
    }

    public function delete(Request $request)
    {
        try {
            if (Auth::guard('isUserAdmin')->check()) {
                DB::beginTransaction();

                $departmentId = $request->input('departmentId');
                $department = Department::find($departmentId);

                if ($department) {
                    $department->update(['active' => STATUS_INACTIVE]);
                    $this->saveLog(Auth::user()->id, 'Xóa phòng ban thành công.');
                    DB::commit();

                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa phòng ban thành công.']);
                }

            }
            
            throw new \Exception('Không tìm thấy phòng ban  .');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa phòng ban thất bại.']);
        }
    }

    public function update(Request $request)
    {
        try {
            if (Auth::guard('isUserAdmin')->check()) {
                DB::beginTransaction();

                $data = $request->all();
                $department = Department::find($data['departmentId']);

                if ($department) {
                    $department->update([
                        'department_name' => (string)$data['department_name'],
                    ]);
                    $this->saveLog(Auth::user()->id, 'Cập nhật phòng ban thành công.');
                    DB::commit();

                    return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật phòng ban thành công.']);
                }
            }
            

            throw new \Exception('Không tìm thấy phòng ban.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật phòng ban  thất bại.']);
        }
    }
}
