<?php

namespace App\Services;

use App\Models\Contract;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class CustomerService
 * @package App\Services
 */
class CustomerService
{
    protected $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    public function getCustomerByKeyword($params)
    {
        $customerList = DB::table('tbl_customer')
            ->select('tbl_account_detail.account_id')
            ->join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_account_detail_detail', 'tbl_account.id', '=', 'tbl_account_detail_detail.account_id')
            ->join('tbl_package_detail', 'tbl_account_detail_detail.package_detail_id', '=', 'tbl_package_detail.id')
            ->join('tbl_period', 'tbl_package_detail.period_id', '=', 'tbl_period.id')
            ->join('tbl_period_detail', 'tbl_period.id', '=', 'tbl_period_detail.period_id')
            ->where('tbl_customer.full_name', 'like', '%' . $params['keyword'] . '%')
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('locked', 0)
            ->distinct()
            ->get()
            ->toArray();
        $accountList = [];
        if (isset($customerList) && is_array($customerList) && count($customerList)) {
            foreach ($customerList as $value) {
                $accountList = array_merge($accountList, $this->getCustomerByAccountHolder($value->account_id, $params));
            }
        }
        return $accountList;
    }

    public function getPaymentCustomerByHospital($params)
    {
        [$from, $to] = explode('-', $params['time_range']);

        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];
        return Customer::join('tbl_information_insurance', 'tbl_customer.id', '=', 'tbl_information_insurance.customer_id')
            ->join('tbl_account_detail', 'tbl_customer.id', '=', 'tbl_account_detail.customer_id')
            ->join('tbl_account', 'tbl_account_detail.account_id', '=', 'tbl_account.id')
            ->join('tbl_account_package', 'tbl_account.account_package_id', '=', 'tbl_account_package.id')
            ->join('tbl_contract', 'tbl_account.contract_id', '=', 'tbl_contract.id')
            ->join('tbl_payment_detail', 'tbl_payment_detail.account_detail_id', '=', 'tbl_account_detail.id')
            ->join('tbl_customer_group', 'tbl_customer_group.id', '=', 'tbl_customer.customer_group_id')
            ->join('tbl_payment_type', 'tbl_payment_type.id', '=', 'tbl_payment_detail.payment_type_id')
            ->select('tbl_customer.id', 'tbl_customer.full_name', 'tbl_customer.images', 'tbl_customer.folder', 'tbl_customer.birth_year', 'tbl_customer.address', 'tbl_customer.identity_card_number', 'tbl_customer.issue_date', 'tbl_customer.issue_place', 'tbl_customer.contact_phone', 'tbl_customer.email', 'tbl_customer.gender', 'tbl_information_insurance.card_number', 'effective_time', 'end_time', 'tbl_account_package.package_price', 'tbl_account_package.package_name', 'tbl_customer_group.group_name', 'tbl_contract.id as contract_id', 'tbl_account_detail.account_holder', 'tbl_account.active', 'tbl_payment_detail.amount_paid', 'tbl_payment_detail.payment_date', 'tbl_payment_detail.examination_date', 'tbl_payment_detail.id as payment_detail_id', 'tbl_payment_detail.note', 'tbl_payment_detail.approved', 'tbl_payment_detail.hospital_id', 'tbl_payment_type.id as payment_type_id', 'payment_type_name', 'expected_payment')
            ->where('tbl_account_detail.active', STATUS_ACTIVE)
            ->where('tbl_information_insurance.active', STATUS_ACTIVE)
            ->whereBetween('tbl_payment_detail.payment_date', [$time['from'], $time['to']])
            ->where('tbl_payment_detail.active', STATUS_ACTIVE)
            ->where('locked', STATUS_INACTIVE)
            ->where('tbl_payment_detail.hospital_id', $params['hospital'])
            ->orderBy('tbl_payment_detail.payment_date', 'asc')
            ->paginate(PER_PAGE_SMALL)
            ->setPath(route('revenue.reportByHospital', $params));
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

