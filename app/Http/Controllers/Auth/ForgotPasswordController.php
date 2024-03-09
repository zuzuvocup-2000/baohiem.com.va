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
        return view('admin.pages.auth.forgot');
    }
    protected function sendResetLinkEmail(ForgotPasswordRequest $request)
    {
        // Custom logic after successful login
    }
}
