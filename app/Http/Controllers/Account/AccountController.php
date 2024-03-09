<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('admin.pages.account.index');
    }
    public function edit()
    {
        return view('admin.pages.account.edit');
    }
    public function insurance()
    {
        return view('admin.pages.account.insurance');
    }
}
