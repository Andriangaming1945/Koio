<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{public function login(Request $request)
    {
        if (!Auth::check()) {
            // Pengguna belum masuk, alihkan ke halaman login
            return view('login'); // Gantilah 'auth.login' dengan nama tampilan login yang sesuai
        }
    
        // Validasi data input
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'password' => 'required',
        ]);
    
        // Coba melakukan otentikasi pengguna
        if (Auth::attempt(['nama' => $request->nama, 'nip' => $request->nip, 'password' => $request->password])) {
            // Jika otentikasi berhasil, alihkan ke halaman yang sesuai
            return redirect()->intended('/dashboard');
        } else {
            // Jika otentikasi gagal, kembali ke halaman login dengan pesan error
            return back()->withErrors(['nip' => 'NIP atau password salah.']);
        }
    }
    
}


