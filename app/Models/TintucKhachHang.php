<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TintucKhachHang extends Model
{
    protected $table = 'TBL_TINTUCKHACHHANG';
    public $timestamps = false;

    protected $fillable = [
        'tieude',
        'noidungngan',
        'noidungdaydu',
        'nguon',
        'ngaydang',
        'status_kichhoat',
        'active',
        'mauser',
        'Logdate',
    ];

    protected $casts = [
        'status_kichhoat' => 'boolean',
        'active' => 'boolean',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'mauser', 'MAUSER');
    }
}
