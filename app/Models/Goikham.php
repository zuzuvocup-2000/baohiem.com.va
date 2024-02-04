<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goikham extends Model
{
    protected $table = 'tbl_$goikham';
    protected $primaryKey = 'magoikham';
    public $timestamps = false;

    protected $fillable = [
        'tengoikham',
        'active',
        'Ghichu',
    ];

    public function chitietnoidungkham()
    {
        return $this->hasMany(GoikhamChitietnoidungkham::class, 'manoidungkham', 'magoikham');
    }
}
