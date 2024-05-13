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

Route::get('/', function () {
    return view('compro.dashboard',[
        "title" => "Dashboard"
    ]);
});

Route::controller(comproDashboardController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/products', 'product');
    Route::get('/shipping', 'shipping');
    Route::get('/country', 'country');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->middleware('guest')->name('login');
    Route::post('/login', 'authenticate')->middleware('guest');
    Route::post('/base/logout', 'logout');
});

Route::controller(baseDashboard::class)->group(function () {
    Route::get('/base/dashboard', 'dashboard')->middleware('auth');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/base/product', 'index')->middleware('auth');
});

Route::controller(ExpeditionController::class)->group(function () {
    Route::get('/base/expedition', 'index')->middleware('auth');
});

Route::controller(CountryController::class)->group(function () {
    Route::get('/base/country', 'index')->middleware('auth');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/base/user', 'index')->middleware('auth');
    Route::get('/base/user/add', 'create')->middleware('auth');
    Route::post('/base/user/add', 'store')->middleware('auth');
});
