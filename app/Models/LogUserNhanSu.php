<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogUserNhanSu extends Model
{
    protected $table = 'tbl_log_usernhansu';
    public $timestamps = false;

    protected $fillable = [
        'mauser_nhansu',
        'hanhdong',
        'localIP',
        'Computername',
        'active',
    ];

    protected $dates = [
        'logdate',
    ];

    public function userNhanSu()
    {
        return $this->belongsTo(UserNhanSu::class, 'mauser_nhansu', 'mauser_nhansu');
    }
}
