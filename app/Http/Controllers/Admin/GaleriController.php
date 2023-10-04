<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.galeri', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modal_tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $gambar->store('galeri-gambar', 'public');

        Galeri::create([
            'judul_gmbr' => $request->judul_gmbr,
            'gambar' => $gambar->hashName(),
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $galeri = Galeri::find($id);
        // return view('admin.galeri.modal_edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $galeri = Galeri::findOrFail($id);

        if ($request->file('gambar') == "") {
            $galeri->update([
                'judul_gmbr' => $request->judul_gmbr
            ]);
        } else {
            // hapus gambar
            $file = public_path('storage/galeri-gambar') . $galeri->gambar;
            if (file_exists($file)) {
                @unlink($file);
            }
            Storage::delete($file);

            // new
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/galeri-gambar', $gambar->hashName());

            $galeri->update([
                'judul_gmbr' => $request->judul_gmbr,
                'gambar' => $gambar->hashName()
            ]);
        }
        if ($galeri) {
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
        Galeri::destroy($id);
        return redirect()->route('galeri.index');
    }
}
