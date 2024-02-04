<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasDanhsachhopdong extends Model
{
    protected $table = 'tbl_GasDanhsachhopdong';
    public $timestamps = false;

    protected $fillable = [
        'Mahopdong',
        'Gas',
        'CL',
        'Active',
    ];


    public function hopdongcty()
    {
        return $this->belongsTo('App\Hopdongcty', 'Mahopdong');
    }
}
