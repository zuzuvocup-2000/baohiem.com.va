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
                        if (Auth::guard('isUserAdmin')->check()) {
                            $user = Auth::guard('isUserAdmin')->user();
                            if ($user->role_id == 'A') {
                                Auth::guard('isUserAdmin')->logout();
                                return redirect('/login')->with('error', __('login.error_01'))->withInput();
                            }
                            $this->saveLog(Auth::user()->id, __('login.login_success'));
                        }
                       return redirect('/account')->with('success', __('login.login_success'));
                    case 'isUserStaff':
                        if (Auth::guard('isUserStaff')->check()) {
                            $userStaff = Auth::guard('isUserStaff')->user();
                            if ($userStaff->active == STATUS_INACTIVE) {
                                Auth::guard('isUserStaff')->logout();
                                return redirect('/login')->with('error', __('login.error_01'))->withInput();
                            }
                        }
                       return redirect('/dashboard')->with('success', __('login.login_success'));
                    case 'isUserHospital':
                        if (Auth::guard('isUserHospital')->check()) {
                            $userHospital = Auth::guard('isUserHospital')->user();
                            if ($userHospital->active == STATUS_INACTIVE) {
                                Auth::guard('isUserHospital')->logout();
                                return redirect('/login')->with('error', __('login.error_01'))->withInput();
                            }
                            $this->saveLogHospital($userHospital->id, __('login.login_success'));
                        }
                       return redirect('/insurance-expenses/hospital')->with('success', __('login.login_success'));
                    case 'isUserCustomer':
                        if (Auth::guard('isUserCustomer')->check()) {
                            $userCustomer = Auth::guard('isUserCustomer')->user();
                            if ($userCustomer->active == STATUS_INACTIVE) {
                                Auth::guard('isUserCustomer')->logout();
                                return redirect('/login')->with('error', __('login.error_01'))->withInput();
                            }
                            $this->saveLogCustomer($userCustomer->id, __('login.login_success'));
                        }
                       return redirect('/insurance-expenses/index')->with('success', __('login.login_success'));
                }
            }
        }
        return redirect('/login')->with('error', __('login.error_02'))->withInput();
    }

    protected function authenticated(Request $request, $user)
    {
        // Custom logic after successful login
    }

    public function logout(HttpRequest $request) : RedirectResponse
    {
        if (Auth::guard('isUserHospital')->check()) {
            $userHospital = Auth::guard('isUserHospital')->user();
            $this->saveLogHospital($userHospital->id, __('login.logout_success'));
        }
        if (Auth::guard('isUserAdmin')->check()) {
            $this->saveLog(Auth::user()->id, __('login.logout_success'));
        }
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