    private function getCustomerByAccountHolder($accountId, $params)
    {
        $customerList = [];
        $result = DB::select(
            "
            SELECT
                tbl_customer.id,
                tbl_customer.full_name,
                tbl_customer.birth_year,
                tbl_customer.address,
                tbl_customer.issue_date,
                tbl_customer.issue_place,
                tbl_customer.images,
                tbl_customer.folder,
                tbl_customer.identity_card_number,
                tbl_customer.email,
                tbl_customer.gender,
                tbl_customer.contact_phone,
                tbl_information_insurance.card_number,
                tbl_customer_group.group_name,
                tbl_customer_group.id as customer_group_id,
                tbl_account_package.package_price,
                tbl_account_package.id as account_package_id,
                tbl_account_package.package_name,
                tbl_contract.effective_time,
                tbl_contract.end_time,
                tbl_contract.id as contract_id,
                tbl_account_detail.account_holder,
                tbl_account.id as account_id,
                tbl_account.note,
                tbl_province.province_name,
                tbl_province.id as province_id,
                tbl_account_detail_detail.prepayment,
                tbl_account_detail.first_visit_date
            FROM
                tbl_period_detail
            INNER JOIN
                tbl_company ON tbl_period_detail.company_id = tbl_company.id
            INNER JOIN
                tbl_contract ON tbl_period_detail.id = tbl_contract.period_id
            INNER JOIN
                tbl_period ON tbl_period_detail.period_id = tbl_period.id
            INNER JOIN
                tbl_account_detail_detail
                INNER JOIN
                    tbl_package_detail ON tbl_account_detail_detail.package_detail_id = tbl_package_detail.id
                INNER JOIN
                    tbl_account ON tbl_account_detail_detail.account_id = tbl_account.id
                INNER JOIN
                    tbl_account_detail ON tbl_account.id = tbl_account_detail.account_id
                INNER JOIN
                    tbl_customer ON tbl_account_detail.customer_id = tbl_customer.id
                INNER JOIN
                    tbl_account_package ON tbl_package_detail.account_package_id = tbl_account_package.id
                INNER JOIN
                    tbl_information_insurance ON tbl_customer.id = tbl_information_insurance.customer_id
                INNER JOIN
                    tbl_customer_group ON tbl_customer.customer_group_id = tbl_customer_group.id
                INNER JOIN
                    tbl_province ON tbl_customer.province_id = tbl_province.id
            ON
                tbl_period.id = tbl_package_detail.period_id
            WHERE
                tbl_account.id = :accountId
                AND tbl_account.active = 1
                AND tbl_account_detail.active = 1
                AND tbl_information_insurance.active = 1
                AND tbl_customer.active = 1
                AND locked = 0
                AND tbl_contract.id = :contractId
            ORDER BY
                tbl_account_detail.account_id,
                tbl_account_detail.account_holder DESC,
                tbl_information_insurance.card_number DESC
            ",
            [$accountId, $params['contract']],
        );
        $accountHolderId = 0;
        foreach ($result as $value) {
            $customerExist = isset($customerList[$accountHolderId]['data'][$value->id]) ? true : false;
            if (!$customerExist) {
                $moneyPayment = $this->accountService->calculationMoneyPayment($value);
                $value->moneyStartPeriod = (int) (isset($moneyPayment['moneyStartPeriod']) ? $moneyPayment['moneyStartPeriod'] : 0);
                $value->totalAmountSpent = (int) (isset($moneyPayment['totalAmountSpent']) ? $moneyPayment['totalAmountSpent'] : 0);
                $value->theRemainingAmount = (int) (isset($moneyPayment['theRemainingAmount']) ? $moneyPayment['theRemainingAmount'] : 0);
            }
            if ($value->account_holder && !$customerExist) {
                $accountHolderId = $value->id;
                $customerList[$value->id]['fullname'] = $value->full_name . ' - ' . $value->card_number;
                $customerList[$value->id]['data'][$value->id] = $value;
            } elseif (!$customerExist) {
                $customerList[$accountHolderId]['data'][$value->id] = $value;
            }
        }

        return $customerList;
    }
}
