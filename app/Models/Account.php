<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'tbl_account';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'account_package_id',
        'contract_id',
        'note',
        'active',
        'staff_code',
        'start_date',
        'end_date',
        'log_date',
        'reserve_amount',
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'log_date',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
