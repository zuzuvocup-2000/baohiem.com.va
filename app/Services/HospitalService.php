<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Hospital;

/**
 * Class HospitalService
 * @package App\Services
 */
class HospitalService
{
    public function getHospital()
    {
        return Hospital::where(['active' => STATUS_ACTIVE])->get();
    }

    public function getHospitalHealthCheck($params = []){
        $hospitalList = $this->getHospital()->toArray();
        if(isset($hospitalList) && is_array($hospitalList) && count($hospitalList)){
            foreach ($hospitalList as $key => $value) {
                $hospitalList[$key]['data'] = $this->getReportHospital($value['id'], convertTimeRange($params['time_range']));
            }
        }
        return $hospitalList;
    }

    private function getReportHospital($id, $time){
        return Customer::join('tbl_health_account', 'tbl_customer.id', '=', 'tbl_health_account.customer_id')
        ->join('tbl_health_checkup_information', 'tbl_health_account.id', '=', 'tbl_health_checkup_information.health_account_id')
        ->join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
        ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
        ->selectRaw('SUM(CASE WHEN account_holder = 1 THEN 1 ELSE 0 END) AS employee_disease,
                     SUM(CASE WHEN account_holder = 0 THEN 1 ELSE 0 END) AS employee_relative_disease')
        ->where('tbl_health_checkup_information.active', STATUS_ACTIVE)
        ->where('tbl_health_account.active', STATUS_ACTIVE)
        ->where('tbl_customer.active', STATUS_ACTIVE)
        ->where('tbl_account_detail.active', STATUS_ACTIVE)
        ->where('tbl_health_account.active', STATUS_ACTIVE)
        ->where('tbl_account.active', STATUS_ACTIVE)
        ->where('tbl_health_checkup_information.hospital_id', $id)
        ->whereBetween('tbl_health_checkup_information.checkup_date', [$time['from'], $time['to']])
        ->first();
    }
}
