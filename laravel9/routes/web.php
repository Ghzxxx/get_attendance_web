<?php

use App\Http\Controllers\AbsensiPesertaController;
use App\Http\Controllers\DataPeserta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/peserta', [DataPeserta::class, 'index'])->name('index')->middleware('auth');
Route::get('/peserta/{id}', [DataPeserta::class, 'show'])->middleware('auth');
Route::get('/peserta-add', [DataPeserta::class, 'create'])->middleware('auth');
Route::post('/peserta', [DataPeserta::class, 'store'])->middleware('auth');
Route::get('/peserta-edit/{id}', [DataPeserta::class, 'edit'])->middleware('auth');
Route::put('/peserta/{id}', [DataPeserta::class, 'update'])->middleware('auth');
Route::get('/peserta-delete/{id}', [DataPeserta::class, 'delete'])->middleware('auth');
Route::delete('/peserta-destroy/{id}', [DataPeserta::class, 'destroy'])->middleware('auth');
Route::get('/peserta-deleted-list', [DataPeserta::class, 'deletedPeserta'])->middleware('auth');
Route::get('/peserta/{id}/restore', [DataPeserta::class, 'restore'])->middleware('auth');

Route::get('/absen', [AbsensiPesertaController::class, 'index']);
Route::get('/filter', [AbsensiPesertaController::class, 'filterByDate'])->name('filter')->middleware('auth');

//Route::get('/generate-qrcode', 'App\Http\Controllers\QRCodeController@generateQRCode');
//Route::get('/qrcode', [QRCodeController::class, 'show'])->name('qrcode.generate')->middleware('auth');
//Route::get('/generatenewQRCode', [QRCodeController::class, 'generatenewQRCode'])->middleware('auth');
Route::get('/qrcode', [QRCodeController::class, 'show'])->name('qrcode.show')->middleware('auth');
Route::get('/generatenewqrcode', [QRCodeController::class, 'generateNewQRCodeAndRedirect'])->name('qrcode.generate.manual')->middleware('auth');




