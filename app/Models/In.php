<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class In extends Model
{
    protected $table = 'TBL_IN';
    public $timestamps = false;

    protected $fillable = [
        'main',
    ];
}
