<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
    protected $table = 'tbl_user';
    protected $guard = 'isUserAdmin';
    public $timestamps = false;
    protected $hidden = ['password', 'role_name', 'role_id'];

    protected $fillable = [
        'employee_id',
        'username',
        'password',
        'role_id',
        'active',
        'role_name',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
