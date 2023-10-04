<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.berita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.modal_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $gambar->store('berita-gambar', 'public');

        Berita::create([
            'judul_berita' => $request->judul_berita,
            'gambar' => $gambar->hashName(),
            'tanggal' => $request->tanggal,
            'isi_berita' => $request->isi_berita
        ]);

        if ($gambar) {
            Session::flash('tambah', 'success');
            Session::flash('message', 'Data Berhasil Ditambah');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        if ($request->file('gambar') == "") {
            $berita->update([
                'judul_berita' => $request->judul_berita,
                'tanggal' => $request->tanggal,
                'isi_berita' => $request->isi_berita
            ]);
        } else {
            // hapus gambar
            $file = public_path('storage/berita-gambar') . $berita->gambar;
            if (file_exists($file)) {
                @unlink($file);
            }
            Storage::delete($file);

            //new
            $berita = $request->file('gambar');
            $berita->storeAs('public/berita-gambar', $berita->hashName());

            $berita->update([
                'judul_berita' => $request->judul_berita,
                'gambar' => $request->gambar,
                'tanggal' => $request->tanggal,
                'isi_berita' => $request->isi_berita
            ]);
        }
        if ($berita) {
            Session::flash('edit', 'success');
            Session::flash('message', 'Data Berhasil Diedit');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect()->route('berita.index');
    }
}
