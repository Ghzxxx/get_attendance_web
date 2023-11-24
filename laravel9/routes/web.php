<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/peserta', function () {
    return view('peserta');
});

Route::get('/pesertaAdd', function () {
    return view('pesertaAdd');
});

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