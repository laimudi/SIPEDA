<?php

namespace App\Http\Controllers\ketua_org;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class DaftarPengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidangs = Bidang::all();
        $pengurus = Pengurus::all();
        return view('ketua-org.daftar_pengurus', compact('pengurus', 'bidangs'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
