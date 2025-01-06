<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\LogUser;
use App\Models\PaymentType;
use App\Services\VaccinationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Auth;

class PaymentTypeController extends Controller
{
    protected $vaccinationService;

    public function __construct(VaccinationService $vaccinationService)
    {
        $this->vaccinationService = $vaccinationService;
    }

    public function add(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $paymentType = new PaymentType();
            $paymentType->payment_type_name = $request->name;
            $paymentType->active = STATUS_ACTIVE;
            $paymentType->save();

            LogUser::create([
                'action' => 'Thêm nội dung chi thành công',
                'user_id' => Auth::user()->id,
                'local_ip' => $request->ip(),
                'computer_name' => gethostname(),
            ]);

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Thêm nội dung chi thành công!']);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi thêm nội dung chi', ['error' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra khi thêm nội dung chi!'], 500);
        }
    }

    public function edit(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'id' => 'required|exists:tbl_payment_type,id',
                'name' => 'required|string|max:255',
            ]);

            $paymentType = PaymentType::find($request->id);
            $paymentType->payment_type_name = $request->name;
            $paymentType->save();

            LogUser::create([
                'action' => 'Sửa nội dung chi thành công',
                'user_id' => Auth::user()->id,
                'local_ip' => $request->ip(),
                'computer_name' => gethostname(),
            ]);

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Sửa nội dung chi thành công!']);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi sửa nội dung chi', ['error' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra khi sửa nội dung chi!'], 500);
        }
    }

    public function delete(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'id' => 'required|exists:tbl_payment_type,id',
            ]);

            $paymentType = PaymentType::find($request->id);
            $paymentType->active = STATUS_INACTIVE;
            $paymentType->save();

            LogUser::create([
                'action' => 'Xoá nội dung chi thành công',
                'user_id' => Auth::user()->id,
                'local_ip' => $request->ip(),
                'computer_name' => gethostname(),
            ]);

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Xóa nội dung chi thành công!']);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi xóa nội dung chi', ['error' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra khi xóa nội dung chi!'], 500);
        }
    }
}
