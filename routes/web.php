<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\Partner\AuthPartnerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Customer\AuthCustomerController;
use App\Http\Controllers\Customer\DashboardCustomerController;
use App\Http\Controllers\Partner\DashboardPartnerController;
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

Route::get('/', function () {
    return view('welcome');
});


// route for admin
Route::get('admin/login', [AuthController::class, 'index'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login']);
Route::get('admin/logout', [AuthController::class, 'logout']);

// route for partner
Route::get('partner/login', [AuthPartnerController::class, 'index'])->name('partner.login');
Route::post('partner/login', [AuthPartnerController::class, 'login']);
Route::get('partner/logout', [AuthPartnerController::class, 'logout']);

// route for customer
Route::get('customer/login', [AuthCustomerController::class, 'index'])->name('customer.login');
Route::post('customer/login', [AuthCustomerController::class, 'login']);
Route::get('customer/logout', [AuthCustomerController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index']);
    Route::get('partner/dashboard', [DashboardPartnerController::class, 'index']);
    Route::get('customer/dashboard', [DashboardCustomerController::class, 'index']);

    // route for category
    Route::get('admin/category', [CategoryProductController::class, 'list'])->name('admin.category.list');
});
