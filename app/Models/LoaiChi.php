<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiChi extends Model
{
    protected $table = 'TBL_LOAICHI';
    public $timestamps = false;

    protected $fillable = [
        'TENLOAICHI',
        'ACTIVE',
    ];

    public function chiTietChis()
    {
        return $this->hasMany(ChiTietChi::class, 'MALOAICHI', 'MALOAICHI');
    }
}
