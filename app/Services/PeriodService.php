<?php

namespace App\Services;

use App\Models\Period;
use Illuminate\Support\Facades\DB;

/**
 * Class PeriodService
 * @package App\Services
 */
class PeriodService
{
    public function getPeriodList()
    {
        return Period::select('*')
            ->where(['active' => STATUS_ACTIVE])
            ->orderBy('order', 'asc')
            ->get();
    }

    public function getPeriodActiveByCompany($company = 0)
    {
        return DB::table('tbl_period')->select('tbl_period.from_year', 'tbl_period.to_year', 'tbl_period.period_name', 'tbl_period_detail.id as id_new')
            ->where(['tbl_period.active' => STATUS_ACTIVE])
            ->join('tbl_period_detail', function ($join) use ($company) {
                $join->on('tbl_period_detail.period_id', '=', 'tbl_period.id')
                    ->where('tbl_period_detail.active', STATUS_ACTIVE);

                if (!empty($company)) $join->where('tbl_period_detail.company_id', $company);
            })
            ->orderBy('tbl_period.order', 'asc')
            ->orderBy('tbl_period.id')
            ->get();
    }
}
