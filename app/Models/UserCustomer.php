<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserCustomer extends Authenticatable
{
    protected $table = 'tbl_user_customer';
    protected $guard = 'isUserCustomer';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'active',
        'username',
        'password',
        'log_date',
        'customer_id',
        'gas_branch_id',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
