<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/home';

    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $messages = [
            'username.required' => __('validation.username_required'),
            'password.required' => __('validation.password_required'),
            'username.string' => __('validation.username_string'),
            'password.string' => __('validation.password_string'),
        ];

        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], $messages);
        if (Auth::guard('users')->attempt($credentials)) {
            // Đăng nhập thành công
            return redirect('/dashboard');
        } elseif (Auth::guard('users_nhan_su')->attempt($credentials)) {
            // Đăng nhập thành công
            return redirect('/dashboard');
        } elseif (Auth::guard('users_benh_vien')->attempt($credentials)) {
            // Đăng nhập thành công
            return redirect('/dashboard');
        } elseif (Auth::guard('users_khach_hang')->attempt($credentials)) {
            // Đăng nhập thành công
            return redirect('/dashboard');
        } else {
            // Đăng nhập thất bại
            return redirect('/login')->with('error', 'Tên đăng nhập hoặc mật khẩu không chính xác.');
        }
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
