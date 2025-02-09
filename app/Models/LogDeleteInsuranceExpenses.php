<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogDeleteInsuranceExpenses extends Model
{
    protected $table = 'tbl_logdelete_insurance_expenses';
    public $timestamps = false;

    protected $fillable = [
        'payment_detail_id',
        'hospital_user',
        'user_id',
        'hospital_user_id',
        'log_date',
        'active',
    ];

    protected $dates = [
        'log_date',
    ];
}
