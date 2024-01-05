<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PesertaMagang;
use App\Http\Controllers\Controller;
use App\Http\Requests\PesertaCreateRequest;
use Illuminate\Support\Facades\Session;


class DataPeserta extends Controller
{
    public function index()
    {
        $pesertaMagangData = PesertaMagang::orderBy('nama', 'asc')->paginate(10);
        return view('peserta.index', ['pesertaMagangData' => $pesertaMagangData]);
    }

    public function create()
    {
        return view('peserta-add');
    }

    public function store(PesertaCreateRequest $request)
    {

        $pesertaMagangData = PesertaMagang::create($request->all());

        if ($pesertaMagangData) {
            Session::flash('alert-class', 'alert-success');
            Session::flash('message', 'Data berhasil ditambah.');
        } else {
            Session::flash('alert-class', 'alert-danger');
            Session::flash('message', 'Terjadi kesalahan. Data tidak dapat ditambah.');
        }
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

        if ($pesertaMagangData) {
            Session::flash('alert-class', 'alert-success');
            Session::flash('message', 'Data berhasil diubah.');
        } else {
            Session::flash('alert-class', 'alert-danger');
            Session::flash('message', 'Terjadi kesalahan. Data tidak dapat ditambah.');
        }

        return redirect('/peserta');
    }

    public function delete ($id) {

        $pesertaMagangData = PesertaMagang::findOrFail($id);
        return view('peserta-delete', ['peserta' => $pesertaMagangData]);
    }

    public function destroy($id)
    {
        $deletedPesertaMagang = PesertaMagang::findOrFail($id);
        $deletedPesertaMagang->delete();

        if ($deletedPesertaMagang) {
            Session::flash('alert-class', 'alert-success');
            Session::flash('message', 'Data berhasil dihapus.');
        } else {
            Session::flash('alert-class', 'alert-danger');
            Session::flash('message', 'Terjadi kesalahan. Data tidak dapat ditambah.');
        }

        return redirect('/peserta');
    }
}
