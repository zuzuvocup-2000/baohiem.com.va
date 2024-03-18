<?php

namespace App\Http\Controllers\Diary;

use App\Http\Controllers\Controller;
use App\Models\LogUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        $activities = DB::table('tbl_user')
        ->select('tbl_log_user.action', 'tbl_log_user.date_log', 'tbl_user.QUYENYTRUYCAP', 'tbl_user.username', 'tbl_employee.employee_name', 'tbl_user.employee_id', 'tbl_log_user.id')
        ->join('tbl_employee', 'tbl_user.employee_id', '=', 'tbl_employee.id')
        ->join('tbl_log_user', 'tbl_user.id', '=', 'tbl_log_user.user_id')
        ->where('tbl_user.ACTIVE', '=', STATUS_ACTIVE)
        ->orderBy('tbl_log_user.date_log', 'desc')
        ->paginate(20);
        return view('admin.diary.index', compact(['activities']));
    }
}
