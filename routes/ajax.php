<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ajax\AccountController as AccountAjax;
use App\Http\Controllers\Ajax\AccountPackageController;
use App\Http\Controllers\Ajax\CompanyController;
use App\Http\Controllers\Ajax\ContractController;
use App\Http\Controllers\Ajax\CustomerGroupController;
use App\Http\Controllers\Ajax\CustomerTypeController;
use App\Http\Controllers\Ajax\DepartmentController as DepartmentAjax;
use App\Http\Controllers\Ajax\VaccinationController;
use App\Http\Controllers\Ajax\PositionController as PositionAjax;
use App\Http\Controllers\Ajax\HospitalContractController;
use App\Http\Controllers\Ajax\HospitalController as HospitalAjax;
use App\Http\Controllers\Ajax\InsuranceExpensesController as AjaxInsuranceExpensesController;
use App\Http\Controllers\Ajax\PaymentTypeController;
use App\Http\Controllers\Ajax\PeriodController;
use App\Http\Controllers\Ajax\SupervisorController as SupervisorAjax;
use App\Http\Controllers\Ajax\UserHospitalController;

// Chỉ tài khoản khách hàng
Route::group(['middleware' => ['check.any.guard:isUserCustomer']], function () {});

// Chỉ tài khoản bệnh viện
Route::group(['middleware' => ['check.any.guard:isUserHospital']], function () {});

// Chỉ tài khoản admin
Route::group(['middleware' => ['check.any.guard:isUserAdmin']], function () {
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

    // Chi bảo hiểm
    Route::get('/insurance-expenses/detail/{id}', [AjaxInsuranceExpensesController::class, 'detail'])->name('ajax.insurance-expenses.detail');

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

    Route::post('/hospital-contract/create', [HospitalContractController::class, 'create'])->name('ajax.hospital-contract.create');
    Route::post('/hospital-contract/delete', [HospitalContractController::class, 'delete'])->name('ajax.hospital-contract.delete');
    Route::put('/hospital-contract/update', [HospitalContractController::class, 'update'])->name('ajax.hospital-contract.update');
    //Phòng ban
    Route::post('/department/create', [DepartmentAjax::class, 'create'])->name('ajax.department.create');
    Route::post('/department/delete', [DepartmentAjax::class, 'delete'])->name('ajax.department.delete');
    Route::put('/department/update', [DepartmentAjax::class, 'update'])->name('ajax.department.update');

    // Vị trí chức vụ
    Route::post('/position/create', [PositionAjax::class, 'create'])->name('ajax.position.create');
    Route::post('/position/delete', [PositionAjax::class, 'delete'])->name('ajax.position.delete');
    Route::put('/position/update', [PositionAjax::class, 'update'])->name('ajax.position.update');

    //Tài khoản
    Route::put('/account/locked', [AccountAjax::class, 'locked'])->name('ajax.account.locked');
    Route::put('/account/unlocked', [AccountAjax::class, 'unlocked'])->name('ajax.account.unlocked');

    //Supervisor
    Route::put('/supervisor/recover', [SupervisorAjax::class, 'recover'])->name('ajax.supervisor.recover');
    Route::put('/supervisor/recover-account', [SupervisorAjax::class, 'recoverAccount'])->name('ajax.supervisor.recover-account');

    // Vaccination
    Route::get('/vaccination/list', [VaccinationController::class, 'list'])->name('ajax.vaccination.list');

    // Payment Type
    Route::post('/payment-type/add', [PaymentTypeController::class, 'add'])->name('paymentType.add');
    Route::post('/payment-type/edit', [PaymentTypeController::class, 'edit'])->name('paymentType.edit');
    Route::post('/payment-type/delete', [PaymentTypeController::class, 'delete'])->name('paymentType.delete');
});

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
