<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageDetail extends Model
{
    protected $table = 'tbl_page_detail';
    public $timestamps = false;

    protected $fillable = [
        'page_authority_id',
        'page_id',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

}
