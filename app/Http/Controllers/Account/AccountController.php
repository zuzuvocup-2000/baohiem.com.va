<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.account.index');
    }
    public function edit()
    {
        return view('pages.account.edit');
    }
    public function insurance()
    {
        return view('pages.account.insurance');
    }
    public function expenses()
    {
        return view('pages.account.expenses');
    }
}
