<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class CreateRoutePermissionsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:create-permission-routes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a permission routes.';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $routes = Route::getRoutes()->getRoutes();

        $denide = ['sanctum.csrf-cookie', 'logout', 'login', 'login.post', 'password.request', 'password.email', 'verify', 'verification.verify', 'verification.resend'];

        foreach ($routes as $route) {
            if ($route->getName() != '' && $route->getAction()['middleware']['0'] == 'web') {
                $routeName = $route->getName();
                if (!in_array($routeName, $denide)) {
                    $permission = Permission::where('name', $route->getName())->first();
                    if (is_null($permission)) {
                        $description = $this->getRouteDescription($routeName);
                        Permission::create(['name' => $route->getName(), 'description' => $description]);
                    }
                }
            }
        }

        $this->info('Permission routes added successfully.');
        return Command::SUCCESS;
    }

    private function getRouteDescription($routeName)
    {
        $descriptions = [
            'profile.user' => 'Màn hình thông tin cá nhân người dùng',
            'profile.update' => 'Cập nhật thông tin cá nhân',
            'profile.changePassword' => 'Màn hình thay đổi mật khẩu cá nhân',
            'change.password' => 'Cập nhật mật khẩu',
            'home' => 'Trang chủ',
            'ajax.contract.index' => 'Chức năng thu thập danh sách hợp đồng',
            'ajax.contract.create' => 'Chức năng tạo hợp đồng mới',
            'ajax.contract.delete' => 'Chức năng xóa hợp đồng',
            'ajax.contract.update' => 'Chức năng cập nhật hợp đồng',
            'ajax.company.index' => 'Chức năng thu thập danh sách công ty',
            'ajax.company.create' => 'Chức năng tạo mới công ty',
            'ajax.company.delete' => 'Chức năng xóa công ty',
            'ajax.company.update' => 'Chức năng cập nhật công ty',
            'ajax.period.index' => 'Chức năng thu thập danh sách kỳ hạn',
            'ajax.period.create' => 'Chức năng tạo mới kỳ hạn',
            'ajax.period.delete' => 'Chức năng xóa kỳ hạn',
            'ajax.period.update' => 'Chức năng cập nhật kỳ hạn',
            'ajax.account-package.create' => 'Chức năng tạo gói tài khoản mới',
            'ajax.account-package.delete' => 'Chức năng xóa gói tài khoản',
            'ajax.account-package.update' => 'Chức năng cập nhật gói tài khoản',
            'ajax.customer-group.create' => 'Chức năng tạo nhóm khách hàng mới',
            'ajax.customer-group.delete' => 'Chức năng xóa nhóm khách hàng',
            'ajax.customer-group.update' => 'Chức năng cập nhật nhóm khách hàng',
            'ajax.customer-type.create' => 'Chức năng tạo loại khách hàng mới',
            'ajax.customer-type.delete' => 'Chức năng xóa loại khách hàng',
            'ajax.customer-type.update' => 'Chức năng cập nhật loại khách hàng',
            'ajax.hospital-name.create' => 'Chức năng tạo tên bệnh viện mới',
            'ajax.hospital-name.delete' => 'Chức năng xóa tên bệnh viện',
            'ajax.hospital-name.update' => 'Chức năng cập nhật tên bệnh viện',
            'ajax.hospital-user.create' => 'Chức năng tạo thông tin tài khoản bệnh viện mới',
            'ajax.hospital-user.delete' => 'Chức năng xóa thông tin tài khoản bệnh viện',
            'ajax.hospital-user.update' => 'Chức năng cập nhật thông tin tài khoản bệnh viện',
            'ajax.department.create' => 'Chức năng tạo phòng ban mới',
            'ajax.department.delete' => 'Chức năng xóa phòng ban',
            'ajax.department.update' => 'Chức năng cập nhật phòng ban',
            'user.index' => 'Màn hình danh sách người dùng',
            'user.edit' => 'Màn hình chỉnh sửa người dùng',
            'user.update' => 'Cập nhật người dùng',
            'user.create' => 'Màn hình thêm mới người dùng',
            'user.store' => 'Thêm mới người dùng',
            'user.delete' => 'Xóa người dùng',
            'system.index' => 'Màn hình hệ thống',
            'contact.index' => 'Màn hình liên hệ',
            'contact.form' => 'Gửi yêu cầu liên hệ',
            'account.index' => 'Màn hình thông tin tài khoản',
            'account.insurance' => 'Màn hình cập nhật tài khoản khách hàng',
            'account.expenses' => 'Màn hình chi bảo hiểm',
            'account.create' => 'Màn hình thêm mới thông tin tài khoản',
            'account.store' => 'Thêm mới thông tin tài khoản',
            'account.detail' => 'Màn hình chi tiết thông tin tài khoản',
            'account.edit' => 'Màn hình chỉnh sửa thông tin tài khoản',
            'account.update' => 'Cập nhật thông tin tài khoản',
            'renewal.index' => 'Màn hình gia hạn hợp đồng',
            'renewal.export' => 'Xuất gia hạn hợp đồng',
            'renewal.store' => 'Lưu gia hạn hợp đồng',
            'role.index' => 'Màn hình danh sách vai trò',
            'role.create' => 'Tạo vai trò mới',
            'role.store' => 'Lưu vai trò mới',
            'role.show' => 'Hiển thị vai trò',
            'role.edit' => 'Chỉnh sửa vai trò',
            'role.update' => 'Cập nhật vai trò',
            'role.destroy' => 'Xóa vai trò',
            'permission.index' => 'Màn hình danh sách quyền',
            'permission.create' => 'Tạo quyền mới',
            'permission.store' => 'Lưu quyền mới',
            'permission.show' => 'Hiển thị quyền',
            'permission.edit' => 'Chỉnh sửa quyền',
            'permission.update' => 'Cập nhật quyền',
            'permission.destroy' => 'Xóa quyền',
            'supervisor.insuranceExpenses' => 'Chi phí bảo hiểm của giám đốc',
            'supervisor.account' => 'Tài khoản của giám đốc',
            'supervisor.accountOnline' => 'Tài khoản trực tuyến của giám đốc',
            'supervisor.index' => 'Màn hình danh sách giám đốc',
            'physical.index' => 'Màn hình Bảo hiểm sức khỏe',
            'physical.detail' => 'Chi tiết bảo hiểm sức khỏe',
            'physical.periodic' => 'Kiểm tra định kỳ',
            'department.index' => 'Màn hình danh sách phòng ban',
            'department.store' => 'Lưu phòng ban mới',
            'hospital.index' => 'Màn hình danh sách bệnh viện',
            'healthReport.index' => 'Màn hình Báo cáo sức khỏe',
            'revenue.index' => 'Màn hình Doanh thu',
            'diary.index' => 'Màn hình Nhật ký',
        ];

        return $descriptions[$routeName] ?? '';
    }
}
