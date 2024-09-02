<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietChungNgua extends Model
{
    protected $table = 'TBL_CHITIETCHUNGNGUA';
    protected $primaryKey = 'MACHITIETCHUNGNUA';
    public $timestamps = false;

    protected $fillable = [
        'MATAIKHOANSUCKHOE',
        'MACHITIETLICH',
        'MAUSER',
        'NGAYCHUNG',
        'ACTIVE',
        'GHICHU',
        'DUNGLICH',
    ];

    // If you have relationships, define them here
    public function user()
    {
        return $this->belongsTo(User::class, 'MAUSER', 'MAUSER');
    }

    public function thongTinTaiKhoanSucKhoe()
    {
        return $this->belongsTo(ThongTinTaiKhoanSucKhoe::class, 'MATAIKHOANSUCKHOE', 'MATAIKHOANSUCKHOE');
    }

    public function chitietLich()
    {
        return $this->belongsTo(ChitietLich::class, 'MACHITIETLICH', 'MACHITIETLICH');
    }

    public function chitietChungNgua()
    {
        return $this->belongsTo(ChitietChungNgua::class, 'MACHITIETCHUNGNUA', 'MACHITIETCHUNGNUA');
    }
}
