<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerNew extends Model
{
    protected $table = 'tbl_customer_news';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'title',
        'description',
        'content',
        'source',
        'date',
        'status',
        'active',
        'user_id',
        'log_date',
    ];

    protected $casts = [
        'status' => 'boolean',
        'active' => 'boolean',
    ];

}
