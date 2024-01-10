<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Redirector;
use App\Services\RandomStringService;

class QRCodeController extends Controller
{
    private $staticData;
    private $qrCode;
    private $randomStringService;

    public function __construct(RandomStringService $randomStringService)
    {
        $this->randomStringService = $randomStringService;
    }

    public function generateNewQRCodeAndRedirect(Redirector $redirect)
    {
        // Update the static data and generate a new QR code
        $this->staticData = $this->randomStringService->generateRandomString(20);
        $this->generateQRCode();

        // Store the updated staticData in the session
        Session::put('staticData', $this->staticData);

        // Redirect back to the page where the QR code is displayed
        return $redirect->route('qrcode.show');
    }

    public function show(Request $request)
    {
        // Retrieve staticData from the session or initialize it
        $this->staticData = Session::get('staticData', $this->randomStringService->generateRandomString(20));

        // Generate the QR code based on the current static data
        $this->generateQRCode();

        // Store the updated staticData in the session
        Session::put('staticData', $this->staticData);

        // Render the blade view with the stored QR code
        return view('qrcode.index', ['qrCode' => $this->qrCode]);
    }

    private function generateQRCode()
    {
        // Generate a new QR code based on the updated static data
        $this->qrCode = QrCode::format('png')
            ->color(0, 0, 0)
            ->size(500)
            ->generate($this->staticData);
    }

    // public function apiResponse()
    // {
    //     // Retrieve staticData from the session or initialize it
    //     $this->staticData = Session::get('staticData', $this->randomStringService->generateRandomString(20));

    //     // Generate a new QR code if it hasn't been generated
    //     if (!$this->qrCode) {
    //         $this->generateQRCode();
    //     }

    //     // Return the QR code data along with the current staticData in the API response
    //     return response()->json([
    //         'qrCode' => base64_encode($this->qrCode),
    //         'staticData' => $this->staticData,
    //     ]);
    // }

    public function checkQRCodeValidity(Request $request)
    {
        // Get the value of the barcodeScanRes parameter from the query string
        $qrCodeValue = $request->input('barcodeScanRes', '');

        // Compare the received QR code with the server-generated QR code
        $isValid = ($qrCodeValue === $this->staticData);

        // Return a JSON response with the validity status
        return response()->json([
            'valid' => $isValid,
            'message' => $isValid ? 'QR code is valid' : 'QR code is not valid',
            'staticData' => $this->staticData,
        ]);
    }
}