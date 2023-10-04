<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidang = Bidang::all();
        return view('admin.bidang.bidang', compact('bidang'));
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
        $bidang = Bidang::create($request->all());

        if ($bidang) {
            Session::flash('tambah', 'success');
            Session::flash('message', 'Data Berhasil Ditambahkan');
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
        $bidang = Bidang::findOrFail($id);
        $bidang->update($request->all());

        if ($bidang) {
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
        Bidang::destroy($id);
        return redirect()->route('bidang.index');
    }
}
