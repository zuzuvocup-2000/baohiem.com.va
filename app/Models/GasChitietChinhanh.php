<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasChitietChinhanh extends Model
{
    protected $table = 'tbl_GasChitietChinhanh';
    public $timestamps = false;

    protected $fillable = [
        'MAKHACHHANG',
        'ChinhanhGASID',
        'Active',
    ];


    public function gasChinhanh()
    {
        return $this->belongsTo('App\GasChinhanh', 'ChinhanhGASID');
    }

    public function khachhang()
    {
        return $this->belongsTo('App\Khachhang', 'MAKHACHHANG');
    }
}
