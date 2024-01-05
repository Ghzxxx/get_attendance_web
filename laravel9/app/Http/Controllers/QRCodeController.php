<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class QRCodeController extends Controller
{
    private $staticData;
    private $qrCode;

    public function __construct()
    {
        // Initialize $staticData in the constructor
        $this->staticData = Str::random(20);
    }

    public function show(Request $request)
    {
        // If QR code has not been generated yet, generate it
        if (!$this->qrCode) {
            $this->qrCode = $this->generateQRCode($this->staticData);
        }

        // If it's an API request, return the QR code data in the API response
        if ($request->is('api/*')) {
            return response()->json(['qrCode' => base64_encode($this->qrCode)]);
        }

        // If it's a web request, render the blade view with the stored QR code
        return view('qrcode.index', ['qrCode' => $this->qrCode]);
    }

    public function checkQRCodeValidity(Request $request)
    {
        // Get the value of the barcodeScanRes parameter from the query string
        $qrCodeValue = $request->input('barcodeScanRes', '');

        // Compare the received QR code with the server-generated QR code
        dd($qrCodeValue, $this->staticData);
        $isValid = ($qrCodeValue === $this->staticData);

        // Return a JSON response with the validity status  
        
        return response()->json([
            'valid' => $isValid,
            'message' => $isValid ? 'QR code is valid' : 'QR code is not valid',
        ]);
    }

    protected function generateQRCode($data)
    {
        return QrCode::format('png')
            ->color(0, 0, 0)
            ->size(500)
            ->generate($data);
    }
}