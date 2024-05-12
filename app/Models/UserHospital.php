<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class UserHospital extends Authenticatable
{
    use HasRoles;
    protected $table = 'tbl_user_hospital';
    protected $guard = 'isUserHospital';
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
