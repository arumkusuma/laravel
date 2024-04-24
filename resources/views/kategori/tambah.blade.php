@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 text-gray-800 ml-3">Tambah Kategori</h1>

    <form action="/kategori" method="POST">
        @csrf
        <div class="form-group p-3">
            <label>Nama Kategori</label>
            <input type="text" name="namaKategori" style="width: 72rem;" class="form-control" placeholder="Masukkan nama">
            @error('namaKategori')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/kategori" class="btn btn-success my-3">Kembali</a>
        </div>
    </form>
@endsection
