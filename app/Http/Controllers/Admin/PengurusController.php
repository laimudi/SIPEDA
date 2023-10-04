<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pengurus = Pengurus::with('bidangs');
        $pengurus = Pengurus::all();
        $bidangs = Bidang::all();
        return view('admin.pengurus.pengurus', compact('bidangs', 'pengurus'));
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
        $pengurus = Pengurus::create($request->all());

        if ($pengurus) {
            Session::flash('tambah', 'success');
            Session::flash('message', 'Data Berhasil Ditambahkan');
        }

        return redirect()->route('pengurus.index');
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
        $pengurus = Pengurus::findOrFail($id);

        $pengurus->update($request->all());

        if ($pengurus) {
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
        Pengurus::destroy($id);
        return redirect()->route('pengurus.index');
    }
}
