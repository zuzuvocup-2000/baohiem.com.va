<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Ajax\CompanyController;
use App\Http\Controllers\Ajax\ContractController;
use App\Http\Controllers\Ajax\AccountPackageController;
use App\Http\Controllers\Ajax\AccountController as AccountAjax;
use App\Http\Controllers\Ajax\PeriodController;
use App\Http\Controllers\Ajax\CustomerGroupController;
use App\Http\Controllers\Ajax\CustomerTypeController;
use App\Http\Controllers\Ajax\HospitalController as HospitalAjax;
use App\Http\Controllers\Ajax\UserHospitalController;
use App\Http\Controllers\Ajax\DepartmentController as DepartmentAjax;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SupervisorController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\Admin\PhysicalController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\DiaryController;
use App\Http\Controllers\Admin\RenewalController;
use App\Http\Controllers\ExportController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(['middleware' => ['is_user_admin', 'is_user_customer', 'is_user_employee', 'is_user_hospital']], function () {
// Routes Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.user');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/change-password', [ProfileController::class, 'changePasswordIndex'])->name('profile.changePassword');
Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');
// });
Route::get('/management', [UserController::class, 'management'])->name('user.management');

Route::middleware(['is_user_admin', 'permission'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

    // Routes for free design before
    Route::group(['prefix' => 'ajax'], function () {
        // Hợp đồng
        Route::get('/contract/list', [ContractController::class, 'index'])->name('ajax.contract.index');
        Route::post('/contract/create', [ContractController::class, 'create'])->name('ajax.contract.create');
        Route::post('/contract/delete', [ContractController::class, 'delete'])->name('ajax.contract.delete');
        Route::put('/contract/update', [ContractController::class, 'update'])->name('ajax.contract.update');

        // Công ty
        Route::get('/company/list', [CompanyController::class, 'index'])->name('ajax.company.index');
        Route::post('/company/create', [CompanyController::class, 'create'])->name('ajax.company.create');
        Route::post('/company/delete', [CompanyController::class, 'delete'])->name('ajax.company.delete');
        Route::put('/company/update', [CompanyController::class, 'update'])->name('ajax.company.update');

        // Niên hạn
        Route::get('/period/list', [PeriodController::class, 'index'])->name('ajax.period.index');
        Route::post('/period/create', [PeriodController::class, 'create'])->name('ajax.period.create');
        Route::post('/period/delete', [PeriodController::class, 'delete'])->name('ajax.period.delete');
        Route::put('/period/update', [PeriodController::class, 'update'])->name('ajax.period.update');

        // Gói bảo hiểm
        Route::post('/account-package/create', [AccountPackageController::class, 'create'])->name('ajax.account-package.create');
        Route::post('/account-package/delete', [AccountPackageController::class, 'delete'])->name('ajax.account-package.delete');
        Route::put('/account-package/update', [AccountPackageController::class, 'update'])->name('ajax.account-package.update');

        // Phân nhóm khách hàng theo bệnh viện
        Route::post('/customer-group/create', [CustomerGroupController::class, 'create'])->name('ajax.customer-group.create');
        Route::post('/customer-group/delete', [CustomerGroupController::class, 'delete'])->name('ajax.customer-group.delete');
        Route::put('/customer-group/update', [CustomerGroupController::class, 'update'])->name('ajax.customer-group.update');

        // Phân loại khách hàng
        Route::post('/customer-type/create', [CustomerTypeController::class, 'create'])->name('ajax.customer-type.create');
        Route::post('/customer-type/delete', [CustomerTypeController::class, 'delete'])->name('ajax.customer-type.delete');
        Route::put('/customer-type/update', [CustomerTypeController::class, 'update'])->name('ajax.customer-type.update');

        //Bệnh viện
        Route::post('/hospital/create', [HospitalAjax::class, 'create'])->name('ajax.hospital-name.create');
        Route::post('/hospital/delete', [HospitalAjax::class, 'delete'])->name('ajax.hospital-name.delete');
        Route::put('/hospital/update', [HospitalAjax::class, 'update'])->name('ajax.hospital-name.update');

        Route::post('/hospital-user/create', [UserHospitalController::class, 'create'])->name('ajax.hospital-user.create');
        Route::post('/hospital-user/delete', [UserHospitalController::class, 'delete'])->name('ajax.hospital-user.delete');
        Route::put('/hospital-user/update', [UserHospitalController::class, 'update'])->name('ajax.hospital-user.update');

        //Phòng ban
        Route::post('/department/create', [DepartmentAjax::class, 'create'])->name('ajax.department.create');
        Route::post('/department/delete', [DepartmentAjax::class, 'delete'])->name('ajax.department.delete');
        Route::put('/department/update', [DepartmentAjax::class, 'update'])->name('ajax.department.update');

        //Tài khoản
        Route::put('/account/locked', [AccountAjax::class, 'locked'])->name('ajax.account.locked');
        Route::put('/account/unlocked', [AccountAjax::class, 'unlocked'])->name('ajax.account.unlocked');
    });

    // Routes for free design before
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/index', [UserController::class, 'index']);
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/edit/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/create', [UserController::class, 'store'])->name('user.store');
        Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });

    // Routes for system
    Route::get('/system', [SystemController::class, 'index'])->name('system.index');
    // Routes for contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.form');
    // Routes Account
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/account/insurance', [AccountController::class, 'insurance'])->name('account.insurance');
    Route::get('/account/insurance-expenses', [AccountController::class, 'expenses'])->name('account.expenses');
    Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');
    Route::post('/account/create', [AccountController::class, 'store'])->name('account.store');
    Route::get('/account/detail/{id}/{periodId}/{contractId}', [AccountController::class, 'detail'])->name('account.detail');
    Route::get('/account/edit/{id}', [AccountController::class, 'edit'])->name('account.edit');
    Route::post('/account/edit/{id}', [AccountController::class, 'update'])->name('account.update');

    // Routes for Renewal
    Route::get('/renewal', [RenewalController::class, 'index'])->name('renewal.index');
    Route::get('/renewal/export/{id}', [RenewalController::class, 'export'])->name('renewal.export');
    Route::post('/renewal/store', [RenewalController::class, 'store'])->name('renewal.store');

    Route::resource('role', RolesController::class);
    Route::resource('permission', PermissionsController::class);

    // Routes for Supervisor
    Route::get('/supervisor/insurance-expenses', [SupervisorController::class, 'insuranceExpenses'])->name('supervisor.insuranceExpenses');
    Route::get('/supervisor/account', [SupervisorController::class, 'account'])->name('supervisor.account');
    Route::get('/supervisor/account-online', [SupervisorController::class, 'accountOnline'])->name('supervisor.accountOnline');

    // Routes for Supervisor
    Route::get('/supervisor', [SupervisorController::class, 'index'])->name('supervisor.index');

    // Routes Physical
    Route::get('/physical', [PhysicalController::class, 'index'])->name('physical.index');
    Route::get('/physical-detail', [PhysicalController::class, 'detail'])->name('physical.detail');
    Route::get('/physical-periodic', [PhysicalController::class, 'periodic'])->name('physical.periodic');

    // Routes Department
    Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');
    Route::post('/department/store', 'DepartmentController@store')->name('department.store');
    Route::put('/department/update/{id}', 'DepartmentController@update')->name('department.update');
    Route::delete('/department/delete/{id}', 'DepartmentController@destroy')->name('department.delete');

    // Routes Hospital
    Route::get('/hospital', [HospitalController::class, 'index'])->name('hospital.index');
    Route::get('/health-report', [HospitalController::class, 'healthReport'])->name('healthReport.index');

    // Routes Revenue
    Route::get('/revenue/general-insurance', [RevenueController::class, 'generalInsurance'])->name('revenue.generalInsurance');
    Route::get('/revenue/detail-report', [RevenueController::class, 'detailReport'])->name('revenue.detailReport');
    Route::get('/revenue/hospital', [RevenueController::class, 'reportByHospital'])->name('revenue.reportByHospital');
    Route::get('/revenue/content', [RevenueController::class, 'reportByContent'])->name('revenue.reportByContent');
    Route::get('/revenue/health', [RevenueController::class, 'reportByHealth'])->name('revenue.reportByHealth');
    Route::get('/revenue/account', [RevenueController::class, 'reportByAccount'])->name('revenue.reportByAccount');
    // Routes Diary
    Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index');
    
    // Routes Export 
    Route::get('/export/account', [ExportController::class, 'exportAccountList'])->name('export.accountList');
});

// Route for login page
Route::get('/', [LoginController::class, 'showLoginForm']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Route for forgot password page
Route::get('/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Routes for email verification
Route::get('/verify', [VerificationController::class, 'showVerifyForm'])->name('verify');
Route::post('/verify', [VerificationController::class, 'verify']);
Route::get('/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::get('/resend-verification', [VerificationController::class, 'resend'])->name('verification.resend');
