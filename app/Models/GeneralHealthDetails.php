<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralHealthDetails extends Model
{
    protected $table = 'tbl_general_health_details';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'user_id',
        'general_health_type_id',
        'general_health_detail_id',
        'active',
        'result',
    ];

}
