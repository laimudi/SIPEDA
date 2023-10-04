<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use App\Models\Pengurus;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $anggota = $user->anggota;
        $pendaftaran = Pendaftaran::count();
        $pengurus = Pengurus::count();
        $profil = Profil::first();
        // $user = User::where('id', auth()->user()->id);
        return view('admin.dashboard', compact('user', 'anggota', 'pendaftaran', 'pengurus', 'profil'));
    }
}
