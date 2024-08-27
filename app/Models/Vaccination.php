<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    protected $table = 'tbl_vaccination';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'vaccination',
        'vaccine_name',
        'active',
        'dosage',
        'indication',
        'for_children',
        'classification_id',
    ];

}
