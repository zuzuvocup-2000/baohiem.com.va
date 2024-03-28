<?php

namespace App\Services;

use App\Models\Period;
use App\Models\PeriodDetail;
use Illuminate\Support\Facades\DB;

/**
 * Class PeriodService
 * @package App\Services
 */
class PeriodService
{
    public function findOne($periodId = 0)
    {
        return Period::where(['id' => $periodId])->first();
    }

    public function getPeriodList()
    {
        return Period::select('*')
            ->where(['active' => STATUS_ACTIVE])
            ->orderBy('order', 'asc')
            ->get();
    }

    public function getPeriodActiveByCompany($company = 0)
    {
        return PeriodDetail::select(['tbl_period.id', 'tbl_period.period_name', 'tbl_period.from_year'])
            ->where([
                'tbl_period_detail.active' => STATUS_ACTIVE,
                'tbl_period.active' => STATUS_ACTIVE,
                'tbl_period_detail.company_id' => $company,
            ])
            ->join('tbl_period', 'tbl_period.id', '=', 'tbl_period_detail.period_id')
            ->orderBy('tbl_period.order', 'asc')
            ->orderBy('tbl_period.id')
            ->get();
    }
}
