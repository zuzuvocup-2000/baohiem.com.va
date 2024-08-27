<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietChungNgua extends Model
{
    protected $table = 'TBL_CHITIETCHUNGNGUA';
    protected $primaryKey = 'MACHITIETCHUNGNUA';
    public $timestamps = false;

    protected $fillable = [
        'MATAIKHOANSUCKHOE',
        'MACHITIETLICH',
        'MAUSER',
        'NGAYCHUNG',
        'ACTIVE',
        'GHICHU',
        'DUNGLICH',
    ];

}
