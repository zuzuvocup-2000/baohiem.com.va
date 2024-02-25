<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\System\SystemController;
use App\Http\Controllers\ProfileController;

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

Route::middleware(['is_user_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Routes for free design before
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/index', [UserController::class, 'index']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user.store');

    // Routes for system
    Route::get('/system', [SystemController::class, 'index'])->name('system.index');

    // Routes Profiles
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.user');
    Route::get('/change-password', [ProfileController::class, 'changePasswordIndex'])->name('profile.changePassword');
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');
    // Routes Account
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');
    Route::post('/account/create', [AccountController::class, 'store'])->name('user.store');
    Route::get('/account/edit/{id}', [AccountController::class, 'edit'])->name('account.edit');
    Route::put('/account/edit/{id}', [AccountController::class, 'update'])->name('account.update');
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
