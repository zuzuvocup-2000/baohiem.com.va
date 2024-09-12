<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DiaryController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\InsuranceExpensesController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\PhysicalController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RenewalController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\SupervisorController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ExportController;
use Illuminate\Support\Facades\Route;

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

// Chỉ tài khoản khách hàng
Route::group(['middleware' => ['check.any.guard:isUserCustomer']], function () {});

// Chỉ tài khoản bệnh viện
Route::group(['middleware' => ['check.any.guard:isUserHospital']], function () {});

// Chỉ tài khoản admin
Route::group(['middleware' => ['check.any.guard:isUserAdmin']], function () {});

// Chỉ tài khoản nhân sự
Route::group(['middleware' => ['check.any.guard:isUserStaff']], function () {});

// Tài khoản khách hàng và bệnh viện
Route::group(['middleware' => ['check.any.guard:isUserCustomer,isUserHospital']], function () {});

// Tài khoản khách hàng và admin
Route::group(['middleware' => ['check.any.guard:isUserCustomer,isUserAdmin']], function () {});

// Tài khoản khách hàng và nhân sự
Route::group(['middleware' => ['check.any.guard:isUserCustomer,isUserStaff']], function () {});

// Tài khoản bệnh viện và admin
Route::group(['middleware' => ['check.any.guard:isUserHospital,isUserAdmin']], function () {});

// Tài khoản bệnh viện và nhân sự
Route::group(['middleware' => ['check.any.guard:isUserHospital,isUserStaff']], function () {});

// Tài khoản admin và nhân sự
Route::group(['middleware' => ['check.any.guard:isUserAdmin,isUserStaff']], function () {});

// Tài khoản khách hàng, bệnh viện, admin và nhân sự
Route::group(['middleware' => ['check.any.guard:isUserCustomer,isUserHospital,isUserAdmin,isUserStaff']], function () {});


// Route::group(['middleware' => ['is_user_admin', 'is_user_customer', 'is_user_employee', 'is_user_hospital']], function () {
// Routes Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.user');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/change-password', [ProfileController::class, 'changePasswordIndex'])->name('profile.changePassword');
Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');
// });
// dùng chung 4 tài khoản
Route::group(['middleware' => ['check.any.guard:isUserAdmin,isUserStaff,isUserCustomer,isUserHospital']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
});
// chỉ tài khoản admin
Route::group(['middleware' => ['check.any.guard:isUserAdmin']], function () {

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

    // Routes Account
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/account/insurance', [AccountController::class, 'insurance'])->name('account.insurance');
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

    // Routes for Insurance
    Route::controller(InsuranceExpensesController::class)->group(function () {
        Route::get('/insurance-expenses/index', 'index')->name('insuranceExpenses.index');
        Route::get('/insurance-expenses/detail', 'detail')->name('insuranceExpenses.detail');
        Route::get('/insurance-expenses/create', 'create')->name('insuranceExpenses.create');
        Route::get('/insurance-expenses/update', 'update')->name('insuranceExpenses.update');
        Route::get('/insurance-expenses/day', 'insuranceDay')->name('insuranceExpenses.day');
        Route::get('/insurance-expenses/hospital', 'insuranceHospital')->name('insuranceExpenses.hospital');
        Route::get('/insurance-expenses/diary', 'insuranceDiary')->name('insuranceExpenses.diary');
        Route::post('/insurance-expenses/create', 'create')->name('insuranceExpenses.create');
        Route::put('/insurance-expenses/update', 'update')->name('insuranceExpenses.update');
    });

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
    Route::get(
        '/health-report',
        [PhysicalController::class, 'healthReport']
    )->name('healthReport.index');

    // Routes Department
    Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');
    Route::post('/department/store', 'DepartmentController@store')->name('department.store');
    Route::put('/department/update/{id}', 'DepartmentController@update')->name('department.update');
    Route::delete('/department/delete/{id}', 'DepartmentController@destroy')->name('department.delete');

    // Routes Position
    Route::get('/position', [PositionController::class, 'index'])->name('position.index');
    Route::post('/position/store', 'PositionController@store')->name('position.store');
    Route::put('/position/update/{id}', 'PositionController@update')->name('position.update');
    Route::delete('/position/delete/{id}', 'PositionController@destroy')->name('position.delete');

    // Routes Hospital
    Route::get('/hospital', [HospitalController::class, 'index'])->name('hospital.index');

    // Routes Revenue
    Route::get('/revenue/general-insurance', [RevenueController::class, 'generalInsurance'])->name('revenue.generalInsurance');
    Route::get('/revenue/detail-report', [RevenueController::class, 'detailReport'])->name('revenue.detailReport');
    Route::get('/revenue/hospital', [RevenueController::class, 'reportByHospital'])->name('revenue.reportByHospital');
    Route::get('/revenue/content', [RevenueController::class, 'reportByContent'])->name('revenue.reportByContent');
    Route::get('/revenue/health', [RevenueController::class, 'reportByHealth'])->name('revenue.reportByHealth');
    Route::get('/revenue/account', [RevenueController::class, 'reportByAccount'])->name('revenue.reportByAccount');
    // Routes Diary
    Route::get('/diary/employee', [DiaryController::class, 'employeeDiary'])->name('diary.employee');
    Route::get('/diary/hospital', [DiaryController::class, 'hospitalDiary'])->name('diary.hospital');
    Route::get('/diary/customer', [DiaryController::class, 'customerDiary'])->name('diary.customer');
    // Routes Export
    Route::get('/export/account', [ExportController::class, 'exportAccountList'])->name('export.accountList');

    // Routes for Insurance
    Route::get('/insurance-expenses/check-period', [InsuranceExpensesController::class, 'checkPeriod'])->name('insuranceExpenses.checkPeriod');
});
// chỉ tài khoản nhân viên
Route::group(['middleware' => ['check.any.guard:isUserAdmin']], function () {
    Route::get('/employee/list', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/employee/create', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/employee/edit/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');
});
// chỉ tài khoản khách hàng
Route::group(['middleware' => ['check.any.guard:isUserCustomer']], function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.form');
});
// chỉ tài khoản bệnh viện
Route::group(['middleware' => ['check.any.guard:isUserHospital']], function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.form');
});
Route::get('/management', [UserController::class, 'management'])->name('user.management');

// Route for login page
Route::get('/', [LoginController::class, 'showLoginForm']);

Route::get('login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Route for forgot password page
Route::get('/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Routes for email verification
Route::get('/verify', [VerificationController::class, 'showVerifyForm'])->name('verify');
Route::post('/verify', [VerificationController::class, 'verify']);
Route::get('/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::get('/resend-verification', [VerificationController::class, 'resend'])->name('verification.resend');
