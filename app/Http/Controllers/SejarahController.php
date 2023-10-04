<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function sejarah()
    {
        $profil = Profil::first();
        return view('sejarah', compact('profil'));
    }
}
