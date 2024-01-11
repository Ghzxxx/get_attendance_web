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
        $absensiPesertaMagang = AbsensiPesertaMagang::orderBy('created_at', 'desc')->get();
        return view('absen', ['absensiPesertaMagang' => $absensiPesertaMagang]);
    }

    public function filterByDate(Request $request)
    {
        $selectedDate = $request->input('selected_date');

        $filteredData = AbsensiPesertaMagang::whereDate('created_at', $selectedDate)->get();

        return view('filter', compact('filteredData'));
    }

    public function receiveData(Request $request)
    {
    
        $imageFile = $request->file('image');
        $selectedId = $request->input('selectedId');
        $timestamp = Carbon::now();

        if ($imageFile) {
            $timestamp = now();
            // $imagePath = $imageFile->storeAs('images', 'image_' . $timestamp->format('YmdHis') . '.jpg');
            $imagePath = $imageFile->storeAs('images', 'image_' . $timestamp->format('YmdHis') . '.jpg, .png, .jpeg, .gif');

            $mobileData = new MobileData();
            $mobileData->Foto = $imagePath;
            $mobileData->absensi_peserta_magang_id = $selectedId;
            $mobileData->save();
        } else {
            return response()->json(['message' => 'Data received successfully without image']);
        }

        return response()->json(['message' => 'Data received successfully with image']);
    }



}