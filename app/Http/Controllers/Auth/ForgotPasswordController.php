<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Http\Requests\ForgotPasswordRequest;
use Illuminate\Support\Facades\Auth;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('pages.auth.forgot');
    }
    public function forgot(ForgotPasswordRequest $request)
    {
        $credentials = $request->only('email');
        $guards = ['users', 'users_nhan_su', 'users_benh_vien', 'users_khach_hang'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->attempt($credentials)) {
                return redirect('/verify');
            }
        }
        $emailExists = User::where('email', $credentials['email'])->exists();
        if (!$emailExists) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email không tồn tại trong hệ thống']);
        }
        return redirect('/forgot')->with('error', 'Email không hợp lệ.')->withInput();
    }
    protected function sendResetLinkEmail(Request $request, $user)
    {
        // Custom logic after successful login
    }
}
