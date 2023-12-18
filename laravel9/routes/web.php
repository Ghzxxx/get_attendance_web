<?php

use App\Http\Controllers\DataPeserta;
use Illuminate\Support\Facades\Route;

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
Route::get('/pesertaDetail', [DataPeserta::class, 'show']);
Route::get('/peserta-add', [DataPeserta::class, 'create']);

Route::get('/pesertaDetail', function () {
    return view('pesertaDetail');
});

Route::get('/absen', function () {
    return view('absen');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/qrcode', function () {
    return view('qrcode');
});