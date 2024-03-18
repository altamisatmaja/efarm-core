<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryLivestockController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\KategoriProductController;
use App\Http\Controllers\LivestockController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TypeLivestockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function() {
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::group([
    'middleware' => 'api',
], function() {
    Route::resources([
        'category' => CategoryProductController::class,
        'product' => ProductController::class,
        'slider' => SliderController::class,
        'livestock' => LivestockController::class,
        'partner' => PartnerController::class,
        'categorylivestock' => CategoryLivestockController::class,
        'order' => OrderController::class,
        // 'report' => ReportController::class,
        'review' => ReviewController::class,
        'testimonial' => TestimonialController::class,
        'typelivestock' => TypeLivestockController::class,
        'payment' => PaymentController::class,
        'farm' => FarmController::class,
    ]);

    Route::get('order/confirmed', [OrderController::class, 'order_confirmed']);
    Route::get('order/packed', [OrderController::class, 'order_packed']);
    Route::get('order/sent', [OrderController::class, 'order_sent']);
    Route::get('order/accepted', [OrderController::class, 'order_accepted']);
    Route::get('order/end', [OrderController::class, 'order_end']);
    Route::post('order/status/{order}', [OrderController::class, 'handle_status']);
    Route::get('report', [ReportController::class, 'index']);
});

// Route::group(['middleware' => 'api'], function() {
//     Route::get('kategori', [KategoriProductController::class, 'index']);
//     Route::post('kategori', [KategoriProductController::class, 'store']);
//     Route::put('kategori/{id}', [KategoriProductController::class, 'update']);
//     Route::delete('kategori/{id}', [KategoriProductController::class, 'destroy']);
// });