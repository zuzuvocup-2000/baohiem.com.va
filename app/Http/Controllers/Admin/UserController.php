<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Services\EmployeeService;
use App\Services\UserService;
use App\Services\DepartmentService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    protected $employeeService;
    protected $departmentService;

    public function __construct(EmployeeService $employeeService, DepartmentService $departmentService, UserService $userService)
    {
        $this->employeeService = $employeeService;
        $this->departmentService = $departmentService;
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $activeDepartments = $this->departmentService->getActiveDepartments();
        $userList = $this->userService->getUserList($request);
        return view('admin.user.index', compact(['activeDepartments', 'userList']));
    }

    public function create()
    {
        $employeeList = $this->employeeService->getEmployeeListActive();
        return view('admin.user.create', compact('employeeList'));
    }

    public function store(UserCreateRequest $request)
    {
        try {
            DB::beginTransaction();

            $validatedData = $request->post();

            $user = new User([
                'employee_id' => $validatedData['employee_id'],
                'QUYENYTRUYCAP' => $validatedData['QUYENYTRUYCAP'],
                'username'      => $validatedData['username'],
                'password'      => bcrypt($validatedData['password']),
                'active'        => $validatedData['active'],
            ]);

            $user->save();

            DB::commit();

            return redirect()->route('home')->with('success', __('accounts.add_new_success'));
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', __('accounts.add_new_error'));
        }
    }

    public function edit($id = 0)
    {
        $user = $this->userService->getUserById($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Tài khoản không tồn tại.');
        }
        $employeeList = $this->employeeService->getEmployeeListActive();
        return view('admin.user.edit', compact('employeeList', 'user'));
    }

    public function update($id, UserUpdateRequest $request)
    {
        $user = $this->userService->getUserById($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Tài khoản không tồn tại.');
        }

        $user->update([
            'employee_id' => $request->employee_id,
            'QUYENYTRUYCAP' => $request->QUYENYTRUYCAP,
            'username' => $request->username,
            'active' => $request->active
        ]);
        return redirect()->route('user.index')->with('success', 'Tài khoản đã được cập nhật thành công.');
    }

    public function delete($id)
    {
        $user = $this->userService->getUserById($id);
        if (!$user) {
            return response()->json(['error' => 'Tài khoản không tồn tại.'], 404);
        }

        $user->update([
            'active' => STATUS_INACTIVE
        ]);
        return response()->json(['success' => 'Xóa tài khoản thành công.']);
    }
}
