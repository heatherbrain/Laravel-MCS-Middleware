<?php

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;

 class MahasiswaController extends Controller
 {
    public function daftarMahasiswa()
    {
        return view ('halaman', ['title' => 'Daftar Mahasiswa']);
    }

    public function tabelMahasiswa()
    {
        return view ('halaman', ['title' => 'Tabel Mahasiswa']);
    }

    public function blogMahasiswa()
    {
        return view ('halaman', ['title' => 'Blog Mahasiswa']);
    }

    public function login()
    {
        return view('form-login');
    }

    public function proseslogin(Request $request)
    {
        $request->validate([
            'username'=>'required',
        ]);

        $validusername = ['sunwoo', 'eric', 'jacob', 'new'];

        if (in_array($request->username, $validusername))
        {
            session(['username' => $request->username]);
            return redirect('/daftar-mahasiswa');
        }
        else {
            return back()->withInput()->with('pesan', "Username Tidak Valid.");
        }
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('login')->with('pesan', "Logout Berhasil.");
    }

 }
