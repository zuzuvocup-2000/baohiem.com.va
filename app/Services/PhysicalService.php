<?php

namespace App\Services;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class PhysicalService
 * @package App\Services
 */
class PhysicalService
{
    // Danhsachkhamsuckhoe.aspx gv_khachhang ketquakham_Danhsachkham
    public function getPhysical($companyId, $time_range, $params = [])
    {
        [$from, $to] = explode('-', $time_range);
        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];

        $query = Customer::join('tbl_health_account', 'tbl_customer.id', '=', 'tbl_health_account.customer_id')
            ->join('tbl_health_checkup_information', 'tbl_health_account.id', '=', 'tbl_health_checkup_information.health_account_id')
            ->join('tbl_hospital', 'tbl_health_checkup_information.hospital_id', '=', 'tbl_hospital.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
            ->join('tbl_company', 'tbl_province.id', '=', 'tbl_company.province_id')
            ->join('tbl_customer_type', 'tbl_customer.customer_type_id', '=', 'tbl_customer_type.id')
            ->select(
                'tbl_information_insurance.card_number',
                'tbl_customer.full_name',
                DB::raw('YEAR(tbl_customer.birth_year) AS birth_year'),
                'tbl_customer.gender',
                DB::raw("FORMAT(tbl_health_checkup_information.checkup_date, 'dd/MM/yyyy') AS checkup_date"),
                'tbl_health_checkup_information.id',
                'tbl_hospital.hospital_name',
                'tbl_customer_type.type_name as package_name',
                'tbl_customer.id'
            )
            ->where('tbl_information_insurance.active', STATUS_ACTIVE)
            ->where('tbl_health_checkup_information.active', STATUS_ACTIVE)
            ->where('tbl_company.id', '=', $companyId)
            ->where('tbl_health_account.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_customer_type.active', STATUS_ACTIVE)
            ->whereBetween('tbl_health_checkup_information.checkup_date', [$time['from'], $time['to']]);

        if (isset($params['company'])) {
            $query->where('tbl_company.id', $params['company']);
        }

        if (isset($params['period'])) {
            $query->join('tbl_period_detail', 'tbl_company.id', '=', 'tbl_period_detail.company_id')
                ->where('tbl_period_detail.period_id', $params['period']);
        }

        if (isset($params['contract'])) {
            $query->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
                ->where('tbl_contract.id', $params['contract']);
        }

        $results = $query->orderBy('full_name')
            ->orderBy('checkup_date')
            ->orderBy('full_name')
            ->paginate(PER_PAGE_SMALL)
            ->setPath(route('physical.index', $params));

        return $results;
    }

    // Danhsachkhamsuckhoe.aspx gv_khachhang ketquakham_Danhsachkham_ngaynhap
    public function getPhysicalDateAdded($companyId, $time_range, $params = [])
    {
        [$from, $to] = explode('-', $time_range);
        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];

