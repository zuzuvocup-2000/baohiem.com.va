<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'TBL_USER';
    public $timestamps = false;

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
