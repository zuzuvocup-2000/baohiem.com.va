<?php

// app/ChitietNienhan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitietNienhan extends Model
{
    protected $table = 'TBL_CHITIETNIENHAN';
    protected $primaryKey = 'machitietnienhan';
    public $timestamps = false;

    protected $fillable = [
        'manienhan',
        'macongty',
        'active',
        'datelog',
    ];

    // If you have relationships, define them here
    public function congty()
    {
        return $this->belongsTo(Congty::class, 'macongty', 'MACONGTY');
    }

    public function nienhan()
    {
        return $this->belongsTo(Nienhan::class, 'manienhan', 'manienhan');
    }
}
