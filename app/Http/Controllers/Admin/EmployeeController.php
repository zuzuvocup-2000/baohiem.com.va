<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Employee\EmployeeCreateRequest;
use App\Http\Requests\Employee\EmployeeUpdateRequest;
use App\Services\DepartmentService;
use App\Services\EmployeeService;
use App\Services\PositionService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeService;
    protected $departmentService;
    

    public function __construct(DepartmentService $departmentService, EmployeeService $employeeService,PositionService $positionService,)
    {
        $this->departmentService = $departmentService;
        $this->employeeService = $employeeService;
        $this->positionService = $positionService;
    }

    public function index(Request $request)
    {
        $departmentList = $this->departmentService->getActiveDepartments();
        $positionList = $this->positionService->getActivePositions();

        $departmentId = $request->get('department');
        $positionId = $request->get('position');
        $keyword = $request->get('keyword');

        $employeeList = $this->employeeService->getEmployeesByDepartment($departmentId, $positionId, $keyword);

        return view('admin.employee.index', compact(['employeeList', 'departmentList', 'positionList']));
    }

    public function create()
    {
        $departmentList = $this->departmentService->getActiveDepartments();
        $positionList = $this->positionService->getActivePositions();
        $employeeList = $this->employeeService->getEmployeeListActive();
        return view('admin.employee.create', compact('employeeList', 'departmentList', 'positionList'));
    }

    public function store(EmployeeCreateRequest $request)
    {
        try {
            DB::beginTransaction();

            $validatedData = $request->post();

            $employee = new Employee([
                'department_id' => $validatedData['department_id'],
                'employee_name' => $validatedData['employee_name'],
                'address' => $validatedData['address'],
                'phone_number' => $validatedData['phone_number'],
                'email' => $validatedData['email'],
                'position_id' => $validatedData['position_id'],
            ]);

            $employee->save();

            DB::commit();
            $this->saveLog(Auth::user()->id, 'Thêm mới nhân viên thành công.');
            return redirect()->route('home')->with('success', __('accounts.add_new_success'));
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', __('accounts.add_new_error'));
        }
    }

    public function edit($id = 0)
    {
        $departmentList = $this->departmentService->getActiveDepartments();
        $positionList = $this->positionService->getActivePositions();
        $employee = $this->employeeService->getEmployeesById($id);
        if (!$employee) {
            return redirect()->back()->with('error', 'nhân viên không tồn tại.');
        }
        $employeeList = $this->employeeService->getEmployeeListActive();
        return view('admin.employee.edit', compact('employeeList', 'employee', 'positionList', 'departmentList'));
    }

    public function update($id, EmployeeUpdateRequest $request)
    {
        try {
            DB::beginTransaction();
            $employee = $this->employeeService->getEmployeesById($id);
            if (!$employee) {
                return redirect()->back()->with('error', 'nhân viên không tồn tại.');
            }

            $employee->update([
                'employee_name' => $request->employee_name,
                'department_id' => $request->department_id,
                'address' =>$request->address,
                'phone_number' =>$request->phone_number,
                'email' =>$request->email,
                'position_id' =>$request->position_id,
            ]);

            DB::commit();
            $this->saveLog(Auth::user()->id, 'Cập nhật nhân viên thành công.');
            return redirect()->route('employee.index')->with('success', 'nhân viên đã được cập nhật thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi cập nhật nhân viên.');
        }
    }

    public function delete($id)
    {
        $employee = $this->employeeService->getEmployeesById($id);
        if (!$employee) {
            return response()->json(['error' => 'nhân viên không tồn tại.'], 404);
        }

        $employee->update([
            'active' => STATUS_INACTIVE,
        ]);
        return response()->json(['success' => 'Xóa nhân viên thành công.']);
    }
}
