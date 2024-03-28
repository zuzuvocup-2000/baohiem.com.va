<?php

namespace App\Services;

use App\Models\Contract;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomerService
 * @package App\Services
 */
class CustomerService
{
    public function getPaymentCustomerByHospital($params)
    {
        return DB::table('TBL_KHACHHANG')
            ->join('TBL_thongtintheBH', 'TBL_KHACHHANG.MAKHACHHANG', '=', 'TBL_thongtintheBH.Makhachhang')
            ->join('TBL_CHITIETTAIKHOAN', 'TBL_KHACHHANG.MAKHACHHANG', '=', 'TBL_CHITIETTAIKHOAN.MAKHACHHANG')
            ->join('TBL_TAIKHOAN', 'TBL_CHITIETTAIKHOAN.MATAIKHOAN', '=', 'TBL_TAIKHOAN.MATAIKHOAN')
            ->join('TBL_GOITAIKHOAN', 'TBL_TAIKHOAN.MAGOIACCOUNT', '=', 'TBL_GOITAIKHOAN.MAGOIACCOUNT')
            ->join('TBL_HOPDONGCTY', 'TBL_TAIKHOAN.MAHOPDONG', '=', 'TBL_HOPDONGCTY.MAHOPDONG')
            ->join('TBL_CHITIETCHITRA', 'TBL_CHITIETCHITRA.MACHITIETTAIKHOAN', '=', 'TBL_CHITIETTAIKHOAN.MACHITIETTAIKHOAN')
            ->join('TBL_PHANNHOMKHACHHANG', 'TBL_PHANNHOMKHACHHANG.MAPHANNHOMKHACHHANG', '=', 'TBL_KHACHHANG.MAPHANNHOMKHACHHANG')
            ->join('tbl_loaichi', 'tbl_loaichi.MALOAICHI', '=', 'tbl_chitietchitra.maloaichi')
            ->select(
                'TBL_KHACHHANG.MAKHACHHANG',
                'TBL_KHACHHANG.TENHO',
                'TBL_KHACHHANG.images',
                'TBL_KHACHHANG.folder',
                DB::raw('CONVERT(nvarchar, TBL_KHACHHANG.NAMSINH, 103) as namsinh'),
                'TBL_KHACHHANG.DIACHICUTRU',
                'TBL_KHACHHANG.SOCMND',
                'TBL_KHACHHANG.NGAYCAPCMND',
                'TBL_KHACHHANG.NOICAP',
                'TBL_KHACHHANG.DIENTHOAILIENLAC',
                'TBL_KHACHHANG.EMAIL',
                'TBL_KHACHHANG.gioitinh',
                'TBL_thongtintheBH.sothe',
                DB::raw('CONVERT(nvarchar, TBL_thongtintheBH.ngaybatdau, 103) as thoigianhieuluc'),
                DB::raw('CONVERT(nvarchar, TBL_thongtintheBH.ngayketthuc, 103) as thoigianketthuc'),
                'TBL_GOITAIKHOAN.GIATRIGOI',
                'TBL_GOITAIKHOAN.TENGOIBH',
                'TBL_PHANNHOMKHACHHANG.TENNHOMKHACHHANG',
                'TBL_HOPDONGCTY.MAHOPDONG',
                'TBL_CHITIETTAIKHOAN.chutaikhoan',
                'TBL_TAIKHOAN.ACTIVE',
                'TBL_CHITIETCHITRA.SOTIENCHITRA',
                DB::raw('CONVERT(nvarchar, TBL_CHITIETCHITRA.NGAYCHI, 103) as ngaychi'),
                'TBL_CHITIETCHITRA.NGAYKHAM',
                'TBL_CHITIETCHITRA.MACHITIETCHITRA',
                'TBL_CHITIETCHITRA.GHICHU',
                'TBL_CHITIETCHITRA.DADUYET',
                'TBL_CHITIETCHITRA.MABENHVIEN',
                'tbl_loaichi.maloaichi',
                'TENLOAICHI',
                'uocchi',
            )
            ->where('TBL_CHITIETTAIKHOAN.ACTIVE', 1)
            ->where('TBL_thongtintheBH.active', 1)
            ->whereBetween(DB::raw('CONVERT(datetime, CONVERT(nvarchar(11), TBL_CHITIETCHITRA.NGAYCHI), 102)'), [DB::raw("CONVERT(datetime, CONVERT(nvarchar(11), '$tungay'), 102)"), DB::raw("CONVERT(datetime, CONVERT(nvarchar(11), '$denngay'), 102)")])
            ->where('TBL_CHITIETCHITRA.ACTIVE', 1)
            ->where('khoa', 0)
            ->where('TBL_CHITIETCHITRA.MABENHVIEN', $mabenhvien)
            ->orderBy('TBL_CHITIETCHITRA.NGAYCHI', 'asc')
            ->get();
    }

