<?php

namespace App\Http\Controllers;

use App\Models\PesertaMagang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = PesertaMagang::getTotalCount();

        return view('/dashboard', compact('productCount'));
    }
}
