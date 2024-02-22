<?php

use App\Models\User;

if (!function_exists('getInfoUserAdmin')) {
    function getInfoUserAdmin()
    {
        $userAdmin = auth()->guard('user_admins')->user();

        if ($userAdmin) {
            $user = User::with('employee')->find($userAdmin->id);
            return $user;
        }

        return null;
    }
}
