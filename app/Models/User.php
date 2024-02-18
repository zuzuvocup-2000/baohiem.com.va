<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'TBL_USER';
    public $timestamps = false;

    protected $fillable = [
        'employee_code',
        'username',
        'password',
        'QUYENYTRUYCAP',
        'active',
        'Tenquyen',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function nhanvien()
    {
        return $this->belongsTo(Nhanvien::class, 'employee_code', 'employee_code');
    }
}
