<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\MobileDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/qrcode', [QRCodeController::class, 'show']);
//  Route::get('/qrcode', [QRCodeController::class, 'checkQRCodeValidity']);
 
 Route::get('/qrcode/generate', [QRCodeController::class, 'generateQRCode']);
 Route::get('/qrcode/check', [QRCodeController::class, 'checkQRCodeValidity']);
 Route::post('/store-mobile-data', [MobileDataController::class, 'store']);


