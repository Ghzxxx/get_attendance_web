<?php

namespace App\Http\Controllers;

use App\Models\AbsensiPesertaMagang;
use Illuminate\Http\Request;

class AbsensiPesertaController extends Controller
{
    public function index()
    {
        $absensiPesertaMagang = AbsensiPesertaMagang::all();
        return view('absen', ['absensiPesertaMagang' => $absensiPesertaMagang]);
    }
}
