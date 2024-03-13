<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    public function index(){
        $menu = DB::table('menu')->get();

        $title = 'Peringatan';
        $text = 'Yakin ingin menghapus?';
        $icon = 'Question';
        confirmDelete($title, $text);

        return view('pages.menu', compact('menu'));
    }

    public function tambahmenu(){
        return view('pages.tambahmenu');
    }

    public function menu(Request $request){
        $request->validate([
            'namaMenu' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required'
        ]);

        DB::table('menu')->insert([
            'Nama_Menu' => $request->namaMenu,
            'Harga' => $request->harga,
            'Deskripsi' => $request->deskripsi,
            'Kategori' => $request->kategori
        ]);

        Alert::success('Sukses', 'Data berhasil disimpan');
        return redirect('/menu');
    }

    public function show($id){
        $menu = DB::table('menu')->where('ID_Menu', $id)->first();
        return view('pages.detailmenu', compact('menu'));
    }

    public function destroy($id){
        $menu = DB::table('menu')->where('ID_Menu', $id)->delete();
        Alert::success('Success', 'Data berhasil dihapus');
        return redirect('/menu');
    }
}
