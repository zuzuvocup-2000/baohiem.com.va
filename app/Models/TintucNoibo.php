<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TintucNoibo extends Model
{
    protected $table = 'TBL_TINTUCNOIBO';
    public $timestamps = false;

    protected $fillable = [
        'tieude',
        'thongtinngan',
        'thongtindaydu',
        'nguon',
        'ngaydang',
        'status_kichhoat',
        'active',
        'Mauser',
    ];

    protected $casts = [
        'status_kichhoat' => 'boolean',
        'active' => 'boolean',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'Mauser', 'MAUSER');
    }
}
