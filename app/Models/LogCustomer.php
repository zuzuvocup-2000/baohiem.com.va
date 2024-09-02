<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogCustomer extends Model
{
    protected $table = 'tbl_log_customer';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'log_date',
        'local_ip',
        'computer_name',
        'active',
        'action',
    ];

    protected $dates = [
        'log_date',
    ];

}
