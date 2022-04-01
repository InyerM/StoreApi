<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\CreditController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PurchaseController;
use App\Http\Controllers\Api\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProductController::class)->group(function() {
    Route::get('/products', 'index');
    Route::post('/product', 'store');
    Route::get('/product/{id}', 'show');
    Route::put('/product/{id}', 'update');
    Route::delete('/product/{id}', 'destroy');
});

Route::controller(ClientController::class)->group(function() {
    Route::get('/clients', 'index');
    Route::post('/client', 'store');
    Route::get('/client/{id}', 'show');
    Route::put('/client/{id}', 'update');
    Route::delete('/client/{id}', 'destroy');
});

Route::controller(PurchaseController::class)->group(function() {
    Route::get('/purchases', 'index');
    Route::post('/purchase', 'store');
    Route::get('/purchase/{id}', 'show');
    Route::put('/purchase/{id}', 'update');
    Route::delete('/purchase/{id}', 'destroy');
});

Route::controller(CreditController::class)->group(function() {
    Route::get('/credits', 'index');
    Route::post('/credit', 'store');
    Route::get('/credit/{id}', 'show');
    Route::put('/credit/{id}', 'update');
    Route::delete('/credit/{id}', 'destroy');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/users', 'index');
    Route::post('/user', 'store');
    Route::get('/user/{id}', 'show');
    Route::put('/user/{id}', 'update');
    Route::delete('/user/{id}', 'destroy');
});