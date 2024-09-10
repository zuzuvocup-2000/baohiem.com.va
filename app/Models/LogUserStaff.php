<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogUserStaff extends Model
{
    protected $table = 'tbl_log_user_staff';
    public $timestamps = false;

    protected $fillable = [
        'user_staff_id',
        'action',
        'local_ip',
        'computer_name',
        'active',
        'log_date',
    ];

    protected $dates = [
        'logdate',
    ];

}
