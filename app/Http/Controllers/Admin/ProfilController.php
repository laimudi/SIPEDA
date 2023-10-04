<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ini instansi
        $profil = Profil::first();
        return view('admin.profil.profil', compact('profil'));
        // $pdf = DomPDFPDF::loadView('admin.profil.profil', compact('profil'));
        // return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.profil.modal_tambah');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'struktur_org' => 'required|mimes:pdf'
        ]);

        if ($validasi->fails()) {
            return redirect()->back();
        }

        $document = $request->struktur_org;
        $struktur_org = time() . '.' . $document->getClientOriginalExtension();
        $request->struktur_org->move(public_path('storage/profil-pdf/pdf-org/'), $struktur_org);

        $profil = Profil::create([
            'sejarah' => $request->sejarah,
            'tujuan' => $request->tujuan,
            'tentang' => $request->tentang,
            'struktur_org' => $struktur_org
        ]);

        if ($profil) {
            Session::flash('tambah', 'success');
            Session::flash('message', 'Data Berhasil Ditambahkan');
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
    // public function edit($id)
    // {
    //     $profil = Profil::findOrFail($id);
    //     return view('admin.profil.modal_edit', compact('profil'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
        // logika kalau kosong data yang di upload
        if ($request->file('struktur_org') == null) {
            $profil->update([
                'sejarah' => $request->sejarah,
                'tujuan' => $request->tujuan,
                'tentang' => $request->tentang,
            ]);
        }

        // ini logika kalau yang di update hanya file org
        elseif ($request->file('struktur_org') != null) {


            // Hapus FIle Lama
            $fileOrg = public_path('storage/profil-pdf/pdf-org') . $profil->struktur_org;
            if (file_exists($fileOrg)) {
                @unlink($fileOrg);
            }
            Storage::delete($fileOrg);

            // Ganti Dengan Data Baru

            $document = $request->struktur_org;
            $struktur_org = time() . '.' . $document->getClientOriginalExtension();
            $request->struktur_org->move(public_path('storage/profil-pdf/pdf-org'), $struktur_org);

            $profil->update([
                'sejarah' => $request->sejarah,
                'tujuan' => $request->tujuan,
                'tentang' => $request->tentang,
                'struktur_org' => $struktur_org
            ]);

            if ($profil) {
                Session::flash('edit', 'success');
                Session::flash('message', 'Data Berhasil Diedit');
            }
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
