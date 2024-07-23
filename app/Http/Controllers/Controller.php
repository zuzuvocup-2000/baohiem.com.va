<?php

namespace App\Http\Controllers;

use App\Models\LogUser;
use App\Models\LogUserBenhVien;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    }

    public function saveLog($userId, $action = '', $old_value = 0, $payment_detail_id = 0)
    {
        if (Auth::guard('isUserAdmin')->check()) {
            $insert = [
                'action' => $action,
                'old_value' => $old_value,
                'user_id' => $userId,
                'active' => STATUS_ACTIVE,
                'date_log' => now(),
                'local_ip' => Request::ip(),
                'computer_name' => gethostname(),
            ];

            if (!empty($payment_detail_id)) {
                $insert['payment_detail_id'] = $payment_detail_id;
            }
            return LogUser::create($insert);
        }
    }
    public function saveLogHospital($MAUSER_BENHVIEN, $hanhdong = '')
    {
        if (Auth::guard('isUserHospital')->check()) {
            $insert = [
                'hanhdong' => $hanhdong,
                'MAUSER_BENHVIEN' => $MAUSER_BENHVIEN,
                'active' => STATUS_ACTIVE,
                'logdate' => now(),
                'localIP' => Request::ip(),
                'Computername' => gethostname(),
            ];
            return LogUserBenhVien::create($insert);
        }
    }
}
