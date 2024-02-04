<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoikhamNoidungkham extends Model
{
    protected $table = 'tbl_$goikham_noidungkham';
    protected $primaryKey = 'manoidungkham';
    public $timestamps = false;

    protected $fillable = [
        'codenoidung',
        'active',
        'Ghichu',
        'noidung',
    ];
}
