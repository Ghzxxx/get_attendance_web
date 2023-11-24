<?php

namespace App\Http\Controllers;
use App\Models\PesertaMagang;
use Illuminate\Http\Request;

class DataPeserta extends Controller
{
    public function index()
    {
        // Your code for displaying data

        $pesertaMagangData = PesertaMagang::all();
        return view('peserta.index', ['pesertaMagangData' => $pesertaMagangData]);
    }

    public function create()
    {
        // Your code for displaying the form to create data
    }

    public function store(Request $request)
    {
        // Your code for storing data from the form
    }

    public function show($id)
    {
        // Your code for displaying a specific record
    }

    public function edit($id)
    {
        // Your code for displaying the form to edit a record
    }

    public function update(Request $request, $id)
    {
        // Your code for updating a record based on the form data
    }

    public function destroy($id)
    {
        // Your code for deleting a record
    }
}
