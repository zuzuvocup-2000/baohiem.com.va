<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IDC10BenhManTinh extends Model
{
    protected $table = 'tbl_IDC10benhmantinh';
    public $timestamps = false;

    protected $fillable = [
        'active',
        'MAICD10',
    ];
}
