<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PesertaMagang;
use App\Http\Controllers\AuthController;
use App\Models\AbsensiPesertaMagang;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = PesertaMagang::getTotalCount();
        $admin = User::all();
        $absensiPesertaMagang = AbsensiPesertaMagang::paginate(5);
        $terlambatPesertaMagang = AbsensiPesertaMagang::where('created_at', '>', '08:00')->get();

        return view('dashboard', compact('productCount', 'absensiPesertaMagang', 'terlambatPesertaMagang'));
    }



}
