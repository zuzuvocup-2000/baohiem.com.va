<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('pages.department.index');
    }

    public function store(Request $request)
    {
        $department = new Department();
        $department->department_name = $request->department_name;
        $department->active = STATUS_ACTIVE;
        $department->save();

        return response()->json(['success' => true, 'message' => 'Đã thêm phòng ban thành công.']);
    }

    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        if (!$department) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy phòng ban.']);
        }
        $department->department_name = $request->department_name;
        $department->save();

        return response()->json(['success' => true, 'message' => 'Phòng ban được cập nhật thành công.']);
    }

    public function destroy($id)
    {
        $department = Department::find($id);

        if (!$department) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy phòng ban.']);
        }

        $department->update(['active' => STATUS_INACTIVE]);
        return response()->json(['success' => true, 'message' => 'Đã xóa phòng ban thành công.']);
    }
}
