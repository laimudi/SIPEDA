<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function storeLogin(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);


        // dd($role);
        if (Auth::attempt($request->only('username', 'password'))) {
            $role = auth()->user()->role->nama;
            if ($role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role == 'ketua_org') {
                return redirect()->route('ketua-org.dashboard');
            } elseif ($role == 'anggota') {
                return redirect()->route('anggota.dashboard');
            } else {
                return redirect()->route('home');
                // dd($role);
            }
        }
        return back()->with('status', 'Username atau Password Salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeRegister(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'sekolah' => 'required',
            'universitas' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'telepon' => 'required'
        ]);

        $username = User::where('username', $request->username)->first();
        if ($username) {
            if ($validator->fails()) {
                return back()->with('Username sudah terdaftar silahkan login');
            }
        }

        $anggota = Anggota::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'sekolah' => $request->sekolah,
            'universitas' => $request->universitas,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'telepon' => $request->telepon
        ]);

        $users = User::create([
            'username' => $request->username,
            'role_id' => 3,
            'password' => Hash::make($request['password']),
            'anggota_id' => $anggota->id
        ]);
        // dd($users->anggota);
        // dd($anggota->user);

        // Pendaftaran::create([
        //     'anggota_id' => $anggota->id,
        //     'gender' => $request->gender,
        //     'tmp_lahir' => $request->tmp_lahir,
        //     'tgl_lahir' => $request->tgl_lahir,
        //     'agama' => $request->agama,
        //     'alamat' => $request->alamat,
        //     'penyakit' => $request->penyakit,
        //     'telepon_ortu' => $request->telepon_ortu,
        // ]);

        Auth::login($users);

        return redirect()->route('anggota.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
