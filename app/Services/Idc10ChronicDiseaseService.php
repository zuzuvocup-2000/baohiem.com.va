<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Idc10ChronicDisease;

/**
 * Class Idc10ChronicDiseaseService
 * @package App\Services
 */
class Idc10ChronicDiseaseService
{
    public function getListIdc10ChronicDisease($params)
    {
        $idc10 = Idc10ChronicDisease::join('tbl_idc10_diagnosis_list', 'tbl_idc10_chronic_disease.idc10_diagnosis_list_id', '=', 'tbl_idc10_diagnosis_list.id')
            ->select('tbl_idc10_chronic_disease.idc10_diagnosis_list_id', 'tbl_idc10_chronic_disease.id', 'tbl_idc10_diagnosis_list.icd10_name', 'tbl_idc10_diagnosis_list.icd10_code')
            ->where('tbl_idc10_chronic_disease.active', STATUS_ACTIVE)
            ->where('tbl_idc10_diagnosis_list.active', STATUS_ACTIVE)
            ->orderBy('tbl_idc10_diagnosis_list.icd10_name')
            ->get()
            ->toArray();

        if (isset($idc10) && is_array($idc10) && count($idc10)) {
            foreach ($idc10 as $key => $value) {
                $idc10[$key]['data'] = $this->getReportIdc10($value['id'], $params);
            }
        }

        return $idc10;
    }

    private function getReportIdc10($id, $params = [])
    {
        $time = convertTimeRange($params['time_range']);
        return Customer::join('tbl_health_account', 'tbl_customer.id', '=', 'tbl_health_account.customer_id')
            ->join('tbl_chronic_disease_detail', 'tbl_health_account.id', '=', 'tbl_chronic_disease_detail.health_account_id')
            ->join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->selectRaw(
                'SUM(CASE WHEN account_holder = 1 THEN 1 ELSE 0 END) AS employee_disease,
                     SUM(CASE WHEN account_holder = 0 THEN 1 ELSE 0 END) AS employee_relative_disease',
            )
            ->where('tbl_chronic_disease_detail.active', 1)
            ->where('tbl_health_account.active', 1)
            ->where('tbl_customer.active', 1)
            ->where('tbl_health_account.active', 1)
            ->where('tbl_account.active', 1)
            ->where('tbl_account.contract_id', $params['contract'])
            ->where('tbl_chronic_disease_detail.chronic_disease_id', $id)
            ->whereBetween('tbl_chronic_disease_detail.log_date', [$time['from'], $time['to']])
            ->first();
    }
}
