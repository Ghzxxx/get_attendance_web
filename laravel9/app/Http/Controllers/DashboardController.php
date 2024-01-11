<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PesertaMagang;
use Illuminate\Support\Facades\DB;
use App\Models\AbsensiPesertaMagang;
use App\Http\Controllers\AuthController;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah peserta magang
        $pesertaCount = PesertaMagang::count();

        // Mengambil data terlambat
        $terlambatData = AbsensiPesertaMagang::whereTime('created_at', '>', '08:00:00')
    ->whereDate('created_at', now()->toDateString())
    ->get();

        // Count the number of records
        $terlambatCount = $terlambatData->count();

        // Mengambil semua data absensi
        $absensiPesertaMagang = AbsensiPesertaMagang::latest('created_at')->take(5)->get();

        $absensiPesertaMagang = $absensiPesertaMagang->sortByDesc('created_at');

        return view('dashboard', compact('pesertaCount', 'absensiPesertaMagang', 'terlambatData', 'terlambatCount'));
    }

}
