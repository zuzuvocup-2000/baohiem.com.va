<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    protected $table = 'tbl_customer_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'customer_cb_id',
        'log_date',
        'active',
    ];

}
