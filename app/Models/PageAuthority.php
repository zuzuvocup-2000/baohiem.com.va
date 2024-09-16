<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageAuthority extends Model
{
    protected $table = 'tbl_page_authority';
    public $timestamps = false;

    protected $fillable = [
        'access',
        'active',
        'customer',
        'hospital',
        'staff',
        'hospital_kb',
        'customer_kb',
        'pviadmin',
    ];

    protected $casts = [
        'customer' => 'boolean',
        'hospital' => 'boolean',
        'staff' => 'boolean',
        'hospital_kb' => 'boolean',
        'customer_kb' => 'boolean',
        'pviadmin' => 'boolean',
    ];
}
