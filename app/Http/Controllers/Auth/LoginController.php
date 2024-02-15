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
        $guards = ['users', 'users_nhan_su', 'users_benh_vien', 'users_khach_hang'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->attempt($credentials)) {
                return redirect('/dashboard');
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
