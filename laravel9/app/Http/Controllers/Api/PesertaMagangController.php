<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PesertaMagang;
use Illuminate\Http\Request;

class PesertaMagangController extends Controller
{
    public function getNames()
    {
        $names = PesertaMagang::pluck('nama');
        return response()->json(['names' => $names]);
    }
}
