<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        return view('pages.hospital.index');
    }
}
