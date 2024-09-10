<?php

namespace App\Services;

use App\Models\User;
use App\Models\Customer;
use App\Models\LogUserHospital;
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
    public function getHospitalDiary()
    {
        return LogUserHospital::select(
                'tbl_loguser_hospital.id as id',
                'tbl_loguser_hospital.hospital_user_id as hospital_user_id',
                'log_date',
                'action',
                'local_ip',
                'computer_name',
                'employee_name',
                'username',
                'tbl_loguser_hospital.id as id'
            )
            ->join('tbl_user_hospital', 'tbl_loguser_hospital.hospital_user_id', '=', 'tbl_user_hospital.id')
            ->where('tbl_loguser_hospital.active', STATUS_ACTIVE)
            ->orderBy('log_date' , 'desc')
            ->paginate(20);
    }
    public function getCustomerDiary()
    {
        return Customer::select('tbl_user_customer.username', 'tbl_log_customer.id', 'tbl_log_customer.log_date', 'tbl_log_customer.action', 'tbl_customer.full_name')
        ->join('tbl_user_customer', 'tbl_customer.id', '=', 'tbl_user_customer.customer_id')
        ->join('tbl_log_customer', 'tbl_user_customer.id', '=', 'tbl_log_customer.customer_id')
        ->where('tbl_log_customer.active', STATUS_ACTIVE)
        ->where('tbl_user_customer.active', STATUS_ACTIVE)
        // ->where('tbl_customer.id', $id)
        ->orderBy('tbl_log_customer.log_date', 'desc')
        ->paginate(20);
        
    }
}
