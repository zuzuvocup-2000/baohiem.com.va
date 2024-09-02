<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhsachBacsi extends Model
{
    protected $table = 'TBL_DANHSACHBACSI';
    public $timestamps = false;

    protected $fillable = [
        'MABENHVIEN',
        'TENBACSI',
        'DIACHI',
        'EMAIL',
        'PHONE',
        'HOCVI',
        'HOCHAM',
        'ACTIVE',
    ];


    public function benhvien()
    {
        return $this->belongsTo('App\Benhvien', 'MABENHVIEN');
    }
}
