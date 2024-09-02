<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TienCanChungNgua extends Model
{
    protected $table = 'TBL_TIENCANCHUNGNGUA';
    public $timestamps = false;

    protected $fillable = [
        'MATAIKHOANSUCKHOE',
        'MACHUNGNGUA',
        'SOLAN',
        'ACTIVE',
    ];

    protected $casts = [
        'ACTIVE' => 'boolean',
    ];

    public function danhSachChungNgua()
    {
        return $this->belongsTo(DanhSachChungNgua::class, 'MACHUNGNGUA', 'MACHUNGNGUA');
    }

    public function thongTinTaiKhoanSucKhoe()
    {
        return $this->belongsTo(ThongTinTaiKhoanSucKhoe::class, 'MATAIKHOANSUCKHOE', 'MATAIKHOANSUCKHOE');
    }
}
