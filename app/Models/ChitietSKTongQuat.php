<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietSKTongQuat extends Model
{
    protected $table = 'TBL_CHITIETSKTONGQUAT';
    public $timestamps = false;

    protected $fillable = [
        'MATAIKHOANSUCKHOE',
        'MAUSER',
        'MAPHANLOAISKTONGQUAT',
        'MACHITIETSKTONGQUAT',
        'ACTIVE',
        'KETQUA',
    ];

    // If you have relationships, define them here
    public function user()
    {
        return $this->belongsTo(User::class, 'MAUSER', 'MAUSER');
    }

    public function phanLoaiSKTongQuat()
    {
        return $this->belongsTo(PhanLoaiSKTongQuat::class, 'MAPHANLOAISKTONGQUAT', 'MAPHANLOAISKTONGQUAT');
    }
}
