<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/home';

    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');
        $guards = ['user_admins', 'user_employees', 'user_hospitals', 'user_customers'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->attempt($credentials)) {
                if (Auth::guard('user_admins')->check()) {
                    return redirect('/dashboard');
                } else {
                    return redirect('/');
                }
            }
        }

        return redirect('/login')->with('error', 'Tên đăng nhập hoặc mật khẩu không chính xác.')->withInput();
    }

    protected function authenticated(Request $request, $user)
    {
        // Custom logic after successful login
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
