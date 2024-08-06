<?php

namespace App\Services;

use App\Models\Employee;

/**
 * Class EmployeeService
 * @package App\Services
 */
class EmployeeService
{
    public function getEmployeeListActive()
    {
        $employeeList = Employee::where('active', STATUS_ACTIVE)->get();
        $formattedEmployeeList = $employeeList->pluck('employee_name', 'id')->toArray();
        return $formattedEmployeeList;
    }

    public function getEmployeesByDepartment($departmentId = null, $positionId = null, $keyword = null)
    {
        $query = Employee::join('tbl_department', 'tbl_employee.department_id', '=', 'tbl_department.id')
            ->join('tbl_position', 'tbl_employee.position_id', '=', 'tbl_position.id')
            ->select(
                'tbl_department.id as department_id', 
                'tbl_department.department_name', 
                'tbl_employee.employee_name', 
                'tbl_employee.id as employee_code', 
                'tbl_employee.address', 
                'tbl_employee.phone_number', 
                'tbl_employee.email', 
                'tbl_position.id as position_id', 
                'tbl_position.name as position_name'
            )
            ->where('tbl_employee.active', STATUS_ACTIVE);

        if ($departmentId) {
            $query->where('tbl_employee.department_id', $departmentId);
        }

        if ($positionId) {
            $query->where('tbl_employee.position_id', $positionId);
        }

        if ($keyword) {
            $query->where(function($q) use ($keyword) {
                $q->where('tbl_employee.employee_name', 'LIKE', "%{$keyword}%")
                  ->orWhere('tbl_employee.address', 'LIKE', "%{$keyword}%")
                  ->orWhere('tbl_employee.phone_number', 'LIKE', "%{$keyword}%")
                  ->orWhere('tbl_employee.email', 'LIKE', "%{$keyword}%");
            });
        }

        return $query->paginate(20);
    }
    public function getEmployeesById($id)
    {
        return Employee::join('tbl_department', 'tbl_employee.department_id', '=', 'tbl_department.id')
            ->join('tbl_position', 'tbl_employee.position_id', '=', 'tbl_position.id')
            ->select(
                'tbl_employee.id',
                'tbl_employee.employee_name',
                'tbl_department.department_name',
                'tbl_position.name',
                'tbl_employee.email',
                'tbl_employee.address', 
                'tbl_employee.phone_number', 
                'tbl_employee.position_id', 
            )
            ->where('tbl_employee.active', STATUS_ACTIVE)
            ->where('tbl_employee.id', $id)
            ->first();
    }
}
