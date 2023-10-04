<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $anggota = $user->anggota;
        $pendaftaran = Pendaftaran::all();
        return view('admin.mahasiswa.mahasiswa', compact('pendaftaran'));
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
        //
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
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update([
            'status' => $request->status
        ]);

        if ($pendaftaran) {
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

    public function cetakPdf()
    {
        $pendaftaran = Pendaftaran::all();
        $pdf = Pdf::loadView('admin.mahasiswa.cetak_pdf', compact('pendaftaran'));
        return $pdf->stream('Daftar-Mahasiswa.pdf');
    }
}
