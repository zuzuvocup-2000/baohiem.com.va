<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class HealthCheckupInformationService
 * @package App\Services
 */
class HealthCheckupInformationService
{
    public function getReportCheckup($params = [])
    {
        [$from, $to] = explode('-', $params['time_range']);

        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];
        $total_data = DB::table('tbl_health_checkup_information')
            ->join('tbl_health_account', 'tbl_health_checkup_information.health_account_id', '=', 'tbl_health_account.id')
            ->join('tbl_customer', 'tbl_health_account.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->where('tbl_health_checkup_information.active', STATUS_ACTIVE)
            ->where('tbl_health_account.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            // ->where('tbl_account.contract_id', $params['contract'])
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->whereBetween('tbl_health_checkup_information.checkup_date', [$time['from'], $time['to']])
            ->selectRaw(
                'COUNT(tbl_health_checkup_information.id) as total_checkup,
                SUM(CASE WHEN tbl_account_detail.account_holder = 1 THEN 1 ELSE 0 END) as total_employee_checkup,
                SUM(CASE WHEN tbl_account_detail.account_holder = 0 THEN 1 ELSE 0 END) as total_employee_relative_checkup,
                SUM(CASE WHEN tbl_health_checkup_information.disease_code = 1 THEN 1 ELSE 0 END) as total_disease,
                SUM(CASE WHEN tbl_account_detail.account_holder = 1 AND tbl_health_checkup_information.disease_code = 1 THEN 1 ELSE 0 END) as total_employee_disease,
                SUM(CASE WHEN tbl_account_detail.account_holder = 0 AND tbl_health_checkup_information.disease_code = 1 THEN 1 ELSE 0 END) as total_employee_relative_disease',
            )
            ->first();

        $total_number_of_chronic_diseases = DB::table('tbl_customer')
            ->join('tbl_health_account', 'tbl_customer.id', '=', 'tbl_health_account.customer_id')
            ->join('tbl_chronic_disease_detail', 'tbl_health_account.id', '=', 'tbl_chronic_disease_detail.health_account_id')
            ->join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->where('tbl_chronic_disease_detail.active', STATUS_ACTIVE)
            ->where('tbl_health_account.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->whereBetween('tbl_chronic_disease_detail.log_date', [$time['from'], $time['to']])
            ->count('tbl_customer.id');

        return [
            'total_checkup' => (int)$total_data->total_checkup,
            'total_employee_checkup' => (int)$total_data->total_employee_checkup,
            'total_employee_relative_checkup' => (int)$total_data->total_employee_relative_checkup,
            'total_disease' => (int)$total_data->total_disease,
            'total_employee_disease' => (int)$total_data->total_employee_disease,
            'total_employee_relative_disease' => (int)$total_data->total_employee_relative_disease,
            'total_number_of_chronic_diseases' => (int)$total_number_of_chronic_diseases,
        ];
    }
}
