<?php

namespace App\Services;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
/**
 * Class PhysicalService
 * @package App\Services
 */
class PhysicalService
{
    // Danhsachkhamsuckhoe.aspx gv_khachhang ketquakham_Danhsachkham_ngaynhap
    public function getPhysical($companyId, $time_range, $params = [])
    {
        $whereConditions = $this->conditionWhere($params);
        [$from, $to] = explode('-', $time_range);
        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];
        return Customer::join('tbl_health_account', 'tbl_customer.id', '=', 'tbl_health_account.customer_id')
        ->join('tbl_health_checkup_information', 'tbl_health_account.id', '=', 'tbl_health_checkup_information.health_account_id')
        ->join('tbl_hospital', 'tbl_health_checkup_information.hospital_id', '=', 'tbl_hospital.id')
        ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
        ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
        ->join('tbl_company', 'tbl_province.id', '=', 'tbl_company.province_id')
        ->join('tbl_customer_type', 'tbl_customer.customer_type_id', '=', 'tbl_customer_type.id')
        ->select('dbo.tbl_information_insurance.card_number', 'dbo.tbl_customer.full_name', DB::raw('YEAR(dbo.tbl_customer.birth_year) AS birth_year'), 'dbo.tbl_customer.gender',
        DB::raw("FORMAT(dbo.tbl_health_checkup_information.checkup_date, 'dd/MM/yyyy') AS checkup_date"), 'dbo.tbl_health_checkup_information.id', 'dbo.tbl_hospital.hospital_name',
                'dbo.tbl_customer_type.type_name as package_name', 'tbl_customer.id')
       
        ->where('dbo.tbl_information_insurance.active', STATUS_ACTIVE)
        ->where('dbo.tbl_health_checkup_information.active', STATUS_ACTIVE)
        ->where('tbl_company.id', '=', $companyId)
        ->where('tbl_health_account.active', STATUS_ACTIVE)
        ->where('tbl_customer.active', STATUS_ACTIVE)
        ->whereBetween('dbo.tbl_health_checkup_information.log_date',  [$time['from'], $time['to']])
        ->where('dbo.tbl_customer_type.active', STATUS_ACTIVE)
        ->where($whereConditions)
        ->orderByDesc('checkup_date')
        ->orderBy('full_name')
        ->paginate(PER_PAGE_SMALL)->setPath(route('physical.index', $params));
    }
    private function conditionWhere($params = [])
    {
        $where = [
            'tbl_information_insurance.active' => STATUS_ACTIVE,
            'tbl_health_checkup_information.active' => STATUS_ACTIVE,
            'tbl_health_account.active' => STATUS_ACTIVE,
            'tbl_customer.active' => STATUS_ACTIVE,
            'tbl_customer_type.active' => STATUS_ACTIVE,
        ];

        if (isset($params['company'])) {
            $where['tbl_company.id'] = $params['company'];
        }
        if (isset($params['period'])) {
            $where['tbl_period_detail.period_id'] = $params['period'];
        }

        if (isset($params['contract'])) {
            $where['tbl_contract.id'] = $params['contract'];
        }
        return $where;
    }
}
