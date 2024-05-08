<?php

use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\CategoryLivestockAdminController;
use App\Http\Controllers\Admin\CustomerAccountController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\PartnerAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\ReviewAdminController;
use App\Http\Controllers\Admin\TestimonialAdminController;
use App\Http\Controllers\Admin\TypeLivestockAdminController;
use App\Http\Controllers\Api\AIController;
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
use App\Http\Controllers\Admin\CategoryProductAdminController;
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
use App\Http\Controllers\Customer\RegisterCustomerController;
use App\Http\Controllers\Customer\VerificationController;
use App\Http\Controllers\Partner\AccountPartnerController;
use App\Http\Controllers\Partner\AuthPartnerController;
use App\Http\Controllers\Partner\DashboardPartnerController;
use App\Http\Controllers\Partner\FarmPartnerController;
use App\Http\Controllers\Partner\OrderPartnerController;
use App\Http\Controllers\Partner\PagePartnerController;
use App\Http\Controllers\Partner\SubmissionController;
use App\Http\Controllers\Partner\TestimonialPartnerController;
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
Route::get('/market/nearest', [AIController::class, 'nearest_view'])->name('homepage.market.nearest');
Route::get('verify-email/{id}/{hash}', [RegisterCustomerController::class, 'show'])
        ->middleware(['throttle:6,1'])
        ->name('verification.verify');
// route partner for submission
Route::get('partner/submission', [SubmissionController::class, 'submission'])->name('partner.submission');

// route customer google auth
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('customer.google');
Route::get('/login/google/callback', [GoogleSocialiteController::class, 'handleCallback']);
Route::get('customer/register', [RegisterCustomerController::class, 'index'])
    ->name('register.customer');

Route::post('customer/register/account', [RegisterCustomerController::class, 'store'])
    ->name('register.customer.account');    

Route::middleware('guest')->group(function () {
    /**
     * Register Customer
     */
    
    
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);


    /**
     * How breeze send new verif password
     */

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');


    /**
     * Ending of breeze send new verif passowrd
     */

    Route::get('admin/login', [AuthAdminController::class, 'index'])
        ->name('admin.login');
    Route::post('admin/login', [AuthAdminController::class, 'store']);
    
    // route for partner
    Route::get('partner/login', [AuthPartnerController::class, 'index'])->name('partner.login');
    Route::post('partner/login', [AuthPartnerController::class, 'login'])->name('partner.login.store');

    // route for customer

});

