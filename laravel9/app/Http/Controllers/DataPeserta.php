<?php

namespace App\Http\Controllers;
use App\Models\PesertaMagang;
use Illuminate\Http\Request;

class DataPeserta extends Controller
{
    public function index()
    {
        $pesertaMagangData = PesertaMagang::all();
        return view('peserta.index', ['pesertaMagangData' => $pesertaMagangData]);
    }

    public function create()
    {
        return view('peserta-add');
    }

    public function store(Request $request)
    {
        $pesertaMagangData = PesertaMagang::create($request->all());

        return redirect('/peserta');
    }

    public function show($id)
    {
        $pesertaMagangData = PesertaMagang::findOrFail($id);
        return view('pesertaDetail', ['peserta' => $pesertaMagangData]);
    }

    public function edit(Request $request, $id)
    {
        $pesertaMagangData = PesertaMagang::findOrFail($id);
        return view('peserta-edit', ['peserta' => $pesertaMagangData]);
    }

    public function update(Request $request, $id)
    {
        $pesertaMagangData = PesertaMagang::findOrFail($id);

        $pesertaMagangData->update($request->all());

        return redirect('/peserta');
    }

    public function destroy($id)
    {
        // Your code for deleting a record
    }
}
