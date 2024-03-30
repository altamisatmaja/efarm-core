<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryLivestockController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Partner\AuthPartnerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Customer\AuthCustomerController;
use App\Http\Controllers\Customer\DashboardCustomerController;
use App\Http\Controllers\Partner\DashboardPartnerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TypeLivestockController;
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
    return view('homepage');
});
// Route::get('/home', function () {
//     return view('homepage');
// });


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
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('partner/dashboard', [DashboardPartnerController::class, 'index']);
    Route::get('customer/dashboard', [DashboardCustomerController::class, 'index']);

    // route admin for category
    Route::get('admin/category', [CategoryProductController::class, 'list'])->name('admin.category.list');

    // route admin for typelivestock
    Route::get('admin/typelivestock', [TypeLivestockController::class, 'list'])->name('admin.typelivestock.list');
    
    // route admin for typelivestock
    Route::get('admin/categorylivestock', [CategoryLivestockController::class, 'list'])->name('admin.categorylivestock.list');
    
    // route admin for product

    // route admin for get all product
    Route::get('admin/product', [ProductController::class, 'list'])->name('admin.product.list');
    Route::get('admin/product/edit/', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::get('admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');

    // route admin for partner
    Route::get('admin/partner', [PartnerController::class, 'list'])->name('admin.partner');

    // route admin for partner
    Route::get('admin/testimoni', [TestimonialController::class, 'list'])->name('admin.testimoni.list');
    
    // route admin for pesanan
    Route::get('admin/order', [OrderController::class, 'list'])->name('admin.order.master');
    Route::get('admin/order/new', [OrderController::class, 'order_new_view'])->name('admin.order.new');
    Route::get('admin/order/confirmed', [OrderController::class, 'order_confirmed_view'])->name('admin.order.confirmed');
    Route::get('admin/order/packed', [OrderController::class, 'order_packed_view'])->name('admin.order.packed');
    Route::get('admin/order/sent', [OrderController::class, 'order_sent_view'])->name('admin.order.sent');
    Route::get('admin/order/accepted', [OrderController::class, 'order_accepted_view'])->name('admin.order.accepted');
    Route::get('admin/order/end', [OrderController::class, 'order_end_view'])->name('admin.order.end');

    // route admin for report
    Route::get('report', [ReportController::class, 'index'])->name('admin.report.list');
    
    // route partner for product
    Route::get('partner/product', [ProductController::class, 'list'])->name('partner.product.list');

});
