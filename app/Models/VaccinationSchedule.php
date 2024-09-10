<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccinationSchedule extends Model
{
    protected $table = 'tbl_vaccination_schedule';
    public $timestamps = false;

    protected $fillable = [
        'vaccination_id',
        'months_to_first',
        'active',
        'repeat',
        'months_to_repeat',
        'injection_name',
    ];

}
