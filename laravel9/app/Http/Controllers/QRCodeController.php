<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;



class QRCodeController extends Controller
{
    public function show(Request $request)
    {
        // You can customize the QR code data based on the request or any other logic.
        $randomData = Str::random(20);

        // Generate QR code with the random data
        $qrCode = QrCode::format('png')
            ->backgroundColor(249, 245, 235)
            ->color(0, 0, 0)
            ->size(500)
            ->generate($randomData);

        // If it's an API request, return the QR code data in the API response
        if ($request->is('api/*')) {
            return response()->json(['qrCode' => base64_encode($qrCode)]);
        }

        // If it's a web request, render the blade view with the QR code
        return view('qrcode.index', ['qrCode' => $qrCode]);
    }


    // public function apiShow(Request $request)
    // {
    //     // You can customize the QR code data based on the request or any other logic.
    //     $randomData = Str::random(15);

    //     // Generate QR code with the random data
    //     $qrCode = QrCode::size(500)
    //         ->backgroundColor(255, 255, 255)
    //         ->color(0, 0, 0)
    //         ->margin(10)
    //         ->generate($randomData);

    //     // Return the QR code data in the API response
    //     return response()->json(['qrCode' => $qrCode]);
    // }
}