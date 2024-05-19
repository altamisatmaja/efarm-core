<?php

use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\CategoryLivestockAdminController;
use App\Http\Controllers\Admin\CategoryProductAdminController;
use App\Http\Controllers\Admin\CustomerAccountController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\PartnerAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\ReviewAdminController;
use App\Http\Controllers\Admin\TestimonialAdminController;
use App\Http\Controllers\Admin\TypeLivestockAdminController;
use App\Http\Controllers\Api\AIApiController;
use App\Http\Controllers\Customer\Account\AccountCustomerController;
use App\Http\Controllers\Customer\LacakCustomerController;
use App\Http\Controllers\Customer\ReviewCustomerController;
use App\Http\Controllers\Partner\ProductPartnerController;
use App\Http\Controllers\Partner\ReportPartnerController;
use App\Http\Controllers\Partner\TestimonialReplyPartnerController;
use App\Http\Controllers\Web\AIController;
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
use App\Http\Controllers\Customer\CheckOutController;
use App\Http\Controllers\Customer\DashboardCustomerController;
use App\Http\Controllers\Customer\GoogleSocialiteController;
use App\Http\Controllers\Customer\OrderCustomerController;
use App\Http\Controllers\Customer\RegisterCustomerController;
use App\Http\Controllers\Customer\VerificationController;
use App\Http\Controllers\Customer\CartCustomerController;
use App\Http\Controllers\Partner\AccountPartnerController;
use App\Http\Controllers\Partner\AuthPartnerController;
use App\Http\Controllers\Partner\DashboardPartnerController;
use App\Http\Controllers\Partner\FarmPartnerController;
use App\Http\Controllers\Partner\OrderPartnerController;
use App\Http\Controllers\Partner\PagePartnerController;
use App\Http\Controllers\Partner\SubmissionController;
use App\Http\Controllers\Partner\TestimonialPartnerController;
use App\Http\Controllers\Payment\TripayCallbackController;
use App\Http\Controllers\Web\LocationController;
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

Route::get('/ai', [AIController::class, 'index']);


/**
 * Route handling for Front End
 */
Route::get('/', [PageWebController::class, 'index']);
Route::get('/partner', [PageWebController::class, 'partner'])->name('homepage.partner');
Route::get('/tentang', [PageWebController::class, 'about'])->name('homepage.about');
Route::get('/layanan', [PageWebController::class, 'layanan'])->name('homepage.layanan');


/**
 * Route handling for Front End Market
 */

Route::get('/market', [PageWebController::class, 'market'])->name('homepage.market');
Route::get('/market/buy', [PageWebController::class, 'buy'])->name('homepage.market.buy');
Route::get('/market/buy/murah', [PageWebController::class, 'cheap'])->name('homepage.market.cheap');
Route::get('/market/buy/{slug}', [PageWebController::class, 'by_categorytypelivestocks'])->name('homepage.market.farm');
Route::get('/market/buy/kategori/{slug_kategori_product}', [PageWebController::class, 'category'])->name('homepage.market.category');
Route::get('/market/buy/{slug_kategori_product}/{slug_category_livestock}', [PageWebController::class, 'livestock'])->name('homepage.market.farm.livestock');
Route::get('/market/buy/{slug_kategori_product}/{slug_category_livestock}/{slug_product}', [PageWebController::class, 'product'])->name('homepage.market.farm.product');

/**
 * Route handling for AI
 */
Route::get('/market/nearest', [AIApiController::class, 'nearest_view'])->name('homepage.market.nearest');


/**
 * Route for verify Email
 */
Route::get('verify-email/{id}/{hash}', [RegisterCustomerController::class, 'show'])
    ->middleware(['throttle:6,1'])
    ->name('verification.verify');

/**
 * Route for submission partner
 */
Route::get('partner/submission', [SubmissionController::class, 'submission'])->name('partner.submission');
Route::get('verify-email/{id}/{hash}', [PartnerAdminController::class, 'verify'])
    ->middleware(['throttle:6,1'])
    ->name('verification.verify');

/**
 * Route for google login customer
 */
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('customer.google');
Route::get('/login/google/callback', [GoogleSocialiteController::class, 'handleCallback']);


/**
 * Route for customer Auth
 */
Route::post('customer/register/account', [RegisterCustomerController::class, 'store'])
    ->name('register.customer.account');
