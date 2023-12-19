<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function showLoginForm()
    {
        return view('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Membuat instansi AdminUser
        $adminUser = new AdminUser();

        // Menggunakan metode attempt pada instansi AdminUser
        if ($adminUser->attempt($credentials)) {
            // Login berhasil, alihkan ke halaman dashboard atau halaman lainnya
            return redirect()->intended('/dashboard');
        }

        // Login gagal, kembali ke halaman login dengan pesan error
        return redirect('/login')->with('error', 'Login failed. Please check your credentials.');
    }
}
