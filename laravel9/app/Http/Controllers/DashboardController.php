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
        $productCount = PesertaMagang::getTotalCount();
        $admin = User::all();
        $absensiPesertaMagang = AbsensiPesertaMagang::paginate(5);

        $terlambatCount = AbsensiPesertaMagang::where(DB::raw("TIME(created_at) > '08:00'"))->count();

        $absensiPesertaMagang = $absensiPesertaMagang->sortByDesc('created_at');

        return view('dashboard', compact('productCount', 'absensiPesertaMagang', 'terlambatCount'));
    }

}