Route::post('partner/verify/account', [PartnerAdminController::class, 'verify'])
    ->name('partner.verify.account');

Route::middleware('guest')->group(function () {
    
    /**
     * Route for callback after payment gateway
     */
    Route::post('checkout/callback', [TripayCallbackController::class, 'handle']);

    /**
     * Route for register customer and verify
     */
    Route::get('customer/login', [AuthCustomerController::class, 'index'])->name('customer.login');
    Route::get('customer/register', [AuthCustomerController::class, 'register_view'])->name('customer.register');
    Route::post('customer/login', [AuthCustomerController::class, 'login']);
    Route::get('customer/verify-email/{id}', [RegisterCustomerController::class, 'verify_email'])->name('customer.verify.email');
    Route::put('customer/verify-email/success/{id}', [RegisterCustomerController::class, 'email_verified'])->name('customer.verify.success');

    /**
     * Laravel breeze
     */
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    /**
     * Breeze handling
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
     * Route for Login Admin
     */
    Route::get('admin/login', [AuthAdminController::class, 'index'])
        ->name('admin.login');
    Route::post('admin/login', [AuthAdminController::class, 'store']);

    /**
     * Route for Login Partner
     */
    Route::get('partner/login', [AuthPartnerController::class, 'index'])->name('partner.login');
    Route::post('partner/login', [AuthPartnerController::class, 'login'])->name('partner.login.store');
});

Route::middleware('auth')->group(function () {
    /**
     * Route for verify email handling
     */
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    /**
     * Route for confirm password
     */
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    /**
     * Route for confirm logout
     */
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});


/*
 * |--------------------------------------------------------------------------
 * | Admin Routes
 * |--------------------------------------------------------------------------
 * |
 * | Semua routes untuk admin
 * |
 */ 