    public function getListAccount($params = [])
    {
        $whereConditions = $this->conditionWhere($params);
        $query = Contract::select('tbl_customer.id', 'tbl_customer.full_name', 'tbl_customer.images', 'tbl_customer.folder', 'tbl_customer.birth_year', 'tbl_customer.address', 'tbl_customer.issue_date', 'tbl_customer.issue_place', 'tbl_customer.identity_card_number', 'tbl_customer.email', 'tbl_customer.gender', 'tbl_customer.contact_phone', 'tbl_information_insurance.card_number', 'tbl_customer_group.group_name', 'tbl_customer_group.id as group_id', 'tbl_contract.id as contract_id', 'tbl_contract.effective_time', 'tbl_account_detail.account_holder', 'tbl_contract.end_time', 'tbl_account.note', 'tbl_province.province_name', 'tbl_province.id as province_id', 'tbl_account_detail.account_id', 'tbl_customer.locked', 'tbl_information_insurance.old_card_number')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_company', 'tbl_period_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_package_detail', 'tbl_package_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_account_detail_detail', 'tbl_package_detail.id', '=', 'tbl_account_detail_detail.package_detail_id')
            ->join('tbl_account_detail', 'tbl_account_detail.account_id', '=', 'tbl_account_detail_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_customer_group', 'tbl_customer.customer_group_id', '=', 'tbl_customer_group.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_province', function ($join) {
                $join->on('tbl_company.province_id', '=', 'tbl_province.id')->on('tbl_customer.province_id', '=', 'tbl_province.id');
            })
            ->join('tbl_account', function ($join) {
                $join->on('tbl_account_detail_detail.account_id', '=', 'tbl_account.id')->on('tbl_account_detail.account_id', '=', 'tbl_account.id');
            })
            ->where($whereConditions);

        if (isset($params['keyword']) && !empty($params['keyword'])) {
            $keyword = $params['keyword'];
            $query->where(function ($query) use ($keyword) {
                $query
                    ->where('tbl_customer.email', 'LIKE', "%$keyword%")
                    ->orWhere('tbl_customer.full_name', 'LIKE', "%$keyword%")
                    ->orWhere('tbl_information_insurance.card_number', 'LIKE', "%$keyword%");
            });
        }
        $query->orderBy('tbl_account_detail.account_id')->orderBy('tbl_account_detail.account_holder', 'DESC')->orderBy('tbl_customer.full_name');
        $query->groupBy('tbl_customer.id', 'tbl_customer.full_name', 'tbl_customer.images', 'tbl_customer.folder', 'tbl_customer.birth_year', 'tbl_customer.address', 'tbl_customer.issue_date', 'tbl_customer.issue_place', 'tbl_customer.identity_card_number', 'tbl_customer.email', 'tbl_customer.gender', 'tbl_customer.contact_phone', 'tbl_information_insurance.card_number', 'tbl_customer_group.group_name', 'tbl_customer_group.id', 'tbl_contract.id', 'tbl_contract.effective_time', 'tbl_account_detail.account_holder', 'tbl_contract.end_time', 'tbl_account.note', 'tbl_province.province_name', 'tbl_province.id', 'tbl_account_detail.account_id', 'tbl_customer.locked', 'tbl_information_insurance.old_card_number');

        return $query->paginate(PER_PAGE_SMALL)->setPath(route('account.index', $params));
    }

