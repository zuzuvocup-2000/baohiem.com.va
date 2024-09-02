<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalBiography extends Model
{
    protected $table = 'tbl_personal_biography';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'disease',
        'detection_year',
        'occupational_disease',
        'year_of_disease',
        'active',
        'health_checkup_information_id',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

}
