<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $redirectTo = '/home';

    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    protected function authenticated(Request $request, $user)
    {
        // Custom logic after successful login
    }

    protected function loggedOut(Request $request)
    {
        // Custom logic after logout
    }
}
