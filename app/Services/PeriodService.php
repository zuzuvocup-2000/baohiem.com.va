<?php

namespace App\Services;

use App\Models\Period;

/**
 * Class PeriodService
 * @package App\Services
 */
class PeriodService
{
    public function getPeriodActiveByCompany($company = 0)
    {
        return Period::select('tbl_period.from_year','tbl_period.to_year','tbl_period.period_name', 'tbl_period_detail.id')
            ->where(['tbl_period.active' => STATUS_ACTIVE])
            ->join('tbl_period_detail', function ($join) use ($company) {
                $join
                    ->on('tbl_period_detail.period_id', '=', 'tbl_period.id')
                    ->where('tbl_period_detail.company_id', $company)
                    ->where('tbl_period_detail.active', STATUS_ACTIVE);
            })
            ->orderBy('tbl_period.order', 'asc')
            ->get();
    }
}
