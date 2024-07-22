<?php

namespace App\Services;

use App\Models\Department;
use App\Models\User;
/**
 * Class DepartmentService
 * @package App\Services
 */
class DepartmentService
{
    /**
     * Get a list of active departments.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getActiveDepartments()
    {
        return Department::where('active', STATUS_ACTIVE)->get();
    }
    public function getUserByDepartments($id)
    {
        return User::select('tbl_user.id', 'tbl_user.username', 'tbl_department.id', 'tbl_department.active')
            ->join('tbl_employee', 'tbl_employee.id', '=', 'tbl_user.id')
            ->join('tbl_department', 'tbl_department.id', '=', 'tbl_employee.department_id')
            ->where(['tbl_department.active' => STATUS_ACTIVE, 'tbl_department.id' => $id])
            ->get();
    }
}
