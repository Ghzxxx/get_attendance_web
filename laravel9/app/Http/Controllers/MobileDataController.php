<?php

namespace App\Http\Controllers;

use App\Models\MobileData;  
use Illuminate\Http\Request;


class MobileDataController extends Controller
{

    public function store(Request $request)
{
    $data = $request->all();

    // Validate the incoming data
    $validatedData = $request->validate([
        'Foto' => 'required|string',
        'Waktu' => 'required|date',
        
        // Add validation rules for other fields
    ]);

    // Additional processing or actions based on the data

    // Store data in the database
    MobileData::create($validatedData);

    return response()->json(['message' => 'Data stored successfully']);
}




}
