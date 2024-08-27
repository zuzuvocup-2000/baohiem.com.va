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

   
}
