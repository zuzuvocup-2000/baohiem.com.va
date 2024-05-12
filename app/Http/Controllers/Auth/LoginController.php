<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request as HttpRequest;

class LoginController extends Controller
{
    protected $redirectTo = '/home';

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');
        $guards = ['isUserAdmin', 'isUserStaff', 'isUserHospital', 'isUserCustomer'];
        $remember = $request->filled('remember');

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->attempt($credentials, $remember)) {
                switch ($guard) {
                    case 'isUserAdmin':
                        return redirect('/dashboard')->with('success', 'Đăng nhập thành công!');
                    case 'isUserStaff':
                        return redirect('/dashboard')->with('success', 'Đăng nhập thành công!');
                    case 'isUserHospital':
                        return redirect('/dashboard')->with('success', 'Đăng nhập thành công!');
                    case 'isUserCustomer':
                        return redirect('/dashboard')->with('success', 'Đăng nhập thành công!');
                }
            }
        }

        return redirect('/login')->with('error', 'Tên đăng nhập hoặc mật khẩu không chính xác.')->withInput();
    }

    protected function authenticated(Request $request, $user)
    {
        // Custom logic after successful login
    }

    public function logout(HttpRequest $request) : RedirectResponse
{
    if (Auth::check()) {
        $this->saveLog(Auth::user()->id, 'Đăng xuất thành công');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
    return redirect('/login');
}
}
