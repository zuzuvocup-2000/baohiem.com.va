<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogUser extends Model
{
    protected $table = 'TBL_LOGUSER';
    public $timestamps = false;

    protected $fillable = [
        'Mauser',
        'hanhdong',
        'datelog',
        'active',
        'localIP',
        'Computername',
        'giatricu',
        'machitietchitramoi',
    ];

    protected $dates = [
        'datelog',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Mauser', 'MAUSER');
    }

    public function chiTietChiTraMoi()
    {
        return $this->belongsTo(ChiTietChiTra::class, 'machitietchitramoi', 'MACHITIETCHITRA');
    }
}
