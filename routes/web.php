<?php

use App\Http\Controllers\FundsController;
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

Route::get('/', function () {
    return view('app.dashboard');
});
Route::get('/billing', function () {
    return view('app.billing.index');
});
Route::get('/settlement', function () {
    return view('app.settlement.index');
});
Route::get('/setting/{setting}', [SettingsController::class,'settingPage'])->name('setting');  

Route::get('/setting', function () {
    return redirect('/setting/users');
});
