<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'tbl_user';
    protected $guard = 'web';
    public $timestamps = false;
    protected $hidden = ['password', 'Tenquyen', 'QUYENYTRUYCAP'];

    protected $fillable = [
        'employee_id',
        'username',
        'password',
        'QUYENYTRUYCAP',
        'active',
        'Tenquyen',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
