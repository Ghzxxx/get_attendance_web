<?php

namespace App\Http\Controllers;

use App\Models\AbsensiPesertaMagang;
use Illuminate\Http\Request;
use App\Models\MobileData;
use Carbon\Carbon;

class AbsensiPesertaController extends Controller
{
    public function index()
    {
        $absensiPesertaMagang = AbsensiPesertaMagang::all();
        return view('absen', ['absensiPesertaMagang' => $absensiPesertaMagang]);
    }

    public function receiveData(Request $request)
{
    // Retrieve the selectedData and image file from the request
    
    $imageFile = $request->file('image');
    $selectedId = $request->input('absensi_peserta_magang_id');
    $timestamp = Carbon::now();

    // Check if an image file was provided
    if ($imageFile) {
        // Your logic to process the received data with the image
        $timestamp = now();
        $imagePath = $imageFile->storeAs('images', 'image_' . $timestamp->format('YmdHis') . '.jpg');

        // Continue with your logic using $imagePath

        // Create a new MobileData instance and save it to the database
        $mobileData = new MobileData();
        //$mobileData->id = $selectedId; // Assuming 'selected_id' is the column for selectedId
        $mobileData->Foto = $imagePath; // Assuming 'Foto' is the column for the image path
        //$mobileData->timestamp = $timestamp;
        $mobileData->absensi_peserta_magang_id = $selectedId;
        $mobileData->save();
    } else {
        // Handle the case where no image file was provided
        // You can still process other data or return an error response
        return response()->json(['message' => 'Data received successfully without image']);
    }

    // Return a response (optional)
    return response()->json(['message' => 'Data received successfully with image']);
}



}