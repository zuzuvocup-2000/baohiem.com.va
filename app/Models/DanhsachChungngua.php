<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhsachChungngua extends Model
{
    protected $table = 'tbl_vaccination_list';
    public $timestamps = false;

    protected $fillable = [
        'vaccination_classification_id',
        'vaccination_name',
        'active',
        'note',
        'amount_vaccination',
    ];


}
