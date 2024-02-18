<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use App\Models\User;
use App\Services\EmployeeService;
use Illuminate\Http\Request;

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
        // Validate input
        $validatedData = $request->validate([
            'username' => 'required|unique:accounts',
            'email' => 'required|email|unique:accounts',
            'password' => 'required',
        ]);

        // Create account
        $account = User::create($validatedData);

        // Redirect to account list or show success message
        return redirect()->route('accounts.index')->with('success', 'Account created successfully.');
    }
}
