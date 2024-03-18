<?php

namespace App\Services;

use App\Models\PeriodDetail;

/**
 * Class PeriodDetailService
 * @package App\Services
 */
class PeriodDetailService
{
    public function getPeriodDetail($companyId, $periodId){
        return PeriodDetail::where(['company_id' => $companyId, 'period_id' => $periodId, 'active' => STATUS_ACTIVE])->first();
    }

    public function checkAndInsertPeriodDetail($companyId, $periodId)
    {
        $periodDetail = PeriodDetail::where(['company_id' => $companyId, 'period_id' => $periodId, 'active' => STATUS_ACTIVE])->first();

        if (!$periodDetail) {
            $periodDetail = PeriodDetail::create([
                'company_id' => (int) $companyId,
                'period_id' => (int) $periodId,
                'datelog' => now(),
                'active' => STATUS_ACTIVE,
            ]);
        }
        return $periodDetail;
    }
}
