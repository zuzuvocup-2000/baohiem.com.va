<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccinationResult extends Model
{
    protected $table = 'tbl_vaccination_result';
    public $timestamps = false;

    protected $fillable = [
        'vaccination_schedule_id',
        'customer_id',
        'note',
        'active',
        'injection_date',
        'result_confirm',
    ];

}
