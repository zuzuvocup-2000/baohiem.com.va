<?php

namespace App\Http\Controllers\Diary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        return view('admin.diary.index');
    }
}
