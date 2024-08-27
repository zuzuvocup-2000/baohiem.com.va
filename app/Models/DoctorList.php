<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorList extends Model
{
    protected $table = 'tbl_doctor_list';
    public $timestamps = false;

    protected $fillable = [
        'hospital_id',
        'doctor_name',
        'address',
        'email',
        'phone_number',
        'degree',
        'academic_rank',
        'active',
    ];

}
