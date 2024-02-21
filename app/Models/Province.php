<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'tbl_province';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'province_name',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
