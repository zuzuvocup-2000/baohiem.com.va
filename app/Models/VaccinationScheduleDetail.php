<?php

// app/ChitietLichChungNgua.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccinationScheduleDetail extends Model
{
    protected $table = 'tbl_vaccination_schedule_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'vaccination_id',
        'distance',
        'active',
    ];

}
