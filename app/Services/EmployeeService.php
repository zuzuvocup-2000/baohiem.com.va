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

    public function getEmployeeList($departmentId = 0, $request){

    }
}
