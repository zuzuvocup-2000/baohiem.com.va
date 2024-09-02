<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralHealthCategory extends Model
{
    protected $table = 'tbl_general_health_category';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'general_health_id',
        'general_health_name',
        'active',
    ];

}
