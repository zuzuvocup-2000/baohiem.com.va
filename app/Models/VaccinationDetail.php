<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccinationDetail extends Model
{
    protected $table = 'tbl_vaccination_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'health_account_id',
        'vaccination_schedule_detail_id',
        'user_id',
        'vaccination_date',
        'active',
        'note',
        'calendar_true',
    ];

}
