<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthCheckupInformation extends Model
{
    protected $table = 'tbl_health_checkup_information';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'health_account_id',
        'hospital_id',
        'hospital_checkup',
        'checkup_date',
        'active',
        'doctor_conclusion',
        'height',
        'chest_circumference',
        'pulse',
        'temperature',
        'weight',
        'bmi',
        'blood_pressure',
        'respiration_rate',
        'disease_code',
        'disease_name',
        'health_type',
        'occupation',
        'solution_direction',
        'log_date',
    ];

    protected $dates = [
        'checkup_date',
        'log_date',
    ];

    protected $casts = [
        'active' => 'boolean',
        'disease_code' => 'boolean',
    ];
}
