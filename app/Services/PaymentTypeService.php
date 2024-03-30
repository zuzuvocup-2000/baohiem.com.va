<?php

namespace App\Services;

use App\Models\PaymentType;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class PaymentTypeService
 * @package App\Services
 */
class PaymentTypeService
{
    public function getPaymentTypeList()
    {
        return PaymentType::select('id', 'payment_type_name')
            ->where(['active' => STATUS_ACTIVE])
            ->get()
            ->toArray();
    }

    public function countPaymentInsuranceById($id, $time_range)
    {
        [$from, $to] = explode('-', $time_range);

        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];
        return DB::table('tbl_payment_detail')
            ->selectRaw('COUNT(id) as count, SUM(amount_paid) as total')
            ->where('active', STATUS_ACTIVE)
            ->where('payment_type_id', $id)
            ->whereBetween('tbl_payment_detail.log_date', [$time['from'], $time['to']])
            ->first();
    }

    public function getPaymentTypeListAnother($time_range)
    {
        [$from, $to] = explode('-', $time_range);

        $time = [
            'from' => Carbon::createFromFormat('d/m/Y', trim($from))->format('Y-m-d'),
            'to' => Carbon::createFromFormat('d/m/Y', trim($to))->format('Y-m-d'),
        ];
        return DB::table('tbl_payment_detail')
            ->where('active', STATUS_ACTIVE)
            ->where('payment_type_id', 5)
            ->whereBetween('tbl_payment_detail.payment_date', [$time['from'], $time['to']])
            ->get();
    }
}
