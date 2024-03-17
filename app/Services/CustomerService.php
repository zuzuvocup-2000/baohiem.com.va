<?php

namespace App\Services;

use App\Models\Contract;

/**
 * Class CustomerService
 * @package App\Services
 */
class CustomerService
{
    public function getListAccount($params = [])
    {
        $whereConditions = $this->conditionWhere($params);
        $query = Contract::distinct()
            ->select('tbl_customer.id', 'tbl_customer.full_name', 'tbl_customer.images', 'tbl_customer.folder', 'tbl_customer.birth_year', 'tbl_customer.address', 'tbl_customer.issue_date', 'tbl_customer.issue_place', 'tbl_customer.identity_card_number', 'tbl_customer.email', 'tbl_customer.gender', 'tbl_customer.contact_phone', 'tbl_information_insurance.card_number', 'tbl_customer_group.group_name', 'tbl_customer_group.id as group_id', 'tbl_contract.id as contract_id', 'tbl_contract.effective_time', 'tbl_account_detail.account_holder', 'tbl_contract.end_time', 'tbl_account.note', 'tbl_province.province_name', 'tbl_province.id as province_id', 'tbl_account_detail.account_id', 'tbl_customer.locked', 'tbl_information_insurance.old_card_number')
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
        $query
            ->orderBy('tbl_account_detail.account_id')
            ->orderBy('tbl_account_detail.account_holder', 'DESC')
            ->orderBy('tbl_customer.full_name');
        return $query->paginate(PER_PAGE_MEDIUM);
    }

    private function conditionWhere($params = [])
    {
        $where = [
            'tbl_account_detail_detail.active' => 1,
            'tbl_package_detail.active' => 1,
            'tbl_account_detail.active' => 1,
            'tbl_account.active' => 1,
            'tbl_information_insurance.active' => 1,
            'tbl_customer.active' => 1,
        ];

        if (isset($params['company'])) {
            $where['tbl_company.id'] = $params['company'];
        }

        if (isset($params['period'])) {
            $where['tbl_period_detail.id'] = $params['period'];
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
}
