<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoikhamChitietloaitru extends Model
{
    protected $table = 'tbl_$goikham_chitietloaitru';
    protected $primaryKey = 'machitietloaitru';
    public $timestamps = false;

    protected $fillable = [
        'machitietgoikham',
        'machitietnoidungkham',
        'active',
    ];

    // If you have relationships, define them here
    public function chitietnoidungkham()
    {
        return $this->belongsTo(GoikhamChitietnoidungkham::class, 'machitietnoidungkham', 'machitietnoidungkham');
    }
}