        $query = Customer::join('tbl_health_account', 'tbl_customer.id', '=', 'tbl_health_account.customer_id')
            ->join('tbl_health_checkup_information', 'tbl_health_account.id', '=', 'tbl_health_checkup_information.health_account_id')
            ->join('tbl_hospital', 'tbl_health_checkup_information.hospital_id', '=', 'tbl_hospital.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
            ->join('tbl_company', 'tbl_province.id', '=', 'tbl_company.province_id')
            ->join('tbl_customer_type', 'tbl_customer.customer_type_id', '=', 'tbl_customer_type.id')
            ->select(
                'tbl_information_insurance.card_number',
                'tbl_customer.full_name',
                DB::raw('YEAR(tbl_customer.birth_year) AS birth_year'),
                'tbl_customer.gender',
                DB::raw("FORMAT(tbl_health_checkup_information.checkup_date, 'dd/MM/yyyy') AS checkup_date"),
                'tbl_health_checkup_information.id',
                'tbl_hospital.hospital_name',
                'tbl_customer_type.type_name as package_name',
                'tbl_customer.id'
            )
            ->where('tbl_information_insurance.active', STATUS_ACTIVE)
            ->where('tbl_health_checkup_information.active', STATUS_ACTIVE)
            ->where('tbl_company.id', '=', $companyId)
            ->where('tbl_health_account.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->where('tbl_customer_type.active', STATUS_ACTIVE)
            ->whereBetween('tbl_health_checkup_information.log_date', [$time['from'], $time['to']]);

        if (isset($params['company'])) {
            $query->where('tbl_company.id', $params['company']);
        }

        if (isset($params['period'])) {
            $query->join('tbl_period_detail', 'tbl_company.id', '=', 'tbl_period_detail.company_id')
                ->where('tbl_period_detail.period_id', $params['period']);
        }

        if (isset($params['contract'])) {
            $query->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
                ->where('tbl_contract.id', $params['contract']);
        }

        $results = $query->orderByDesc('checkup_date')
            ->orderBy('full_name')
            ->paginate(PER_PAGE_SMALL)
            ->setPath(route('physical.index', $params));

        return $results;
    }

    // Khamsuckhoedinhky.aspx btn_timkiem_Click - KhachhangTKBaohiem_FindTheosothe_list - KhachhangTKBaohiem_FindKH_TheotenKH
    // load_taikhoanKHtheosothe
    public function loadCustomerAccountByCardNumber($company_id, $period_id)
    {
        // $manienhan, $sothe
        // Step 1: Find the account ID based on the card number
        $accountId = DB::table('tbl_account_detail')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->where('tbl_account_detail.active', 1)
            ->where('tbl_information_insurance.active', 1)
            ->where('tbl_account.active', 1)
            ->where('tbl_customer.active', 1)
            ->where('tbl_period_detail.active', 1)
            ->where(function ($query) use ($period_id) {
                $query->whereRaw('LTRIM(RTRIM(tbl_information_insurance.card_number)) LIKE LTRIM(RTRIM(?))', [$period_id])
                    ->orWhereRaw('LTRIM(RTRIM(tbl_information_insurance.old_card_number)) LIKE LTRIM(RTRIM(?))', [$period_id]);
            })
            ->where('tbl_period_detail.period_id', $company_id)
            ->where('tbl_customer.locked', 0)
            ->distinct()
            ->pluck('tbl_account_detail.account_id')
            ->first();

        // Step 2: If account ID is not found, return null
        if (!$accountId) {
            return null;
        }

        // Step 3: Retrieve customer details based on the account ID
        $results = DB::table('tbl_period_detail')
            ->join('tbl_company', 'tbl_period_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_contract', 'tbl_period_detail.id', '=', 'tbl_contract.period_id')
            ->join('tbl_period', 'tbl_period_detail.period_id', '=', 'tbl_period.id')
            ->join('tbl_account_detail_detail', 'tbl_account_detail_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_package_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
            ->join('tbl_account', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_customer_group', 'tbl_customer.customer_group_id', '=', 'tbl_customer_group.id')
            ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
            ->join('tbl_customer_type', 'tbl_customer.customer_type_id', '=', 'tbl_customer_type.id')
            ->where('tbl_account.id', $accountId)
            ->where('tbl_account.active', 1)
            ->where('tbl_account_detail.active', 1)
            ->where('tbl_information_insurance.active', 1)
            ->where('tbl_customer.active', 1)
            ->where('tbl_period.id', $company_id)
            ->where('tbl_customer.locked', 0)
            ->where('tbl_contract.active', 1)
            ->select(
                'tbl_customer.id as customer_id',
                'tbl_customer.full_name',
                'tbl_customer.images',
                'tbl_customer.folder',
                DB::raw("CONVERT(nvarchar, tbl_customer.birth_year, 103)"),
                'tbl_customer.address',
                'tbl_customer.issue_date',
                'tbl_customer.issue_place',
                'tbl_customer.identity_card_number',
                'tbl_customer.email',
                'tbl_customer.gender',
                'tbl_customer.contact_phone',
                'tbl_information_insurance.card_number',
                'tbl_customer_group.group_name',
                'tbl_customer_group.id as group_id',
                'tbl_account_package.package_price',
                'tbl_account_package.id as package_id',
                'tbl_account_package.package_name',
                DB::raw("CONVERT(nvarchar, tbl_account_package.start_date, 103)"),
                'tbl_account.contract_id',
                'tbl_account_detail.account_holder',
                DB::raw("CONVERT(nvarchar, tbl_contract.effective_time, 103)"),
                'tbl_account.note',
                'tbl_province.province_name',
                'tbl_province.id as province_id',
                'tbl_account_detail_detail.prepayment',
                'tbl_account.id as account_id',
                'tbl_customer.locked',
                'tbl_customer_type.type_name'
            )
            ->distinct()
            ->get();

        return $results;
    }
    // Khamsuckhoedinhky.aspx btn_timkiem_Click - load_taikhoanKHtheotenKH
    public function loadCustomerAccountByName()
    {
        return [];
    }
    // KhachhangTKBaohiem_listTheomahopdong_goikhamGAS
    public function getCustomersByContractAndPackage($contractId, $user_id)
    {
        // Step 1: Get GAS permission for the user
        // $gasPermission = DB::table('tbl_user_staff')
        //     ->where('mauser_nhansu', $user_id)
        //     ->where('active', 1)
        //     ->value('Gaspermission');

        // Step 2: Get customer ID associated with the user
        $customer_id_user = DB::table('tbl_user_staff')
            ->where('tbl_user_staff.id', $user_id)
            ->where('active', 1)
            ->value('customer_id');

        // Step 3: Get branch ID associated with the customer
        $branch_id = DB::table('tbl_gas_branch_detail')
            ->where('customer_id', $customer_id_user)
            ->distinct()
            ->value('gas_branch_id');

        // Step 4: Retrieve customer details based on the contract ID and branch ID
        $results = DB::table('tbl_contract')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_company', 'tbl_period_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_period', 'tbl_period_detail.period_id', '=', 'tbl_period.id')
            ->join('tbl_package_detail', 'tbl_period.id', '=', 'tbl_package_detail.period_id')
            ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_account_detail_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
            ->join('tbl_account', 'tbl_account_detail_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_account_detail', 'tbl_account.id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_customer_group', 'tbl_customer.customer_group_id', '=', 'tbl_customer_group.id')
            ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
            ->join('tbl_customer_type', 'tbl_customer.customer_type_id', '=', 'tbl_customer_type.id')
            ->join('tbl_health_account', 'tbl_health_account.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_gas_branch_detail', 'tbl_customer.id', '=', 'tbl_gas_branch_detail.customer_id')
            ->where('tbl_contract.id', $contractId)
            ->where('tbl_account.active', 1)
            ->where('tbl_account_detail.active', 1)
            ->where('tbl_information_insurance.active', 1)
            ->where('tbl_customer.active', 1)
            ->where('tbl_health_account.active', 1)
            ->where('tbl_gas_branch_detail.gas_branch_id', $branch_id)
            ->select(
                'tbl_customer.id as customer_id',
                'tbl_customer.full_name',
                'tbl_customer.images',
                'tbl_customer.folder',
                DB::raw("CONVERT(nvarchar, tbl_customer.birth_year, 103) as birth_year"),
                'tbl_customer.address',
                'tbl_customer.issue_date',
                'tbl_customer.issue_place',
                'tbl_customer.identity_card_number',
                'tbl_customer.email',
                'tbl_customer.gender',
                'tbl_customer.contact_phone',
                'tbl_information_insurance.card_number',
                'tbl_customer_group.group_name',
                'tbl_customer_group.id as group_id',
                'tbl_account_package.package_name',
                DB::raw("CONVERT(nvarchar, tbl_contract.effective_time, 103) as effective_time"),
                'tbl_contract.id as contract_id',
                'tbl_account_detail.account_holder',
                DB::raw("CONVERT(nvarchar, tbl_contract.end_time, 103) as end_time"),
                'tbl_account.note',
                'tbl_province.province_name',
                'tbl_province.id as province_id',
                'tbl_information_insurance.card_number as card_number_expr1',
                'tbl_customer_type.type_name',
                'tbl_account_detail.account_id',
                'tbl_customer.locked'
            )
            ->distinct()
            ->orderBy('tbl_account_detail.account_id')
            ->orderByDesc('tbl_account_detail.account_holder')
            ->orderBy('tbl_customer.full_name')
            ->get();

        return $results;
    }

    // KhachhangTKBaohiem_listTheomahopdong_goikham
    public function customerInsuranceAccount_listByContractCode_medicalPackage()
    {
        return [];

    }
    // Khamsuckhoedinhky.aspx  btn_loadds_Click (show_khachhang) - KhachhangTKBaohiem_listTheomahopdong_goikhamGAS - KhachhangTKBaohiem_listTheomahopdong_goikham
    public function show_customer($params = [])
    {
        $contract_id = $params["company"];
        $user_id = $params["keyword"];
        $results = $this->getCustomersByContractAndPackage($contract_id, $user_id);
        return $results;

    }
    public function getPeriodicPhysical($params = [])
    {
        $n = 0;
        $keyword = trim($params['keyword']);
        $customer_data = [];
        if ($keyword != "") {
            if (strlen($keyword) > 5) {
                if (is_numeric(substr($keyword, -6))) {
                    $customer_data = $this->loadCustomerAccountByCardNumber($params['company'], $params['period']);
                } else {
                    $customer_data = $this->loadCustomerAccountByName();
                }
            } else {
                echo "<script>alert('Search information must be at least 6 characters!');</script>";
            }
        } else {
            echo "<script>alert('Please enter search information!');</script>";
        }

        $results = $customer_data;
        return $results;
    }
}
