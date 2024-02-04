<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class AuthService
{
    public function login(array $credentials)
    {
        return Auth::attempt($credentials);
    }

    public function sendResetLink(array $credentials)
    {
        return Password::sendResetLink($credentials);
    }

    public function verifyEmail($id, $hash)
    {
        // $user = User::find($id);

        // if (!$user || !hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        //     return false;
        // }

        // $user->markEmailAsVerified();
        // return true;
    }
}
