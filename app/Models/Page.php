<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'TBL_page';
    public $timestamps = false;

    protected $fillable = [
        'tentrang',
        'active',
    ];
}