Route::middleware('auth')->group(function () {
    Route::get('customer/login', [AuthCustomerController::class, 'index'])->name('customer.login');
    Route::get('customer/register', [AuthCustomerController::class, 'register_view'])->name('customer.register');
    Route::post('customer/login', [AuthCustomerController::class, 'login']);
    // Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
    //     ->name('verification.notice');

    Route::get('customer/verify-email', [RegisterCustomerController::class, 'verify_email'])->name('customer.verify.email');

    

    // Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    // ->middleware(['signed', 'throttle:6,1'])
    // ->name('verification.verify');

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

    // route admin for categoryproducts
    Route::get('admin/category', [CategoryProductAdminController::class, 'list'])->name('admin.category.list');
    Route::get('admin/category/add', [CategoryProductAdminController::class, 'add'])->name('admin.category.add');
    Route::post('admin/category/create', [CategoryProductAdminController::class, 'store'])->name('admin.category.store');
    Route::get('admin/category/edit/{slug_kategori_product}', [CategoryProductAdminController::class, 'show'])->name('admin.category.edit');
    Route::put('admin/category/update/{slug_kategori_product}', [CategoryProductAdminController::class, 'update'])->name('admin.category.update');
    Route::delete('admin/category/delete/{slug_kategori_product}', [CategoryProductAdminController::class, 'destroy'])->name('admin.category.destroy');

    // route admin for typelivestock
    Route::get('admin/typelivestock', [TypeLivestockAdminController::class, 'index'])->name('admin.typelivestock.list');
    Route::get('admin/typelivestock/add', [TypeLivestockAdminController::class, 'create'])->name('admin.typelivestock.create');
    Route::post('admin/typelivestock/create', [TypeLivestockAdminController::class, 'store'])->name('admin.typelivestock.add');
    Route::get('admin/typelivestock/edit/{slug_typelivestocks}', [TypeLivestockAdminController::class, 'show'])->name('admin.typelivestock.edit');
    Route::put('admin/typelivestock/update/{slug_typelivestocks}', [TypeLivestockAdminController::class, 'update'])->name('admin.typelivestock.update');
    Route::delete('admin/typelivestock/delete/{slug_typelivestocks}', [TypeLivestockAdminController::class, 'destroy'])->name('admin.typelivestock.destroy');
    
    // route admin for typelivestock
    Route::get('admin/categorylivestock', [CategoryLivestockAdminController::class, 'list'])->name('admin.categorylivestock.list');
    Route::get('admin/categorylivestock/add', [CategoryLivestockAdminController::class, 'add'])->name('admin.categorylivestock.add');
    Route::post('admin/categorylivestock/create', [CategoryLivestockAdminController::class, 'store'])->name('admin.categorylivestock.store');
    Route::get('admin/categorylivestock/edit/{slug}', [CategoryLivestockAdminController::class, 'show'])->name('admin.categorylivestock.show');
    Route::put('admin/categorylivestock/update/{slug}', [CategoryLivestockAdminController::class, 'update'])->name('admin.categorylivestock.update');
    Route::delete('admin/categorylivestock/delete/{slug}', [CategoryLivestockAdminController::class, 'destroy'])->name('admin.categorylivestock.destroy');

    // route admin for get all product
    Route::get('admin/product', [ProductAdminController::class, 'index'])->name('admin.product.list');
    Route::get('admin/product/show/{slug_product}', [ProductAdminController::class, 'show'])->name('admin.product.show');
    Route::put('admin/products/status/{slug_product}', [ProductAdminController::class, 'status_handling'])->name('admin.product.status');

    // route admin for partner
    Route::get('admin/partner', [PartnerAdminController::class, 'list'])->name('admin.partner');
    Route::get('admin/partner/show/{id}', [PartnerAdminController::class, 'show'])->name('admin.partner.show');
    Route::get('admin/partner/submission', [PartnerAdminController::class, 'submission'])->name('admin.partner.from.submission');
    Route::get('admin/partner/verified', [PartnerAdminController::class, 'verified'])->name('admin.partner.from.verified');
    Route::put('admin/partner/handle_status/{id}', [PartnerAdminController::class, 'handle_status'])->name('admin.partner.from.handle_status');

    // route admin for testimoni
    Route::get('admin/testimoni', [TestimonialAdminController::class, 'list'])->name('admin.testimoni.list');
    Route::delete('admin/testimoni/delete/{id}', [TestimonialAdminController::class, 'destroy'])->name('admin.testimoni.destroy');
    Route::get('admin/testimoni/show/{id}', [TestimonialAdminController::class, 'show'])->name('admin.testimoni.show');

    // route admin for review
    Route::get('admin/review', [ReviewAdminController::class, 'list'])->name('admin.review.list');
    Route::delete('admin/review/destroy/{id}', [ReviewAdminController::class, 'destroy'])->name('admin.review.destroy');

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
    Route::put('admin/account/customer/status/{id}', [CustomerAccountController::class, 'status_handling'])->name('admin.customer.status');

    /**
     * Logout admin
     */
    Route::get('admin/logout', [AuthAdminController::class, 'destroy'])->name('admin.logout');
});

Route::middleware(['auth', 'role:Pelanggan', 'verified'])->group(function () {
    
    Route::get('personal/account', [DashboardCustomerController::class, 'index'])->name('customer.account');

    // route customer for account
    Route::get('personal/account/edit', [DashboardCustomerController::class, 'account'])->name('customer.account.edit');
    Route::get('personal/account/information', [DashboardCustomerController::class, 'information'])->name('customer.account.information');
    Route::get('personal/account/address', [DashboardCustomerController::class, 'address'])->name('customer.account.address');
    Route::get('customer/logout', [AuthCustomerController::class, 'logout'])->name('customer.logout');
});