Route::middleware(['auth', 'role:Admin'])->group(function () {
    
    /**
     * Route for dashboard admin
     */
    Route::get('admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    /**
     * Route for categoryproduct admin
     */
    Route::get('admin/category', [CategoryProductAdminController::class, 'list'])->name('admin.category.list');
    Route::get('admin/category/add', [CategoryProductAdminController::class, 'add'])->name('admin.category.add');
    Route::post('admin/category/create', [CategoryProductAdminController::class, 'store'])->name('admin.category.store');
    Route::get('admin/category/edit/{slug_kategori_product}', [CategoryProductAdminController::class, 'show'])->name('admin.category.edit');
    Route::put('admin/category/update/{slug_kategori_product}', [CategoryProductAdminController::class, 'update'])->name('admin.category.update');
    Route::delete('admin/category/delete/{slug_kategori_product}', [CategoryProductAdminController::class, 'destroy'])->name('admin.category.destroy');

    /**
     * Route for typelivestock admin
     */
    Route::get('admin/typelivestock', [TypeLivestockAdminController::class, 'index'])->name('admin.typelivestock.list');
    Route::get('admin/typelivestock/add', [TypeLivestockAdminController::class, 'create'])->name('admin.typelivestock.create');
    Route::post('admin/typelivestock/create', [TypeLivestockAdminController::class, 'store'])->name('admin.typelivestock.add');
    Route::get('admin/typelivestock/edit/{slug_typelivestocks}', [TypeLivestockAdminController::class, 'show'])->name('admin.typelivestock.edit');
    Route::put('admin/typelivestock/update/{slug_typelivestocks}', [TypeLivestockAdminController::class, 'update'])->name('admin.typelivestock.update');
    Route::delete('admin/typelivestock/delete/{slug_typelivestocks}', [TypeLivestockAdminController::class, 'destroy'])->name('admin.typelivestock.destroy');

    /**
     * Route for categorytypelivestock admin
     */
    Route::get('admin/categorylivestock', [CategoryLivestockAdminController::class, 'list'])->name('admin.categorylivestock.list');
    Route::get('admin/categorylivestock/add', [CategoryLivestockAdminController::class, 'add'])->name('admin.categorylivestock.add');
    Route::post('admin/categorylivestock/create', [CategoryLivestockAdminController::class, 'store'])->name('admin.categorylivestock.store');
    Route::get('admin/categorylivestock/edit/{slug}', [CategoryLivestockAdminController::class, 'show'])->name('admin.categorylivestock.show');
    Route::put('admin/categorylivestock/update/{slug}', [CategoryLivestockAdminController::class, 'update'])->name('admin.categorylivestock.update');
    Route::delete('admin/categorylivestock/delete/{slug}', [CategoryLivestockAdminController::class, 'destroy'])->name('admin.categorylivestock.destroy');

    /**
     * Route for product admin
     */
    Route::get('admin/product', [ProductAdminController::class, 'index'])->name('admin.product.list');
    Route::get('admin/product/show/{slug_product}', [ProductAdminController::class, 'show'])->name('admin.product.show');
    Route::put('admin/products/status/{slug_product}', [ProductAdminController::class, 'status_handling'])->name('admin.product.status');

    /**
     * Route for partner admin
     */
    Route::get('admin/partner', [PartnerAdminController::class, 'list'])->name('admin.partner');
    Route::get('admin/partner/show/{id}', [PartnerAdminController::class, 'show'])->name('admin.partner.show');
    Route::get('admin/partner/submission', [PartnerAdminController::class, 'submission'])->name('admin.partner.from.submission');
    Route::get('admin/partner/verified', [PartnerAdminController::class, 'verified'])->name('admin.partner.from.verified');
    Route::put('admin/partner/handle_status/{id}', [PartnerAdminController::class, 'handle_status'])->name('admin.partner.from.handle_status');

    /**
     * Route for testimonial admin
     */
    Route::get('admin/testimoni', [TestimonialAdminController::class, 'list'])->name('admin.testimoni.list');
    Route::delete('admin/testimoni/delete/{id}', [TestimonialAdminController::class, 'destroy'])->name('admin.testimoni.destroy');
    Route::get('admin/testimoni/show/{id}', [TestimonialAdminController::class, 'show'])->name('admin.testimoni.show');

    /**
     * Route for review or rating admin
     */
    Route::get('admin/review', [ReviewAdminController::class, 'list'])->name('admin.review.list');
    Route::delete('admin/review/destroy/{id}', [ReviewAdminController::class, 'destroy'])->name('admin.review.destroy');

    /**
     * Route for order admin
     */
    Route::get('admin/order', [OrderController::class, 'list'])->name('admin.order.master');
    Route::get('admin/order/new', [OrderController::class, 'order_new_view'])->name('admin.order.new');
    Route::get('admin/order/confirmed', [OrderController::class, 'order_confirmed_view'])->name('admin.order.confirmed');
    Route::get('admin/order/packed', [OrderController::class, 'order_packed_view'])->name('admin.order.packed');
    Route::get('admin/order/sent', [OrderController::class, 'order_sent_view'])->name('admin.order.sent');
    Route::get('admin/order/accepted', [OrderController::class, 'order_accepted_view'])->name('admin.order.accepted');
    Route::get('admin/order/end', [OrderController::class, 'order_end_view'])->name('admin.order.end');

    /**
     * Route for laporan admin
     */
    Route::get('admin/report', [ReportController::class, 'index'])->name('admin.report.list');

    /**
     * Route for payment admin
     */
    Route::get('admin/payment', [PaymentController::class, 'list'])->name('admin.payment.list');

    /**
     * Route for account admin
     */
    Route::get('admin/account/customer', [CustomerAccountController::class, 'index'])->name('admin.customer.account');
    Route::put('admin/account/customer/status/{id}', [CustomerAccountController::class, 'status_handling'])->name('admin.customer.status');

    /**
     * Route for logout Admin 
     */
    Route::get('admin/logout', [AuthAdminController::class, 'destroy'])->name('admin.logout');
});



/*
 * |--------------------------------------------------------------------------
 * | Pelanggan Routes
 * |--------------------------------------------------------------------------
 * |
 * | Semua routes untuk pelanggan
 * |
 */ 

 /**
 * Route for checkout customer
 */
Route::get('checkout/{slug_product}', [CheckOutController::class, 'index'])->name('customer.checkout');

Route::middleware(['auth', 'role:Pelanggan', 'verified'])->group(function () {
    /**
     * Route for account customer
     */
    Route::get('personal', [DashboardCustomerController::class, 'index'])->name('customer.dashboard');

    Route::get('personal/account', [AccountCustomerController::class, 'index'])->name('customer.account.detail');
    Route::get('personal/account/detail', [AccountCustomerController::class, 'account'])->name('customer.account.detail');
    Route::get('personal/account/information', [AccountCustomerController::class, 'information'])->name('customer.account.information');
    Route::get('personal/account/address', [AccountCustomerController::class, 'address'])->name('customer.account.address');

    Route::get('personal/account/detail/update/', [AccountCustomerController::class, 'update_detail_account'])->name('customer.update.account');
    Route::get('personal/account/information/update/', [AccountCustomerController::class, 'update_information_account'])->name('customer.update.information');
    Route::get('personal/account/address/update/', [AccountCustomerController::class, 'update_address_account'])->name('customer.update.address');
    
    /**
     * Route for order customer
     */
    Route::get('personal/order', [OrderCustomerController::class, 'index'])->name('customer.order.list');
    Route::get('personal/order/show/{slug_produc}', [OrderCustomerController::class, 'show'])->name('customer.order.show');

    /**
     * Route for cart customer
     */
    Route::get('personal/keranjang', [CartCustomerController::class, 'index'])->name('customer.cart');
    Route::get('personal/keranjang/{slug_product}', [CartCustomerController::class, 'show'])->name('customer.cart.show');
    Route::post('personal/keranjang/store/{slug_product}', [CartCustomerController::class, 'store'])->name('customer.cart.store');
    Route::delete('personal/keranjang/destroy/{id}', [CartCustomerController::class, 'destroy'])->name('customer.cart.destroy');

    /**
     * Route for lacak customer
     */

    Route:: get('personal/lacak', [LacakCustomerController::class, 'index'])->name('customer.lacak');
    Route:: get('personal/lacak/new', [LacakCustomerController::class, 'lacak_new'])->name('customer.lacak.new');
    Route:: get('personal/lacak/confirmed', [LacakCustomerController::class, 'lacak_confirmed'])->name('customer.lacak.confirmed');
    Route:: get('personal/lacak/packed', [LacakCustomerController::class, 'lacak_packed'])->name('customer.lacak.packed');
    Route:: get('personal/lacak/sent', [LacakCustomerController::class, 'lacak_sent'])->name('customer.lacak.sent');
    Route:: get('personal/lacak/end', [LacakCustomerController::class, 'lacak_end'])->name('customer.lacak.end');
    Route:: put('personal/lacak/status/{id}', [LacakCustomerController::class, 'handle_status'])->name('customer.lacak.status');

    /**
     * Route for review customer
     */
    Route:: get('personal/review/{id}', [ReviewCustomerController::class, 'index'])->name('customer.review');
    Route:: post('personal/review/product/{id}', [ReviewCustomerController::class, 'store'])->name('customer.review.store');


    /**
     * Route for checkout customer
     */
    
    Route::post('checkout', [CheckoutController::class, 'store'])->name('customer.checkout.store');
    Route::get('checkout/show/{reference}', [CheckoutController::class, 'show'])->name('customer.checkout.show');

    /**
     * Route for logout customer
     */
    Route::get('customer/logout', [AuthCustomerController::class, 'logout'])->name('customer.logout');
});



/*
 * |--------------------------------------------------------------------------
 * | Partner Routes
 * |--------------------------------------------------------------------------
 * |
 * | Semua routes untuk partner
 * |
 */ 

Route::middleware(['auth', 'role:Partner'])->group(function () {
    /**
     * Route for dashboard partner
     */
    Route::get('partner/dashboard', [DashboardPartnerController::class, 'index'])->name('partner.dashboard');

    /**
     * Rouee for account partner
     */
    Route::get('partner/account', [AccountPartnerController::class, 'index'])->name('partner.account');
    Route::get('partner/account/edit', [AccountPartnerController::class, 'account_edit_view'])->name('partner.account.edit');
    Route::put('partner/account/update', [AccountPartnerController::class, 'update_account'])->name('partner.account.update');
    Route::get('partner/account/information', [AccountPartnerController::class, 'information_view'])->name('partner.account.information');
    Route::put('partner/account/information/update', [AccountPartnerController::class, 'update_information'])->name('partner.account.information.update');
    Route::get('partner/account/address', [AccountPartnerController::class, 'address_view'])->name('partner.account.address');
    Route::put('partner/account/address/update', [AccountPartnerController::class, 'update_address'])->name('partner.account.address.update');
    Route::get('partner/account/rekening', [AccountPartnerController::class, 'rekening_view'])->name('partner.account.rekening');
    Route::get('partner/account/rekening/store', [AccountPartnerController::class, 'rekening_store'])->name('partner.account.rekening.store');

    /**
     * Route for product partner
     */
    Route::get('partner/product', [ProductPartnerController::class, 'index'])->name('partner.product.list');
    Route::get('partner/product/add', [ProductPartnerController::class, 'create'])->name('partner.product.add');
    Route::post('partner/product/store', [ProductPartnerController::class, 'store'])->name('partner.product.store');
    Route::get('partner/product/{slug_product}/edit', [ProductPartnerController::class, 'show'])->name('partner.product.edit');
    Route::put('partner/product/{slug_product}/update', [ProductPartnerController::class, 'update'])->name('partner.product.update');
    Route::delete('partner/product/{slug_product}/delete', [ProductPartnerController::class, 'destroy'])->name('partner.product.destroy');

    /**
     * Route for farm partner
     */
    Route::get('partner/farm', [FarmPartnerController::class, 'list'])->name('partner.farm.list');
    Route::get('partner/farm/add', [FarmPartnerController::class, 'create'])->name('partner.farm.create');
    Route::post('partner/farm/store', [FarmPartnerController::class, 'store'])->name('partner.farm.store');
    Route::get('partner/farm/edit/{slug_farm}', [FarmPartnerController::class, 'update'])->name('partner.farm.update');
    Route::put('partner/farm/update/{slug_farm}', [FarmPartnerController::class, 'edit'])->name('partner.farm.edit');
    Route::delete('partner/farm/destroy/{slug_farm}', [FarmPartnerController::class, 'destroy'])->name('partner.farm.destroy');

    /**
     * Route for testimonial partner
     */
    
    Route::get('partner/testimonial', [TestimonialPartnerController::class, 'list'])->name('partner.testimonial.list');
    Route::get('partner/testimonial/show/{slug_testimonial}', [TestimonialPartnerController::class, 'show'])->name('partner.testimonial.show');
    Route::get('partner/testimonial/reply/{id}', [PagePartnerController::class, 'testimonial_reply'])->name('partner.testimonial.reply');
    Route::post('partner/testimonial/replying', [TestimonialReplyPartnerController::class, 'store'])->name('partner.testimonial.reply.store');
    Route::post('partner/testimonial/update', [TestimonialReplyPartnerController::class, 'update'])->name('partner.testimonial.reply.update');

    /**
     * Route for order partner
     */
    Route::get('partner/order', [OrderPartnerController::class, 'order'])->name('partner.order.master');
    Route::get('partner/order/new', [OrderPartnerController::class, 'order_new_view'])->name('partner.order.new');
    Route::get('partner/order/confirmed', [OrderPartnerController::class, 'order_confirmed_view'])->name('partner.order.confirmed');
    Route::get('partner/order/packed', [OrderPartnerController::class, 'order_packed_view'])->name('partner.order.packed');
    Route::get('partner/order/sent', [OrderPartnerController::class, 'order_sent_view'])->name('partner.order.sent');
    Route::get('partner/order/accepted', [OrderPartnerController::class, 'order_accepted_view'])->name('partner.order.accepted');
    Route::get('partner/order/end', [OrderPartnerController::class, 'order_end_view'])->name('partner.order.end');

    /**
     * Route for confirm partner
     */
    Route::put('partner/confirm/order/new/{id}', [OrderPartnerController::class, 'status_new_to_confirm'])->name('partner.confirm.status.order.new');
    Route::put('partner/confirm/order/confirm/{id}', [OrderPartnerController::class, 'status_confirm_to_packed'])->name('partner.confirm.status.order.confirmed');
    Route::put('partner/confirm/order/packed/{id}', [OrderPartnerController::class, 'status_packed_to_sent'])->name('partner.confirm.status.order.packed');

    /**
     * Route for reporting transaction partner
     */
    Route::get('partner/report', [ReportPartnerController::class, 'index'])->name('partner.report.list');
    // Route::get('partner/report/{reference}', [ReportPartnerController::class, 'show'])->name('partner.report.detail');

    
    /**
     * Route for logout
     */
    Route::get('partner/logout', [AuthPartnerController::class, 'logout'])->name('partner.logout');
});
