<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitiettaikhoanChitiet extends Model
{
    protected $table = 'chitiettaikhoan_chitiet';
    protected $primaryKey = 'machitiettaikhoa_chitiet';
    public $timestamps = false;

    protected $fillable = [
        'machitietgoi',
        'mataikhoan',
        'dukytruoc',
        'logdate',
        'active',
    ];

    protected $casts = [
        'logdate' => 'datetime',
        'active' => 'boolean',
    ];

    public function chitietgoi()
    {
        return $this->belongsTo(TBL_CHITIET_GOI::class, 'machitietgoi', 'machitietgoi');
    }

    public function taiKhoan()
    {
        return $this->belongsTo(TBL_TAIKHOAN::class, 'mataikhoan', 'mataikhoan');
    }
}
