<?php

use App\Http\Controllers\baseDashboard;
use App\Http\Controllers\comproDashboardController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ExpeditionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(comproDashboardController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/products', 'product');
    Route::get('/shipping', 'shipping');
    Route::get('/country', 'country');
    Route::get('/makeadeal', 'makeadeal');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->middleware('guest')->name('login');
    Route::post('/login', 'authenticate')->middleware('guest');
    Route::post('/base/logout', 'logout');
});

Route::controller(baseDashboard::class)->group(function () {
    Route::get('/base/dashboard', 'dashboard')->middleware('auth');
    Route::get('/base/eoq', 'create')->middleware('auth');
    Route::post('/base/eoq', 'store')->middleware('auth');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/base/product', 'index')->middleware('auth');
    Route::get('/base/product/add', 'create')->middleware('auth');
    Route::post('/base/product/add', 'store')->middleware('auth');
    Route::get('/base/product/{product}/edit', 'edit')->middleware('auth');
    Route::patch('/base/product/{product}', 'update')->middleware('auth');
    Route::delete('/base/product/{product}/delete', 'destroy')->middleware('auth');
});

Route::controller(ExpeditionController::class)->group(function () {
    Route::get('/base/expedition', 'index')->middleware('auth');
    Route::get('/base/expedition/add', 'create')->middleware('auth');
    Route::post('/base/expedition/add', 'store')->middleware('auth');
    Route::get('/base/expedition/{expedition}/edit', 'edit')->middleware('auth');
    Route::patch('/base/expedition/{expedition}', 'update')->middleware('auth');
    Route::delete('/base/expedition/{expedition}/delete', 'destroy')->middleware('auth');
});

Route::controller(CountryController::class)->group(function () {
    Route::get('/base/country', 'index')->middleware('auth');
    Route::get('/base/country/add', 'create')->middleware('auth');
    Route::post('/base/country/add', 'store')->middleware('auth');
    Route::get('/base/country/{country}/edit', 'edit')->middleware('auth');
    Route::patch('/base/country/{country}', 'update')->middleware('auth');
    Route::delete('/base/country/{country}/delete', 'destroy')->middleware('auth');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/base/user', 'index')->middleware('auth');
    Route::get('/base/user/add', 'create')->middleware('auth');
    Route::post('/base/user/add', 'store')->middleware('auth');
    Route::get('/base/user/{user}/edit', 'edit')->middleware('auth');
    Route::patch('/base/user/{user}', 'update')->middleware('auth');
    Route::delete('/base/user/{user}/delete', 'destroy')->middleware('auth');
});
