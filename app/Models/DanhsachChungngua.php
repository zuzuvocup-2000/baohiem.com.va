<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhsachChungngua extends Model
{
    protected $table = 'tbl_vaccination_list';
    public $timestamps = false;

    protected $fillable = [
        'list_of_test_id',
        'vaccination',
        'active',
        'note',
        'amount_vaccination',
    ];


}
