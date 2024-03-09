<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserHospital extends Authenticatable
{
    protected $table = 'tbl_user_hospital';
    protected $guard = 'hospital';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'hospital_id',
        'employee_name',
        'username',
        'password',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];


    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }
}
