<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    protected $table = 'tbl_customer_type';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'type_name',
        'active',
        'order',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
