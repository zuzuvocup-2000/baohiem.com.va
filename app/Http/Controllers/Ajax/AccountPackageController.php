<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\AccountPackage;
use App\Models\PackageDetail;
use App\Services\AccountPackageService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountPackageController extends Controller
{
    protected $accountPackageService;

    public function __construct(AccountPackageService $accountPackageService)
    {
        $this->accountPackageService = $accountPackageService;
    }

    public function create(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $accountPackage = AccountPackage::create([
                'package_name' => (string)$data['package_name'],
                'package_price' => (int)str_replace('.', '', $data['package_price']),
                'note' => (string)$data['note'],
                'active' => STATUS_ACTIVE
            ]);

            if (!$accountPackage) {
                throw new \Exception('Error creating AccountPackage');
            }

            $packageDetail = PackageDetail::create([
                'account_package_id' => $accountPackage['id'],
                'company_id' => (int)$data['companyId'],
                'period_id' => (int)$data['periodId'],
                'active' => STATUS_ACTIVE
            ]);

            if (!$packageDetail) {
                throw new \Exception('Error creating PackageDetail');
            }
            $this->saveLog(Auth::user()->id, 'Thông tin gói tài khoản được tạo thành công.');
            DB::commit();
            if ($packageDetail) return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Thông tin gói tài khoản được tạo thành công.']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Thêm mới thất bại.']);
        }
    }

    public function delete(Request $request)
    {
        try {
            DB::beginTransaction();

            $accountPackageId = $request->input('accountPackageId');
            $company = AccountPackage::find($accountPackageId);

            if ($company) {
                $company->update(['active' => STATUS_INACTIVE]);
                $this->saveLog(Auth::user()->id, 'Xóa gói tài khoản thành công.');
                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Xóa gói tài khoản thành công.']);
            }

            throw new \Exception('Không tìm thấy gói tài khoản.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Xóa gói tài khoản thất bại.']);
        }
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $company = AccountPackage::find($data['accountPackageId']);

            if ($company) {
                $company->update([
                    'package_name' => (string)$data['package_name'],
                    'package_price' => (int)str_replace('.', '', $data['package_price']),
                    'note' => (string)$data['note'],
                ]);
                $this->saveLog(Auth::user()->id, 'Cập nhật gói tài khoản thành công.');
                DB::commit();

                return response()->json(['status' => STATUS_SUCCESS, 'message' => 'Cập nhật gói tài khoản thành công.']);
            }
            throw new \Exception('Không tìm thấy gói tài khoản.');
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => STATUS_ERROR, 'message' => 'Cập nhật gói tài khoản thất bại.']);
        }
    }
}
