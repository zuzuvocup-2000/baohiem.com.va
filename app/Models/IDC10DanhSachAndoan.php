<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IDC10DanhSachAndoan extends Model
{
    protected $table = 'tbl_IDC10DANHSACHANDOAN';
    public $timestamps = false;

    protected $fillable = [
        'TENICD10',
        'CODEICD10',
        'ACTIVE',
        'TenTA',
        'machuong',
    ];

    public function chuong()
    {
        return $this->belongsTo(IDC10ChuanDoanChuong::class, 'machuong', 'Machuongchandoan');
    }
}
