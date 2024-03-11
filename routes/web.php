<?php

use App\Http\Controllers\comproDashboardController;
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
    Route::get('/', 'index')->middleware('guest');
    Route::get('/products', 'product')->middleware('guest');
    Route::get('/shipping', 'shipping')->middleware('guest');
    Route::get('/country', 'country')->middleware('guest');
});
