<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalType extends Model
{
    protected $table = 'tbl_hospital_type';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'hospital_type_name',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
