<?php

namespace App\Services;

use App\Models\PaymentDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class InsuranceExpensesService
 * @package App\Services
 */
class InsuranceExpensesService
{
    // KhachhangChiBH_Insert
    // Chibaohiem_insert
    public function InsuranceExpensesInsert($params)
    {
        try {
            DB::beginTransaction();

            $insertBatch = [];
            foreach ($params['payment_type_id'] as $key => $value) {
                $insertBatch[] = [
                    'payment_type_id' => $value,
                    'amount_paid' => (int)str_replace('.', '', $params['amount_paid'][$key]),
                    'expected_payment' => (int)str_replace('.', '', $params['expected_payment'][$key]),
                    'rejected_amount' => (int)str_replace('.', '', $params['rejected_amount'][$key]),
                    'note' => (string)$params['note'][$key],
                ];
            }

            $account_detail_id = DB::table('tbl_account_detail')
                ->where('active', 1)
                ->where('customer_id', $params['customer_id'])
                ->max('id');

            $time_end = $this->getTimeEnd($params, $account_detail_id);

            if (strtotime($params['payment_date']) <= strtotime($time_end)) {
                foreach ($insertBatch as $key => $value) {
                    PaymentDetail::create([
                        'user_id' => Auth::user()->id,
                        'account_detail_id' => $account_detail_id,
                        'hospital_id' => $params['hospital'],
                        'amount_paid' => $value['amount_paid'],
                        'payment_date' => Carbon::parse($params['payment_date'])->format('Y-m-d H:i:s'),
                        'note' => $value['note'],
                        'examination_date' => Carbon::parse($params['checkup_date'])->format('Y-m-d H:i:s'),
                        'approved' => (isset($params['approved']) ? $params['approved'] : 0),
                        'payment_type_id' => $value['payment_type_id'],
                        'expected_payment' => $value['expected_payment'],
                        'rejected_amount' => $value['rejected_amount'],
                        'vaccine_result_code' => 0,
                    ]);
                }

                DB::commit();
                return true;
            } else {
                DB::rollBack();
                return false;
            }
        } catch (\Exception $e) {
            DB::rollBack();

            return false;
        }
    }

    public function getTimeEnd($params, $account_detail_id)
    {
        $account_id = DB::table('tbl_account_detail')->where('active', 1)->where('id', $account_detail_id)->max('account_id');

        return DB::table('tbl_contract')
            ->join('tbl_period_detail', 'tbl_contract.period_id', '=', 'tbl_period_detail.id')
            ->join('tbl_package_detail', 'tbl_period_detail.period_id', '=', 'tbl_package_detail.period_id')
            ->join('tbl_account_detail_detail', 'tbl_package_detail.id', '=', 'tbl_account_detail_detail.package_detail_id')
            ->where('tbl_account_detail_detail.account_id', $account_id)
            ->where('tbl_period_detail.period_id', $params['period_id'])
            ->where('tbl_contract.id', $params['contract_id'])
            ->value('tbl_contract.end_time');
    }
}
