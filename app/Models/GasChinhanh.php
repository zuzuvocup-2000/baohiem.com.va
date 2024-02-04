<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasChinhanh extends Model
{
    protected $table = 'Tbl_GASChinhanh';
    public $timestamps = false;

    protected $fillable = [
        'tenchinhanh',
        'Active',
        'MACONGTY',
    ];


    public function congty()
    {
        return $this->belongsTo('App\Congty', 'MACONGTY');
    }
}
