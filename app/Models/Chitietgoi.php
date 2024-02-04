<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chitietgoi extends Model
{
    protected $table = 'TBL_CHITIET_GOI';
    protected $primaryKey = 'machitietgoi';
    public $timestamps = false;

    protected $fillable = [
        'magoiaccount',
        'active',
        'macongty',
        'manienhan',
    ];

    // If you have relationships, define them here
    public function congty()
    {
        return $this->belongsTo(Congty::class, 'macongty', 'MACONGTY');
    }

    public function goitaikhoan()
    {
        return $this->belongsTo(GoitaiKhoan::class, 'magoiaccount', 'MAGOIACCOUNT');
    }

    public function nienhan()
    {
        return $this->belongsTo(Nienhan::class, 'manienhan', 'manienhan');
    }
}
