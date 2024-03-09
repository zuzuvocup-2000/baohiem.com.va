<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserStaff extends Authenticatable
{
    protected $table = 'tbl_user_staff';
    protected $guard = 'staff';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'customer_id',
        'active',
        'log_date',
        'full_admin',
        'gas_permission',
    ];

    protected $casts = [
        'active' => 'boolean',
        'full_admin' => 'boolean',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
