<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassifyGeneralHealth extends Model
{
    protected $table = 'tbl_classify_general_health';
    public $timestamps = false;

    protected $fillable = [
        'classify_name',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
