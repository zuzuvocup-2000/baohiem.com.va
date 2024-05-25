<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogUserBenhVien extends Model
{
    protected $table = 'tbl_loguser_benhvien';
    protected $primaryKey = 'MALOGUSER_BENHVIEN';
    public $timestamps = false;

    protected $fillable = [
        'MAUSER_BENHVIEN',
        'logdate',
        'hanhdong',
        'localIP',
        'Computername',
        'active',
        'giatricu',
        'machitietchitramoi',
    ];

    protected $dates = [
        'logdate',
    ];

    public function userBenhVien()
    {
        return $this->belongsTo(UserBenhVien::class, 'MAUSER_BENHVIEN', 'id');
    }
}