    public function getListAccountExport($params = [])
    {
        return Contract::select('tbl_information_insurance.card_number', 'tbl_information_insurance.old_card_number', 'tbl_customer.full_name', 'tbl_account_detail.account_holder', 'tbl_customer.birth_year', 'tbl_customer.gender', 'tbl_customer.email', 'tbl_customer.images', 'tbl_customer_group.group_name', 'tbl_account_detail.advance_payment', 'tbl_account_detail_detail.prepayment', 'tbl_account_package.package_price', 'tbl_account_package.package_name', 'tbl_contract.effective_time', 'tbl_contract.end_time', 'tbl_account.note')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_company', 'tbl_period_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_package_detail', 'tbl_package_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_account_detail_detail', 'tbl_package_detail.id', '=', 'tbl_account_detail_detail.package_detail_id')
            ->join('tbl_account_detail', 'tbl_account_detail.account_id', '=', 'tbl_account_detail_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_customer_group', 'tbl_customer.customer_group_id', '=', 'tbl_customer_group.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_province', function ($join) {
                $join->on('tbl_company.province_id', '=', 'tbl_province.id')->on('tbl_customer.province_id', '=', 'tbl_province.id');
            })
            ->join('tbl_account', function ($join) {
                $join->on('tbl_account_detail_detail.account_id', '=', 'tbl_account.id')->on('tbl_account_detail.account_id', '=', 'tbl_account.id');
            })
            ->orderBy('tbl_account_detail.account_id')
            ->orderBy('tbl_account_detail.account_holder', 'DESC')
            ->orderBy('tbl_customer.full_name')
            ->take(10000)
            ->get();
    }

