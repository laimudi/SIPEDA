<?php

namespace App\Http\Controllers\Admin;

use App\Models\TextFormulir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TextFormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $textfor = TextFormulir::first();
        return view('admin.textformulir.text_formulir', compact('textfor'));
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
        $textfor = TextFormulir::create($request->all());

        if ($textfor) {
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $textfor = TextFormulir::findOrFail($id);
        $textfor->update($request->all());

        if ($textfor) {
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
