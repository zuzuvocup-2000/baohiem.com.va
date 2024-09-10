<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CDHACategory extends Model
{
    protected $table = 'tbl_cdha_category';
    public $timestamps = false;

    protected $fillable = [
        'cdha_name',
        'active',
        'classify_cdha_id',
        'clinic_id',
    ];

}
