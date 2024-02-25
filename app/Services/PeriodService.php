<?php

namespace App\Services;

use App\Models\Period;

/**
 * Class PeriodService
 * @package App\Services
 */
class PeriodService
{
    public function getPeriodActive()
    {
        return Period::where(['active' => STATUS_ACTIVE])->orderBy('order', 'asc')->get();
    }
}
