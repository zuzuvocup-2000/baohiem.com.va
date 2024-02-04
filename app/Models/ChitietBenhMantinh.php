<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietBenhMantinh extends Model
{
    protected $table = 'TBL_CHITIETBENHMANTINH';
    protected $primaryKey = 'machitietbenhmantinh';
    public $timestamps = false;

    protected $fillable = [
        'mabenhmantinh',
        'benhchinh',
        'benhphu',
        'mataikhoansuckhoe',
        'active',
        'tenbacsi',
        'tenbenhvien',
        'logdate',
    ];

    // If you have relationships, define them here
    public function idc10benhmantinh()
    {
        return $this->belongsTo(IDC10BenhMantinh::class, 'mabenhmantinh', 'mabenhmantinh');
    }

    public function thongtintaikhoansuckhoe()
    {
        return $this->belongsTo(ThongTinTaiKhoanSucKhoe::class, 'mataikhoansuckhoe', 'MATAIKHOANSUCKHOE');
    }
}
