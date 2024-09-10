<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginCustomer extends Model
{
    protected $table = 'tbl_login_customer';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'active',
        'date_log',
        'customer_id',
        'local_ip',
        'computer_name',
    ];

}
