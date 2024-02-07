<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('pages.auth.forgot');
    }

    protected function sendResetLinkEmail(Request $request, $user)
    {
        // Custom logic after successful login
    }
}
