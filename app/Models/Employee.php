<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'tbl_employee';
    public $timestamps = false;

    protected $fillable = [
        'department_id',
        'employee_name',
        'address',
        'phone_number',
        'email',
        'active',
        'position_id',
    ];


    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function position()
    {
        return $this->belongsTo(ViTriChucVu::class, 'position_id');
    }
}
