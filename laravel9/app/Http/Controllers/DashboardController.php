<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PesertaMagang;
use App\Http\Controllers\AuthController;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = PesertaMagang::getTotalCount();
        $admin = User::all();

        return view('/dashboard', compact('productCount'));
    }
}
