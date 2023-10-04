<?php

namespace App\Http\Controllers\ketua_org;

use App\Models\Role;
use App\Models\User;
use App\Models\Profil;
use App\Models\Pengurus;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id);
        $pendaftaran = Pendaftaran::count();
        $pengurus = Pengurus::count();
        $profil = Profil::first();
        return view('ketua-org.dashboard', compact('user', 'pendaftaran', 'pengurus', 'profil'));
    }
}
