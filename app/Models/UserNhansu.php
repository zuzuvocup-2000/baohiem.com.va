<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserNhansu extends Model
{
    protected $table = 'tbl_usernhansu';
    public $timestamps = false;

    protected $fillable = [
        'tendangnhap',
        'matkhau',
        'makhachhang',
        'active',
        'logdate',
        'FullAdmin',
        'Gaspermission',
    ];

    protected $casts = [
        'active' => 'boolean',
        'FullAdmin' => 'boolean',
    ];

    public function khachhang()
    {
        return $this->belongsTo(Khachhang::class, 'makhachhang', 'MAKHACHHANG');
    }
}
