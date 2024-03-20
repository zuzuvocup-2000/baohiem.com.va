<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;
use App\Services\EmployeeService;
use App\Services\UserService;
use App\Services\DepartmentService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

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
        $roles = Role::all();
        $employeeList = $this->employeeService->getEmployeeListActive();
        return view('admin.user.create', compact('employeeList', 'roles'));
    }

    public function store(UserCreateRequest $request)
    {
        try {
            DB::beginTransaction();

            $validatedData = $request->post();

            $user = new User([
                'employee_id' => $validatedData['employee_id'],
                'role_id' => $validatedData['role_id'],
                'username' => $validatedData['username'],
                'password' => bcrypt($validatedData['password']),
                'active' => $validatedData['active'],
            ]);

            $user->save();

            DB::commit();
            $this->saveLog(Auth::user()->id, 'Thêm mới tài khoản thành công.');
            return redirect()->route('home')->with('success', __('accounts.add_new_success'));
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', __('accounts.add_new_error'));
        }
    }

    public function edit($id = 0)
    {
        $roles = Role::all();
        $user = $this->userService->getUserById($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Tài khoản không tồn tại.');
        }
        $employeeList = $this->employeeService->getEmployeeListActive();
        return view('admin.user.edit', compact('employeeList', 'user', 'roles'));
    }

    public function update($id, UserUpdateRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->userService->getUserById($id);
            if (!$user) {
                return redirect()->back()->with('error', 'Tài khoản không tồn tại.');
            }

            $user->update([
                'employee_id' => $request->employee_id,
                'role_id' => $request->role_id,
                'username' => $request->username,
            ]);

            DB::commit();
            $this->saveLog(Auth::user()->id, 'Cập nhật tài khoản thành công.');
            return redirect()->route('user.index')->with('success', 'Tài khoản đã được cập nhật thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi cập nhật tài khoản.');
        }
    }

    public function delete($id)
    {
        $user = $this->userService->getUserById($id);
        if (!$user) {
            return response()->json(['error' => 'Tài khoản không tồn tại.'], 404);
        }

        $user->update([
            'active' => STATUS_INACTIVE,
        ]);
        return response()->json(['success' => 'Xóa tài khoản thành công.']);
    }
}
