<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('kategori.tambah', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaKategori' => 'required'
        ]);

        Kategori::create([
            'Nama_Kategori' => $request->namaKategori
        ]);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = Kategori::where('ID_Kategori', $id)->first();
        return view('kategori.detail', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::where('ID_Kategori', $id)->first();
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'namaKategori' => 'required'
        ]);

        Kategori::where('ID_Kategori', $id)
            ->update(['Nama_Kategori' => $request->input('namaKategori')]);

        Alert::success('Success', 'Data berhasil diupdate');
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::where('ID_Kategori', $id)
            ->delete();

        Alert::success('Success', 'Data berhasil dihapus');
        return redirect('/kategori');
    }
}
