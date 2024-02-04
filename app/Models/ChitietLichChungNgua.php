<?php

// app/ChitietLichChungNgua.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietLichChungNgua extends Model
{
    protected $table = 'TBL_CHITIETLICHCHUNGNGUA';
    protected $primaryKey = 'MACHITIETLICH';
    public $timestamps = false;

    protected $fillable = [
        'MACHUNGNGUA',
        'SOTHANGCACHLANTRUOC',
        'ACTIVE',
    ];

    // If you have relationships, define them here
    public function danhSachChungNgua()
    {
        return $this->belongsTo(DanhSachChungNgua::class, 'MACHUNGNGUA', 'MACHUNGNGUA');
    }
}
