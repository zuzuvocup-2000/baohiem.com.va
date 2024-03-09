<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('admin.account.index');
    }
    public function edit()
    {
        return view('admin.account.edit');
    }
    public function insurance()
    {
        return view('admin.account.insurance');
    }
    public function expenses()
    {
        return view('admin.account.expenses');
    }
}