    private function conditionWhere($params = [])
    {
        $where = [
            'tbl_account_detail_detail.active' => STATUS_ACTIVE,
            'tbl_package_detail.active' => STATUS_ACTIVE,
            'tbl_account_detail.active' => STATUS_ACTIVE,
            'tbl_account.active' => STATUS_ACTIVE,
            'tbl_information_insurance.active' => STATUS_ACTIVE,
            'tbl_customer.active' => STATUS_ACTIVE,
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

        if (isset($params['customer_group']) && $params['customer_group'] >= 0) {
            $where['tbl_customer.customer_group_id'] = $params['customer_group'];
        }

        if (isset($params['account']) && $params['account'] >= 0) {
            $where['tbl_account_detail.account_holder'] = $params['account'];
        }

        if (isset($params['active']) && $params['active'] >= 0) {
            $where['tbl_customer.locked'] = $params['active'];
        }

        if (isset($params['email']) && $params['email'] == 1) {
            $where[] = ['tbl_customer.email', '!=', ''];
        } elseif (isset($params['email']) && $params['email'] == 0) {
            $where['tbl_customer.email'] = '';
        }
        return $where;
    }

    public function getCustomerByContractDetail($contractId)
    {
        return Contract::join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_company', 'tbl_period_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_period', 'tbl_period_detail.period_id', '=', 'tbl_period.id')
            ->join('tbl_package_detail', function ($join) {
                $join->on('tbl_company.id', '=', 'tbl_package_detail.company_id')->on('tbl_period.id', '=', 'tbl_package_detail.period_id');
            })
            ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_account_detail_detail', 'tbl_package_detail.id', '=', 'tbl_account_detail_detail.package_detail_id')
            ->join('tbl_account_detail', 'tbl_account_detail_detail.account_id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_gas_branch_detail', 'tbl_customer.id', '=', 'tbl_gas_branch_detail.customer_id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_province', 'tbl_customer.province_id', '=', 'tbl_province.id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_customer_group', 'tbl_customer.customer_group_id', '=', 'tbl_customer_group.id')
            ->select('tbl_customer.id', 'tbl_customer.full_name', 'tbl_customer.images', 'tbl_customer.folder', 'tbl_customer.birth_year', 'tbl_customer.address', 'tbl_customer.issue_date', 'tbl_customer.issue_place', 'tbl_customer.identity_card_number', 'tbl_customer.email', 'tbl_customer.gender', 'tbl_customer.contact_phone', 'tbl_information_insurance.card_number', 'tbl_customer_group.group_name', 'tbl_customer_group.id as customer_group_id', 'tbl_account_package.package_price', 'tbl_account_package.id as account_package_id', 'tbl_account_package.package_name', 'tbl_contract.effective_time', 'tbl_contract.end_time', 'tbl_account_detail.first_visit_date', 'tbl_contract.id as contract_id', 'tbl_account_detail.account_holder', 'tbl_account.note', 'tbl_province.province_name', 'tbl_province.id as province_id', 'tbl_account_detail_detail.prepayment', 'tbl_account_detail.account_id', 'tbl_customer.locked')
            ->where('tbl_contract.id', $contractId)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_information_insurance.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->orderBy('tbl_account_detail.account_id')
            ->orderBy('tbl_account_detail.account_holder', 'DESC')
            ->orderBy('full_name')
            ->distinct()
            ->get();
    }

    public function getCustomerNotByContractDetail($contractId)
    {
        return Contract::join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_company', 'tbl_period_detail.company_id', '=', 'tbl_company.id')
            ->join('tbl_package_detail', 'tbl_company.id', '=', 'tbl_package_detail.company_id')
            ->join('tbl_account_package', 'tbl_package_detail.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_account_detail_detail', 'tbl_package_detail.id', '=', 'tbl_account_detail_detail.package_detail_id')
            ->join('tbl_account_detail', 'tbl_account_detail_detail.account_id', '=', 'tbl_account_detail.account_id')
            ->join('tbl_customer', 'tbl_account_detail.customer_id', '=', 'tbl_customer.id')
            ->join('tbl_customer_group', 'tbl_customer.customer_group_id', '=', 'tbl_customer_group.id')
            ->join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_province', function ($join) {
                $join->on('tbl_company.province_id', '=', 'tbl_province.id')->whereColumn('tbl_customer.province_id', '=', 'tbl_province.id');
            })
            ->join('tbl_account', 'tbl_account_detail_detail.account_id', '=', 'tbl_account.id')
            ->where('tbl_contract.id', $contractId)
            ->where('tbl_account_detail_detail.active', STATUS_ACTIVE)
            ->where('tbl_package_detail.active', STATUS_ACTIVE)
            ->where('tbl_account_detail.account_holder', STATUS_ACTIVE)
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_account_detail_detail.active', STATUS_ACTIVE)
            ->where('tbl_account.active', STATUS_ACTIVE)
            ->where('tbl_information_insurance.active', STATUS_ACTIVE)
            ->where('tbl_customer.active', STATUS_ACTIVE)
            ->select('tbl_customer.id', 'tbl_customer.full_name', 'tbl_customer.images', 'tbl_customer.folder', 'tbl_customer.birth_year', 'tbl_customer.address', 'tbl_customer.issue_date', 'tbl_customer.issue_place', 'tbl_customer.identity_card_number', 'tbl_customer.email', 'tbl_customer.gender', 'tbl_customer.contact_phone', 'tbl_information_insurance.card_number', 'tbl_customer_group.group_name', 'tbl_customer_group.id as customer_group_id', 'tbl_contract.effective_time', 'tbl_contract.end_time', 'tbl_contract.id as contract_id', 'tbl_account_detail.account_holder', 'tbl_account.note', 'tbl_province.province_name', 'tbl_province.id as province_id', 'tbl_account_detail.account_id', 'locked', 'tbl_account_detail.first_visit_date')
            ->orderBy('tbl_account_detail.account_id')
            ->orderByDesc('tbl_account_detail.account_holder')
            ->orderBy('full_name')
            ->distinct()
            ->get();
    }
}
