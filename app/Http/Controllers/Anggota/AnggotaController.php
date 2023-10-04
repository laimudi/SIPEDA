<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $anggota = $user->anggota;
        return view('anggota.anggota', compact('anggota', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $gambar = $request->file('gambar');
    //     $gambar->store('mahasiswa-gambar', 'public');

    //     $anggotas = Anggota::create([
    //         'nm_lengkap' => $request->nm_lengkap,
    //         'gender' => $request->gender,
    //         'tmp_lahir' => $request->tmp_lahir,
    //         'tgl_lahir' => $request->tgl_lahir,
    //         'sekolah' => $request->sekolah,
    //         'universitas' => $request->universitas,
    //         'jurusan' => $request->jurusan,
    //         'fakultas' => $request->fakultas,
    //         'alamat' => $request->alamat,
    //         'provinsi' => $request->provinsi,
    //         'kabupaten' => $request->kabupaten,
    //         'kecamatan' => $request->kecamatan,
    //         'telepon' => $request->telepon,
    //         'gambar' => $gambar->hashName()
    //     ]);

    //     if ($anggotas) {
    //         Session::flash('tambah', 'success');
    //         Session::flash('message', 'Data Berhasil Ditambahkan');
    //     }

    //     return redirect()->back();
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggotas = Anggota::findOrFail($id);
        if ($request->file('gambar') == "") {
            $anggotas->update([
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
        } else {
            //hapus gambar
            $file = public_path('storage/mahasiswa-gambar') . $anggotas->gambar;
            if (file_exists($file)) {
                @unlink($file);
            }
            Storage::delete($file);

            // Ganti dengan data baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/mahasiswa-gambar', $gambar->hashName());

            $anggotas->update([
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
                'telepon' => $request->telepon,
                'gambar' => $gambar->hashName()
            ]);
        }

        if ($anggotas) {
            Session::flash('edit', 'success');
            Session::flash('message', 'Data Berhasil Diedit');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
