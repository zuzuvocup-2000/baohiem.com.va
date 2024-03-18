<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Profile\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }
    public function changePasswordIndex()
    {
        return view('admin.profile.change-password');
    }
    public function changePassword(ProfileRequest $request)
    {
        $user = getInfoUserAdmin();

        if (Hash::check($request->current_password, $user->password)) {
            $user->update(['password' => Hash::make($request->new_password)]);
            return redirect()->route('home')->with('success', 'Mật khẩu của bạn đã được thay đổi thành công!');
        } else {
            return back()->withErrors(['current_password' => 'Mật khẩu cũ không đúng.']);
        }
    }
    public function update(Request $request)
    {
        $user = getInfoUserAdmin();
        $user->employee->update($request->only(['employee_name', 'email', 'phone_number', 'address']));
        return redirect()->route('profile.user')->with('success', 'Cập nhật thông tin cá nhân thành công!');
    }
}
