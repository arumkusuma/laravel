@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 text-gray-800 ml-3">Edit Kategori</h1>
    <div class="p-3">
        <h3>Edit Data Kategori "{{ $kategori->Nama_Kategori }}"</h3>
        <form action="/kategori/{{ $kategori->ID_Kategori }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="namaKategori">Nama Kategori</label>
                <input type="text" style="width: 72rem;" class="form-control" name="namaKategori" value="{{ $kategori->Nama_Kategori }}" id="namaKategori" placeholder="Masukkan nama">
                @error('namaKategori')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="/kategori" class="btn btn-success my-3">Kembali</a>
            </div>
        </form>
    </div>
@endsection
