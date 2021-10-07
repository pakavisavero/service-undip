<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentChannels;
use App\Http\Controllers\University;
use App\Http\Controllers\PaymentGateway;
use App\Http\Controllers\PhoneBanking;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/payment-channel', [PaymentChannels::class, 'index'])->name('payment-channel');
Route::get('/university/{virtual_number}', [University::class, 'index'])->name('university');
Route::get('/bank-data/{virtual_number}/{nik}', [University::class, 'index'])->name('bank-data');
Route::get('/bank-data/{nik}/{fak}/{prodi}', [PaymentGateway::class, 'index'])->name('payment-gateway');
Route::get('/bank-data/{nik}/{fullName}/{fak}/{prodi}', [PhoneBanking::class, 'index'])->name('phone-banking');

Route::get('/', function () {
    return view('welcome');
});