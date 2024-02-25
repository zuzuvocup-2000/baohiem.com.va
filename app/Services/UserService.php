<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{
    public function getUserById($id)
    {
        return User::find($id);
    }

    public function getUserList(Request $request)
    {
        $query = User::with(['employee'])->where(['tbl_user.active' => STATUS_ACTIVE])->orderBy('username', 'asc');

        if ($request->has('department') && !empty($request->department)) {
            $department_id = $request->department;
            $query->whereHas('employee', function ($employeeQuery) use ($department_id) {
                $employeeQuery->where(['department_id' => $department_id]);
            });
        }
        if ($request->has('keyword') && !empty($request->keyword)) {
            $keyword = $request->keyword;

            $query->where(function ($query) use ($keyword) {
                $query->whereHas('employee', function ($employeeQuery) use ($keyword) {
                    $employeeQuery->where('employee_name', 'like', '%' . $keyword . '%');
                });
                $query->orWhere('username', 'like', '%' . $keyword . '%');
            });
        }

        return $query->paginate(PER_PAGE_SMALL);
    }
}
