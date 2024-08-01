<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\DepartmentService;
use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeService;
    protected $departmentService;

    public function __construct(DepartmentService $departmentService, EmployeeService $employeeService)
    {
        $this->departmentService = $departmentService;
        $this->employeeService = $employeeService;
    }

    public function index(Request $request)
    {
        $activeDepartments = $this->departmentService->getActiveDepartments();
        $employeeList = $this->employeeService->getemployeeList($activeDepartments->first()->id, $request);
        return view('admin.employee.index', compact(['employeeList', 'activeDepartments']));
    }
}
