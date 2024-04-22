<?php

namespace App\Services;

use App\Models\User;
use App\Models\Hospital;
use App\Models\Customer;
use App\Models\UserBenhVien;
use App\Models\LogUserBenhVien;
/**
 * Class DiaryService
 * @package App\Services
 */
class DiaryService
{
    
    public function getEmployeeDiary()
    {
        return User::select('tbl_log_user.action', 'tbl_log_user.date_log', 'tbl_user.role_id', 'tbl_user.username', 'tbl_employee.employee_name', 'tbl_user.employee_id', 'tbl_log_user.id')
        ->join('tbl_employee', 'tbl_user.employee_id', '=', 'tbl_employee.id')
        ->join('tbl_log_user', 'tbl_user.id', '=', 'tbl_log_user.user_id')
        ->where('tbl_user.active', '=', STATUS_ACTIVE)
        ->orderBy('tbl_log_user.date_log', 'desc')
        ->paginate(20);
    }
    public function getHospitalDiary($MAUSER_BENHVIEN = 0){
        return LogUserBenhVien::select('MALOGUSER_BENHVIEN', 'tbl_loguser_benhvien.MAUSER_BENHVIEN', 'logdate', 'hanhdong', 'localIP', 'Computername', 'tennhanvien', 'tbl_loguser_benhvien.maloguser_benhvien')
        ->join('tbl_user_hospital', 'tbl_loguser_benhvien.MAUSER_BENHVIEN', '=', 'tbl_user_hospital.id')
        ->where('tbl_loguser_benhvien.active', STATUS_ACTIVE)
        ->where('tbl_loguser_benhvien.MAUSER_BENHVIEN', $MAUSER_BENHVIEN)
        ->orderBy('logdate')
        ->paginate(20);
    }
    public function getCustomerDiary()
    {
        return Customer::select('tbl_user_customer.username', 'TBL_LOGKHACHHANG.malogkhachhang', 'TBL_LOGKHACHHANG.logdate', 'TBL_LOGKHACHHANG.hanhdong', 'tbl_customer.full_name')
        ->join('tbl_user_customer', 'tbl_customer.id', '=', 'tbl_user_customer.customer_id')
        ->join('TBL_LOGKHACHHANG', 'tbl_user_customer.id', '=', 'TBL_LOGKHACHHANG.Mauserkhachhang')
        ->where('TBL_LOGKHACHHANG.active', STATUS_ACTIVE)
        ->where('tbl_user_customer.active', STATUS_ACTIVE)
        // ->where('tbl_customer.id', $id)
        ->orderBy('TBL_LOGKHACHHANG.logdate', 'desc')
        ->paginate(20);
        
    }
}
