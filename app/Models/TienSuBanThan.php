<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TienSuBanThan extends Model
{
    protected $table = 'TBL_TIENSUBANTHAN';
    public $timestamps = false;

    protected $fillable = [
        'TIENCANBANTHAN',
        'MATAIKHOANSUCKHOE',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];

    public function thongTinTaiKhoanSucKhoe()
    {
        return $this->belongsTo(ThongTinTaiKhoanSucKhoe::class, 'MATAIKHOANSUCKHOE', 'MATAIKHOANSUCKHOE');
    }
}
