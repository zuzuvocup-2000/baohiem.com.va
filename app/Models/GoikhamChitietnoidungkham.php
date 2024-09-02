<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoikhamChitietnoidungkham extends Model
{
    protected $table = 'tbl_#goikham_chitietnoidungkham';
    protected $primaryKey = 'machitietnoidungkham';
    public $timestamps = false;

    protected $fillable = [
        'manoidungkham',
        'active',
        'madanhmuckhamchuyenkhoa',
        'madanhmucchidinhxetnghiem',
        'madanhmucchidinhcdha',
        'madieukienthuchien',
    ];

    // If you have relationships, define them here
    public function danhMucChidinhXetNghiem()
    {
        return $this->belongsTo(TBL_DANHMUCCHIDINHXETNGHIEM::class, 'madanhmucchidinhxetnghiem', 'MADANHMUCHIDINHXETNGHIEM');
    }

    public function danhMucCdha()
    {
        return $this->belongsTo(TBL_DANHMUCCDHA::class, 'madanhmucchidinhcdha', 'MADANHMUCCDHA');
    }

    public function danhMucChuyenKhoa()
    {
        return $this->belongsTo(TBL_DANHMUCCHUYENKHOA::class, 'madanhmuckhamchuyenkhoa', 'MADANHMUCCHUYENKHOA');
    }

    public function dieukienthuchien()
    {
        return $this->belongsTo(GoikhamDieukienthuchien::class, 'madieukienthuchien', 'madieukienthuchien');
    }

    public function noidungkham()
    {
        return $this->belongsTo(GoikhamNoidungkham::class, 'manoidungkham', 'manoidungkham');
    }
}
