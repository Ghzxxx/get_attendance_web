<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class QRCodeController extends Controller
{
    public function show()
    {
        // $randomData = Str::random(10);
        // $qrCode = QrCode::size(300)->generate($randomData);
    
        // // Pass the QR code data and other relevant data to the view
        // return view('generate-qrcode', compact('qrCode'));
        
        $randomData = Str::random(15);

        // Generate QR code with the random data
        $qrCode = QrCode::size(600)
            ->backgroundColor(221, 242, 253) // Background color (white in this case)
            ->color(0, 0, 0) // Foreground color (black in this case)
            ->generate($randomData);

        return $qrCode;

    }
}
