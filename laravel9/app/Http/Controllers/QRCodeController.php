<?php

namespace App\Http\Controllers;

use App\Models\QRCode; // Assuming you have a QRCode model
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode as QRCodeGenerator;

class QRCodeController extends Controller
{
    public function generateAndSaveRandomString()
    {
        $randomString = Str::random(25); // Change the length as needed

        // Save the random string to the database
        $qrCode = new QRCode();
        $qrCode->random_string = $randomString;
        $qrCode->save();

        return response()->json(['message' => 'Random string generated and saved successfully', 'random_string' => $randomString]);
    }


    public function index()
    {
        return view('qrcode.index');
    }

    public function generateQRCode()
    {
        // Generate and save a new random string
        $this->generateAndSaveRandomString();
    
        // Get the latest random string from the database
        $latestRandomString = QRCode::latest()->value('random_string');
    
        // Check if a random string is available
        if (!$latestRandomString) {
            return response()->json(['message' => 'No random string found in the database.'], 404);
        }
    
        // Generate a QR code with custom formatting
        $qrCode = QRCodeGenerator::format('png')
            ->color(0, 0, 0)
            ->size(500)
            ->generate($latestRandomString);
    
        // You can return the QR code image, or any other response as needed
        return view('qrcode.index', ['qrCode' => $qrCode]);
    }



    public function validateQRCodeApi(Request $request)
    {
        // Get the latest random string from the database
        $latestRandomString = QRCode::latest()->value('random_string');

        // Check if a random string is available
        if (!$latestRandomString) {
            return response()->json(['message' => 'No random string found in the database.'], 404);
        }

        // Get the scanned QR code value from the mobile API
        $scannedQrCodeValue = $request->input('barcodeScanRes');

        // Compare the scanned value with the latest random string
        if ($latestRandomString === $scannedQrCodeValue) {
            // Validation successful
            return response()->json(['status' => 'success']);
        } else {
            // Validation failed
            return response()->json(['status' => 'error', 'message' => 'QR Code Anda Salah!' ]);
        }
    }



}