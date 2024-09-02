<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TienCanGiaDinh extends Model
{
    protected $table = 'TBL_TIENCANGIADINH';
    public $timestamps = false;

    protected $fillable = [
        'MAQUANHE',
        'TIENCANGIADINH',
        'MATAIKHOANSUCKHOE',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];

    public function quanHe()
    {
        return $this->belongsTo(QuanHe::class, 'MAQUANHE', 'MAQUANHE');
    }

    public function thongTinTaiKhoanSucKhoe()
    {
        return $this->belongsTo(ThongTinTaiKhoanSucKhoe::class, 'MATAIKHOANSUCKHOE', 'MATAIKHOANSUCKHOE');
    }
}
