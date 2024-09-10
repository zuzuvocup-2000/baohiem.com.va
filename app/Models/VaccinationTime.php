<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccinationTime extends Model
{
    protected $table = 'tbl_vaccination_time';
    public $timestamps = false;

    protected $fillable = [
        'vaccination_time',
        'note',
        'active',
        'order',
    ];
}
