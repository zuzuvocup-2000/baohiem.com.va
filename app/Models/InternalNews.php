<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternalNews extends Model
{
    protected $table = 'tbl_internal_news';
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
    ];

    protected $casts = [
        'status' => 'boolean',
        'active' => 'boolean',
    ];

}
