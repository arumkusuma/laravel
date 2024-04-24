@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 text-gray-800 ml-3">Tambah Pelanggan</h1>

    <form action="/pelanggan" method="POST">
        @csrf
        <div class="form-group p-3">
            <label>Nama Pelanggan</label>
            <input type="text" style="width: 72rem;" name="namaPelanggan" class="form-control" placeholder="Masukkan nama">
            @error('namaPelanggan')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
                <label>Nomor Telepon</label>
                <input type="number" style="width: 72rem;" name="noTelepon" class="form-control" placeholder="Masukkan nomor telepon"   >
                @error('noTelepon')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group p-3">
            <label>Alamat</label>
            <input type="text" style="width: 72rem;" name="alamat" class="form-control" placeholder="Masukkan alamat">
            @error('alamat')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label>Email</label>
            <input type="email" style="width: 72rem;" name="email" class="form-control" placeholder="Masukkan email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/pelanggan" class="btn btn-success my-3">Kembali</a>
        </div>
    </form>
@endsection
