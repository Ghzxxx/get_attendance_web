<?php

use App\Http\Controllers\DataPeserta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/peserta', [DataPeserta::class, 'index']);
Route::get('/peserta/{id}', [DataPeserta::class, 'show']);
Route::get('/peserta-add', [DataPeserta::class, 'create']);
Route::post('/peserta', [DataPeserta::class, 'store']);
Route::get('/peserta-edit/{id}', [DataPeserta::class, 'edit']);
Route::put('/peserta/{id}', [DataPeserta::class, 'update']);

Route::get('/absen', function () {
    return view('absen');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/logout', function () {
    return view('logout');
});

//Route::get('/generate-qrcode', 'App\Http\Controllers\QRCodeController@generateQRCode');
Route::get('/qrcode', [QRCodeController::class, 'show'])->name('qrcode.generate');

