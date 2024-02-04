<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoikhamDieukienthuchien extends Model
{
    protected $table = 'tbl_$goikham_dieukienthuchien';
    protected $primaryKey = 'madieukienthuchien';
    public $timestamps = false;

    protected $fillable = [
        'tendieukien',
        'active',
    ];
}
