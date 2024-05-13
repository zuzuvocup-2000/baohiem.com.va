<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
/**
 * Class HealthReportService
 * @package App\Services
 */
class HealthReportService
{
// tìm các function có sẵn ko tồn tại, thấy function này phù hợp nhất nên là lấy ở trong db  ketquakham_Danhsachkham_chitiet
    public function getHealthReportList($companyId, $time_range, $params = []){
        [$from, $to] = explode('-', $time_range);
        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];
        return Customer::select([
            'tbl_information_insurance.card_number',
            'tbl_customer.full_name',
            DB::raw('YEAR(tbl_customer.birth_year) as birth_year'),
            'tbl_customer.gender',
            DB::raw("FORMAT(tbl_health_checkup_information.checkup_date, 'dd/MM/yyyy') as checkup_date"),
            'tbl_health_checkup_information.id',
            'tbl_hospital.hospital_name',
            'tbl_family_status.single',
            'tbl_family_status.married',
            'tbl_family_status.divorced',
            'tbl_health_checkup_information.height',
            'tbl_health_checkup_information.weight',
            'tbl_health_checkup_information.blood_pressure',
            'tbl_health_checkup_information.respiration_rate',
            'tbl_health_checkup_information.chest_circumference',
            'tbl_health_checkup_information.bmi',
            'tbl_health_checkup_information.disease_code',
            'tbl_health_checkup_information.disease_name',
            'tbl_health_checkup_information.solution_direction',
            'tbl_health_checkup_information.health_type',
            'tbl_customer_type.type_name'
        ])
        ->join('tbl_health_account', 'tbl_customer.id', '=', 'tbl_health_account.customer_id')
        ->join('tbl_health_checkup_information', 'tbl_health_account.id', '=', 'tbl_health_checkup_information.health_account_id')
        ->join('tbl_hospital', 'tbl_health_checkup_information.hospital_id', '=', 'tbl_hospital.id')
        ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
        ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
        ->join('tbl_company', 'tbl_province.id', '=', 'tbl_company.province_id')
        ->join('tbl_family_status', 'tbl_health_account.family_status_id', '=', 'tbl_family_status.id')
        ->join('tbl_customer_type', 'tbl_customer.customer_type_id', '=', 'tbl_customer_type.id')
        ->where('tbl_information_insurance.active', STATUS_ACTIVE)
        ->where('tbl_health_checkup_information.active', STATUS_ACTIVE)
        ->where('tbl_company.id', '=', $companyId)
        ->whereBetween('tbl_health_checkup_information.checkup_date', [$time['from'], $time['to']])
        ->where('tbl_customer_type.active', STATUS_ACTIVE)
        ->orderBy('full_name', 'asc')
        ->orderBy('checkup_date', 'asc')
        ->distinct()
        ->paginate(PER_PAGE_SMALL)->setPath(route('healthReport.index', $params));
    }

    
}
