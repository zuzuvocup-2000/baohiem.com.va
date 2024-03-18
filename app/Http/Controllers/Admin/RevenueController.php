<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class RevenueController extends Controller
{
    public function index()
    {
        return view('admin.revenue.index');
    }
}
