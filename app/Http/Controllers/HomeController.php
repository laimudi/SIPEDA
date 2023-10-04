<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Pengumuman;
use App\Models\Profil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $berita = Berita::all();
        $galeri = Galeri::all();
        $profil = Profil::first();
        $pengumuman = Pengumuman::all();
        $agenda = Agenda::all();
        return view('home', compact('berita', 'galeri', 'profil', 'pengumuman', 'agenda'));
    }
}
