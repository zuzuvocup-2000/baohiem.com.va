<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Services\EmployeeService;
use App\Services\UserService;
use App\Services\DepartmentService;

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

    public function index()
    {
        $activeDepartments = $this->departmentService->getActiveDepartments();
        $userList = $this->userService->getUserList();
        return view('pages.user.index', compact(['activeDepartments', 'userList']));
    }

    public function create()
    {
        $employeeList = $this->employeeService->getEmployeeListActive();
        return view('pages.user.create', compact('employeeList'));
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
}
