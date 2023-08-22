<?php

use App\Http\Controllers\SettingsController;
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

Route::prefix('/mobile')->group(function () {
    Route::get('/', function () {
        return view('fms.quick-access');
    });

    Route::get('/invoice', function () {
        return view('fms.form.invoice');
    });
    Route::get('/stock-closing', function () {
        return view('fms.form.stock-closing');
    });
    Route::get('/delivery-note', function () {
        return view('fms.form.delivery-note');
    });
    Route::get('/purchase', function () {
        return view('fms.form.purchases');
    });
});

Route::get('/', function () {
    return view('app.dashboard');
});
Route::get('/billing', function () {
    return view('app.billing.index');
});
Route::get('/settlement', function () {
    return view('app.settlement.index');
});
Route::prefix('/setting')->group(function () {
    Route::get('{setting}', [SettingsController::Class,'index'])->name('setting.index');

});
