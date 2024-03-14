<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = DB::table('pelanggan')->get();

        $title = 'Peringatan';
        $text = 'Yakin ingin menghapus?';
        $icon = 'Question';
        confirmDelete($title, $text);

        return view('pages.pelanggan', compact('pelanggan'));
    }

    public function tambahpelanggan(){
        return view('pages.tambahpelanggan');
    }

    public function pelanggan(Request $request){
        $request->validate([
            'namaPelanggan' => 'required',
            'noTelepon' => 'required',
            'alamat' => 'required',
            'email' => 'required|email'
        ]);

        DB::table('pelanggan')->insert([
            'Nama_Pelanggan' => $request->namaPelanggan,
            'Nomor_Telepon' => $request->noTelepon,
            'Alamat' => $request->alamat,
            'Email' => $request->email
        ]);

        Alert::success('Sukses', 'Data berhasil disimpan');
        return redirect('/pelanggan');
    }

    public function show($id){
        $pelanggan = DB::table('pelanggan')->where('ID_Pelanggan', $id)->first();
        return view('pages.detailpelanggan', compact('pelanggan'));
    }

    public function edit($id){
        $pelanggan = DB::table('pelanggan')->where('ID_Pelanggan', $id)->first();
        return view('pages.editpelanggan', compact('pelanggan'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'namaPelanggan' => 'required',
            'noTelepon' => 'required',
            'alamat' => 'required',
            'email' => 'required|email'
        ]);

        DB::table('pelanggan')
            ->where('ID_Pelanggan', $id)
            ->update([
                'Nama_Pelanggan' => $request->namaPelanggan,
                'Nomor_Telepon' => $request->noTelepon,
                'Alamat' => $request->alamat,
                'Email' => $request->email
            ]);

        Alert::success('Sukses', 'Data berhasil diupdate');
        return redirect('/pelanggan');
    }

    public function destroy($id){
        $pelanggan = DB::table('pelanggan')->where('ID_Pelanggan', $id)->delete();
        Alert::success('Success', 'Data berhasil dihapus');
        return redirect('/pelanggan');
    }
}
