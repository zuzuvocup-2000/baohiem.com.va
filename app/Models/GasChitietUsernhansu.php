<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasChitietUsernhansu extends Model
{
    protected $table = 'TBL_2GasChitietUsernhansu';
    protected $primaryKey = 'ChitietUserNhansuID';
    public $timestamps = false;

    protected $fillable = [
        'mauser_nhansu',
        'ChinhanhGASID',
        'Active',
    ];
}
