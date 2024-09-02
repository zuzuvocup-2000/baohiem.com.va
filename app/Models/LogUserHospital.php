<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogUserHospital extends Model
{
    protected $table = 'tbl_loguser_hospital';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'hospital_user_id',
        'log_date',
        'action',
        'local_ip',
        'computer_name',
        'active',
        'old_value',
        'payment_detail_id',
    ];

    protected $dates = [
        'logdate',
    ];

}
