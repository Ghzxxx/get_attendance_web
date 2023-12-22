<?php

use App\Http\Controllers\DataPeserta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Models\AdminUser;

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


Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/peserta', [DataPeserta::class, 'index'])->name('index');
Route::get('/peserta/{id}', [DataPeserta::class, 'show']);
Route::get('/peserta-add', [DataPeserta::class, 'create']);
Route::post('/peserta', [DataPeserta::class, 'store']);
Route::get('/peserta-edit/{id}', [DataPeserta::class, 'edit']);
Route::put('/peserta/{id}', [DataPeserta::class, 'update']);
Route::get('/peserta-delete/{id}', [DataPeserta::class, 'delete']);
Route::delete('/peserta-destroy/{id}', [DataPeserta::class, 'destroy']);

Route::get('/absen', function () {
    return view('absen');
});

Route::get('/user', [AdminUserController::class, 'index']);
Route::get('/user-add', [AdminUserController::class, 'create']);
Route::post('/user', [AdminUserController::class, 'store']);
Route::get('/user-delete/{id}', [AdminUserController::class, 'delete']);
Route::delete('/user-destroy/{id}', [AdminUserController::class, 'destroy']);

Route::get('/logout', function () {
    return view('logout');
});

//Route::get('/generate-qrcode', 'App\Http\Controllers\QRCodeController@generateQRCode');
Route::get('/qrcode', [QRCodeController::class, 'show'])->name('qrcode.generate');

