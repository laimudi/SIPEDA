<?php

namespace App\Http\Controllers\Anggota;

use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\TextFormulir;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $anggota = $user->anggota;
        // $pendaftar = Pendaftar::first();
        // $daftar = Pendaftaran::first();
        return view('anggota.pendaftaran', compact('anggota', 'user'));
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
    public function store(Request $request)
    {
        // dd($request->all());
        $user = User::where('id', auth()->user()->id)->first();
        $anggota_id = $user->anggota->id;

        $gambar = $request->file('gambar');
        $gambar->store('pendaftaran-gambar', 'public');

        $daftar = Pendaftaran::create([
            'anggota_id' => $anggota_id,
            'nm_lengkap' => $anggota_id,
            'gender' => $request->gender,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'universitas' => $request->universitas,
            'jurusan' => $request->jurusan,
            'kecamatan' => $request->kecamatan,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'penyakit' => $request->penyakit,
            'telepon_ortu' => $request->telepon_ortu,
            'gambar' => $gambar->hashName(),
            'status' => $request->status
        ]);

        if ($daftar) {
            Session::flash('tambah', 'success');
            Session::flash('message', 'Anda berhasil mendaftar silahkan print formulir dan dibawa pada saat kegiatan berlangsung');
        }

        return redirect()->back();
    }

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
        // dd($id);
        $user = User::where('id', auth()->user()->id)->first();
        $anggota_id = $user->anggota->id;

        // tabel pendaftaran itu create dp nama
        // karena nga m b simpan data di tabel pendaftaran
        // bukan b ubah data dari suatu tabel
        $daftar = Pendaftaran::findOrFail($id);
        if ($request->file('gambar') == "") {
            $daftar->update([
                'anggota_id' => $request->anggota_id,
                'gender' => $request->gender,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'penyakit' => $request->penyakit,
                'telepon_ortu' => $request->telepon_ortu
            ]);
        } else {
            $file = public_path('storage/pendaftaran-gambar') . $daftar->gambar;
            if (file_exists($file)) {
                @unlink($file);
            }
            Storage::delete($file);
        }
        // Ganti dengan data baru
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/pendaftaran-gambar', $gambar->hashName());

        $daftar->update([
            'anggota_id' => $request->anggota_id,
            'gender' => $request->gender,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'penyakit' => $request->penyakit,
            'telepon_ortu' => $request->telepon_ortu,
            'gambar' => $gambar->hashName()
        ]);

        if ($daftar) {
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

    public function cetakFormulir($id)
    {

        $textfor = TextFormulir::first();
        // $daftar = Pendaftaran::findOrFail($id);
        $anggota = Anggota::findOrFail($id);
        $pdf = Pdf::loadView('anggota.cetak_pendaftaran', compact('anggota', 'textfor'));
        return $pdf->stream('Formulir-Pendaftaran-OPN.pdf');
    }
}
