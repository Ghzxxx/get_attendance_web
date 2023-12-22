<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function index()
    {
        $userAdmin = AdminUser::all();
        return view('user', ['userAdmin' => $userAdmin]);
    }

    public function create()
    {
        return view('user-add');
    }

    public function store(Request $request)
    {

        $userAdmin = AdminUser::create($request->all());

        // if ($userAdmin) {
        //     Session::flash('alert-class', 'alert-success');
        //     Session::flash('message', 'Data berhasil ditambah.');
        // } else {
        //     Session::flash('alert-class', 'alert-danger');
        //     Session::flash('message', 'Terjadi kesalahan. Data tidak dapat ditambah.');
        // }
        return redirect('/user');
    }
    
    public function delete ($id) {

        $userAdmin = AdminUser::findOrFail($id);
        return view('user-delete', ['user' => $userAdmin]);
    }

    public function destroy($id)
    {
        $deletedUserAdmin = AdminUser::findOrFail($id);
        $deletedUserAdmin->delete();

        // if ($deletedUserAdmin) {
        //     Session::flash('alert-class', 'alert-success');
        //     Session::flash('message', 'Data berhasil dihapus.');
        // } else {
        //     Session::flash('alert-class', 'alert-danger');
        //     Session::flash('message', 'Terjadi kesalahan. Data tidak dapat ditambah.');
        // }

        return redirect('/user');
    }
}
