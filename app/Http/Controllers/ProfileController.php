<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profiles.info');
    }
    public function changepw()
    {
        return view('profiles.changepw');
    }
}
