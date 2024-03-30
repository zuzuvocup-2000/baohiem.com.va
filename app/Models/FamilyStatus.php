<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyStatus extends Model
{
    protected $table = 'tbl_family_status';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'single',
        'married',
        'divorced',
        'active',
    ];

    protected $casts = [
        'single' => 'boolean',
        'married' => 'boolean',
        'divorced' => 'boolean',
        'active' => 'boolean',
    ];
}
