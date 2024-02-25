<?php

namespace App\Services;

use App\Models\User;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{
    public function getUserList()
    {
        return User::with(['employee'])->orderBy('username', 'asc')->paginate(PER_PAGE_SMALL);
    }
}
