<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idc10ChronicDisease extends Model
{
    protected $table = 'tbl_idc10_chronic_disease';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'active',
        'icd10_code',
    ];
}
