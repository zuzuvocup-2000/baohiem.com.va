<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerGroup extends Model
{
    protected $table = 'tbl_customer_group';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'group_name',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
