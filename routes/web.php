<?php

use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\CustomerAccountController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Api\CategoryLivestockController;
use App\Http\Controllers\Api\CategoryProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\TypeLivestockController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Customer\AuthCustomerController;
use App\Http\Controllers\Customer\DashboardCustomerController;
use App\Http\Controllers\Customer\GoogleSocialiteController;
use App\Http\Controllers\Partner\AuthPartnerController;
use App\Http\Controllers\Partner\DashboardPartnerController;
use App\Http\Controllers\Partner\FarmPartnerController;
use App\Http\Controllers\Partner\PagePartnerController;
use App\Http\Controllers\Partner\SubmissionController;
use App\Http\Controllers\Web\PageWebController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageWebController::class, 'index']);
Route::get('/partner', [PageWebController::class, 'partner'])->name('homepage.partner');
Route::get('/about', [PageWebController::class, 'about'])->name('homepage.about');
Route::get('/market', [PageWebController::class, 'market'])->name('homepage.market');
Route::get('/market/buy', [PageWebController::class, 'buy'])->name('homepage.market.buy');
Route::get('/market/buy/{slug_kategori_product}', [PageWebController::class, 'farm'])->name('homepage.market.farm');
Route::get('/market/buy/{slug_kategori_product}/{slug_category_livestock}', [PageWebController::class, 'livestock'])->name('homepage.market.farm.livestock');
Route::get('/market/buy/{slug_kategori_product}/{slug_category_livestock}/{slug_product}', [PageWebController::class, 'product'])->name('homepage.market.farm.product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// route partner for submission
Route::get('partner/submission', [SubmissionController::class, 'submission'])->name('partner.submission');

// route customer google auth
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('customer.google');
Route::get('/login/google/callback', [GoogleSocialiteController::class, 'handleCallback']);

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');

    Route::get('admin/login', [AuthAdminController::class, 'index'])
        ->name('admin.login');
    Route::post('admin/login', [AuthAdminController::class, 'store']);
    Route::get('admin/logout', [AuthAdminController::class, 'logout']);

    // route for partner
    Route::get('partner/login', [AuthPartnerController::class, 'index'])->name('partner.login');
    Route::post('partner/login', [AuthPartnerController::class, 'login'])->name('partner.login.store');

    // route for customer
    Route::get('customer/login', [AuthCustomerController::class, 'index'])->name('customer.login');
    Route::get('customer/register', [AuthCustomerController::class, 'register_view'])->name('customer.register');
    Route::post('customer/login', [AuthCustomerController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::middleware(['auth', 'role:Admin'])->group(function () {
    // route dashboard admin
    Route::get('admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    // route admin for category
    Route::get('admin/category', [CategoryProductController::class, 'list'])->name('admin.category.list');

    // route admin for typelivestock
    Route::get('admin/typelivestock', [TypeLivestockController::class, 'list'])->name('admin.typelivestock.list');

    // route admin for typelivestock
    Route::get('admin/categorylivestock', [CategoryLivestockController::class, 'list'])->name('admin.categorylivestock.list');

    // route admin for get all product
    Route::get('admin/product', [ProductController::class, 'list'])->name('admin.product.list');
    Route::get('admin/product/edit/', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::get('admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');

    // route admin for partner
    Route::get('admin/partner', [PartnerController::class, 'list'])->name('admin.partner');
    Route::get('admin/partner/submission', [PartnerController::class, 'submission'])->name('admin.partner.submission');
    Route::get('admin/partner/unsubmission', [PartnerController::class, 'unsubmission'])->name('admin.partner.unsubmission');

    // route admin for testimoni
    Route::get('admin/testimoni', [TestimonialController::class, 'list'])->name('admin.testimoni.list');

    // route admin for review
    Route::get('admin/review', [ReviewController::class, 'list'])->name('admin.review.list');

    // route admin for pesanan
    Route::get('admin/order', [OrderController::class, 'list'])->name('admin.order.master');
    Route::get('admin/order/new', [OrderController::class, 'order_new_view'])->name('admin.order.new');
    Route::get('admin/order/confirmed', [OrderController::class, 'order_confirmed_view'])->name('admin.order.confirmed');
    Route::get('admin/order/packed', [OrderController::class, 'order_packed_view'])->name('admin.order.packed');
    Route::get('admin/order/sent', [OrderController::class, 'order_sent_view'])->name('admin.order.sent');
    Route::get('admin/order/accepted', [OrderController::class, 'order_accepted_view'])->name('admin.order.accepted');
    Route::get('admin/order/end', [OrderController::class, 'order_end_view'])->name('admin.order.end');

    // route admin for report
    Route::get('admin/report', [ReportController::class, 'index'])->name('admin.report.list');

    // route admin for payment
    Route::get('admin/payment', [PaymentController::class, 'list'])->name('admin.payment.list');

    // route admin for read account customer
    Route::get('admin/account/customer', [CustomerAccountController::class, 'index'])->name('admin.customer.account');
});

Route::middleware(['auth', 'role:Pelanggan'])->group(function () {
    Route::get('personal/account', [DashboardCustomerController::class, 'index']);

    // route customer for account
    Route::get('personal/account/edit', [DashboardCustomerController::class, 'account'])->name('customer.account.edit');
    Route::get('personal/account/information', [DashboardCustomerController::class, 'information'])->name('customer.account.information');
    Route::get('personal/account/address', [DashboardCustomerController::class, 'address'])->name('customer.account.address');
    Route::get('customer/logout', [AuthCustomerController::class, 'logout'])->name('customer.logout');
});

Route::middleware(['auth', 'role:Partner'])->group(function () {
    Route::get('partner/dashboard', [DashboardPartnerController::class, 'index'])->name('partner.dashboard');
    Route::get('partner/account', [PagePartnerController::class, 'account'])->name('partner.account');
    Route::get('partner/account/edit', [PagePartnerController::class, 'edit'])->name('partner.account.edit');
    Route::get('partner/account/information', [PagePartnerController::class, 'information'])->name('partner.account.information');
    Route::get('partner/account/address', [PagePartnerController::class, 'address'])->name('partner.account.address');
    Route::get('partner/account/rekening', [PagePartnerController::class, 'rekening'])->name('partner.account.rekening');

    // route partner for product
    Route::get('partner/product', [PagePartnerController::class, 'product_index'])->name('partner.product.list');
    Route::get('partner/product/add', [PagePartnerController::class, 'product_create'])->name('partner.product.add');
    Route::get('partner/product/{slug_product}/edit', [PagePartnerController::class, 'product_edit'])->name('partner.product.edit');

    // route partner for farm
    Route::get('partner/farm', [FarmPartnerController::class, 'list'])->name('partner.farm.list');
    Route::get('partner/farm/add', [PagePartnerController::class, 'add'])->name('partner.farm.add');
    Route::post('partner/farm/add', [PagePartnerController::class, 'store'])->name('partner.farm.store');
    Route::get('partner/farm/edit/{slug_farm}', [PagePartnerController::class, 'farm_edit'])->name('partner.farm.edit');
    Route::delete('partner/farm/destroy/{slug_farm}', [FarmPartnerController::class, 'destroy'])->name('partner.farm.destroy');

    // route partner for testimonial
    Route::get('partner/testimonial', [PagePartnerController::class, 'testimonial_index'])->name('partner.testimonial.list');
    Route::get('partner/testimonial/detail/{id}', [PagePartnerController::class, 'testimonial_show'])->name('partner.testimonial.detail');
    Route::get('partner/testimonial/reply/{id}', [PagePartnerController::class, 'testimonial_reply'])->name('partner.testimonial.reply');

    // route partner for order
    Route::get('partner/order', [PagePartnerController::class, 'order'])->name('partner.order.master');
    Route::get('partner/order/new', [PagePartnerController::class, 'order_new_view'])->name('partner.order.new');
    Route::get('partner/order/confirmed', [PagePartnerController::class, 'order_confirmed_view'])->name('partner.order.confirmed');
    Route::get('partner/order/packed', [PagePartnerController::class, 'order_packed_view'])->name('partner.order.packed');
    Route::get('partner/order/sent', [PagePartnerController::class, 'order_sent_view'])->name('partner.order.sent');
    Route::get('partner/order/accepted', [PagePartnerController::class, 'order_accepted_view'])->name('partner.order.accepted');
    Route::get('partner/order/end', [PagePartnerController::class, 'order_end_view'])->name('partner.order.end');
    Route::get('partner/order/end/{id}', [PagePartnerController::class, 'order_end_show_view'])->name('partner.order.end.show');

    // route partner for report
    Route::get('partner/report', [PagePartnerController::class, 'report'])->name('partner.report.list');
    Route::get('partner/report/{id}', [PagePartnerController::class, 'report_detail'])->name('partner.report.detail');

    Route::get('partner/logout', [AuthPartnerController::class, 'logout'])->name('partner.logout');
});
