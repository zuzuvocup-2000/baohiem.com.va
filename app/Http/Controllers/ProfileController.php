<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Profile\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.profile.index');
    }
    public function changePasswordIndex()
    {
        return view('pages.profile.change-password');
    }
    public function changePassword(ProfileRequest $request)
    {
        $user = getInfoUserAdmin();
    
        if (Hash::check($request->current_password, $user->password)) {
            // Kiểm tra mật khẩu cũ đúng
            $user->update(['password' => Hash::make($request->new_password)]);
            return redirect()->route('home')->with('success', 'Mật khẩu của bạn đã được thay đổi thành công!');
        } else {
            // Mật khẩu cũ không đúng
            return back()->withErrors(['current_password' => 'Mật khẩu cũ không đúng.']);
        }
    }
}
