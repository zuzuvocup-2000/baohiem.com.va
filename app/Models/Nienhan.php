<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nienhan extends Model
{
    protected $table = 'tbl_nienhan';
    public $timestamps = false;

    protected $fillable = [
        'tennienhan',
        'logdate',
        'tunam',
        'dennam',
        'active',
        'Thutu',
    ];
}
