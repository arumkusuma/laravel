@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 text-gray-800 ml-3">Edit Pelanggan</h1>
    <div class="p-3">
        <h3>Edit Data Pelanggan "{{ $pelanggan->Nama_Pelanggan }}"</h3>
        <form action="/pelanggan/{{ $pelanggan->ID_Pelanggan }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Pelanggan</label>
                <input type="text" style="width: 72rem;" class="form-control" name="namaPelanggan" value="{{ $pelanggan->Nama_Pelanggan }}" id="nama" placeholder="Masukkan nama">
                @error('namaPelanggan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nohp">Nomor Telepon</label>
                <input type="number" style="width: 72rem;" class="form-control" name="noTelepon" value="{{ $pelanggan->Nomor_Telepon }}" id="nohp" placeholder="Masukkan no hp">
                @error('noTelepon')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" style="width: 72rem;" class="form-control" name="alamat" value="{{ $pelanggan->Alamat }}" id="alamat" placeholder="Masukkan alamat">
                @error('alamat')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" style="width: 72rem;" class="form-control" name="email" value="{{ $pelanggan->Email }}" id="email" placeholder="Masukkan email">
                @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="/pelanggan" class="btn btn-success my-3">Kembali</a>
            </div>
        </form>
    </div>
@endsection
