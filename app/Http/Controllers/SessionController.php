<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        // Buat link untuk ke semua route
        echo '<ul>';
        echo '<li><a href=/buat_session>Buat Session</a></li>';
        echo '<li><a href=/akses_session>Akses Session</a></li>';
        echo '<li><a href=/hapus_session>Hapus Session</a></li>';
        echo '<li><a href=/flash-session>Flash Session</a></li>';
        echo '</ul>';
    }

    public function buatSession()
    {
        session(['hakAkses' => 'admin','nama' => 'Anto']);
        return "Session sudah dibuat";
    }

    public function aksesSession()
    {
        //
    }

    public function hapusSession()
    {
        //
    }
    
    public function flashSession()
    {
        //
    }
}
