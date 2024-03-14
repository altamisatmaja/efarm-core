<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\KategoriProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
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
    ]);
});

// Route::group(['middleware' => 'api'], function() {
//     Route::get('kategori', [KategoriProductController::class, 'index']);
//     Route::post('kategori', [KategoriProductController::class, 'store']);
//     Route::put('kategori/{id}', [KategoriProductController::class, 'update']);
//     Route::delete('kategori/{id}', [KategoriProductController::class, 'destroy']);
// });