Route::middleware(['auth', 'role:Partner'])->group(function () {
    Route::get('partner/dashboard', [DashboardPartnerController::class, 'index'])->name('partner.dashboard');
    Route::get('partner/account', [AccountPartnerController::class, 'index'])->name('partner.account');
    Route::get('partner/account/edit', [AccountPartnerController::class, 'account_edit_view'])->name('partner.account.edit');
    Route::put('partner/account/update', [AccountPartnerController::class, 'update_account'])->name('partner.account.update');
    Route::get('partner/account/information', [AccountPartnerController::class, 'information_view'])->name('partner.account.information');
    Route::put('partner/account/information/update', [AccountPartnerController::class, 'update_information'])->name('partner.account.information.update');
    Route::get('partner/account/address', [AccountPartnerController::class, 'address_view'])->name('partner.account.address');
    Route::put('partner/account/address/update', [AccountPartnerController::class, 'update_address'])->name('partner.account.address.update');
    Route::get('partner/account/rekening', [AccountPartnerController::class, 'rekening_view'])->name('partner.account.rekening');

    // route partner for product
    Route::get('partner/product', [PagePartnerController::class, 'product_index'])->name('partner.product.list');
    Route::get('partner/product/add', [PagePartnerController::class, 'product_create'])->name('partner.product.add');
    Route::get('partner/product/{slug_product}/edit', [PagePartnerController::class, 'product_edit'])->name('partner.product.edit');

    // route partner for farm
    Route::get('partner/farm', [FarmPartnerController::class, 'list'])->name('partner.farm.list');
    Route::get('partner/farm/add', [FarmPartnerController::class, 'create'])->name('partner.farm.create');
    Route::post('partner/farm/add', [FarmPartnerController::class, 'store'])->name('partner.farm.store');
    Route::get('partner/farm/edit/{slug_farm}', [FarmPartnerController::class, 'update'])->name('partner.farm.update');
    Route::put('partner/farm/update/{slug_farm}', [FarmPartnerController::class, 'edit'])->name('partner.farm.edit');
    Route::delete('partner/farm/destroy/{slug_farm}', [FarmPartnerController::class, 'destroy'])->name('partner.farm.destroy');

    // route partner for testimonial
    Route::get('partner/testimonial', [TestimonialPartnerController::class, 'list'])->name('partner.testimonial.list');
    Route::get('partner/testimonial/show/{slug_testimonial}', [TestimonialPartnerController::class, 'show'])->name('partner.testimonial.show');
    Route::get('partner/testimonial/reply/{id}', [PagePartnerController::class, 'testimonial_reply'])->name('partner.testimonial.reply');

    // route partner for order
    Route::get('partner/order', [OrderPartnerController::class, 'order'])->name('partner.order.master');
    Route::get('partner/order/new', [OrderPartnerController::class, 'order_new_view'])->name('partner.order.new');
    Route::get('partner/order/confirmed', [OrderPartnerController::class, 'order_confirmed_view'])->name('partner.order.confirmed');
    Route::get('partner/order/packed', [OrderPartnerController::class, 'order_packed_view'])->name('partner.order.packed');
    Route::get('partner/order/sent', [OrderPartnerController::class, 'order_sent_view'])->name('partner.order.sent');
    Route::get('partner/order/accepted', [OrderPartnerController::class, 'order_accepted_view'])->name('partner.order.accepted');
    Route::get('partner/order/end', [OrderPartnerController::class, 'order_end_view'])->name('partner.order.end');

    /**
     * Route for handling status
     */
    Route::put('partner/confirm/order/new/{id}', [OrderPartnerController::class, 'status_new_to_confirm'])->name('partner.confirm.status.order.new');
    Route::put('partner/confirm/order/confirm/{id}', [OrderPartnerController::class, 'status_confirm_to_packed'])->name('partner.confirm.status.order.confirmed');
    Route::put('partner/confirm/order/packed/{id}', [OrderPartnerController::class, 'status_packed_to_sent'])->name('partner.confirm.status.order.packed');

    // route partner for report
    Route::get('partner/report', [PagePartnerController::class, 'report'])->name('partner.report.list');
    Route::get('partner/report/{id}', [PagePartnerController::class, 'report_detail'])->name('partner.report.detail');

    Route::get('partner/logout', [AuthPartnerController::class, 'logout'])->name('partner.logout');
});
