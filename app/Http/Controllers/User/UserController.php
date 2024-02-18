<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use App\Models\User;
use App\Services\EmployeeService;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
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
                'employee_code' => $validatedData['employee_code'],
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
