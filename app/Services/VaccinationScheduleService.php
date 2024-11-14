<?php

namespace App\Services;

use App\Models\VaccinationSchedule;
use App\Models\VaccinationResult;

/**
 * Class VaccinationService
 * @package App\Services
 */
class VaccinationScheduleService
{
    public function getVaccinationScheduleByVaccinationId($vaccinationID)
    {
        return VaccinationSchedule::where('active', STATUS_ACTIVE)
            ->where('vaccination_id', $vaccinationID)
            ->get();
    }
    public function getVaccinationScheduleByVaccinationIdAndCustomerId($vaccinationId, $customerId)
    {
        return  VaccinationResult::select([
            'tbl_vaccination_schedule.injection_name',
            'tbl_vaccination_result.vaccination_schedule_id',
            'tbl_vaccination_schedule.months_to_first',
            'tbl_vaccination_schedule.months_to_repeat',
            VaccinationResult::raw("CONVERT(nvarchar, injection_date, 103) as injection_date"),
            'tbl_vaccination_result.note',
            'tbl_vaccination_result.id'
        ])
            ->join('tbl_vaccination_schedule', 'tbl_vaccination_result.vaccination_schedule_id', '=', 'tbl_vaccination_schedule.id')
            ->join('tbl_vaccination', 'tbl_vaccination_schedule.vaccination_id', '=', 'tbl_vaccination.id')
            ->join('tbl_customer', 'tbl_vaccination_result.customer_id', '=', 'tbl_customer.id')

            ->where('tbl_vaccination_result.result_confirm', 1)
            ->where('tbl_customer.active', 1)
            ->where('tbl_vaccination_result.active', 1)
            ->where('tbl_vaccination_schedule.active', 1)
            ->where('tbl_vaccination.active', 1)
            ->where('tbl_vaccination.id', $vaccinationId)
            ->where('tbl_customer.id', $customerId)
            ->get();
    }
}
