<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'tbl_department';
    public $timestamps = false;

    protected $fillable = [
        'department_name',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
