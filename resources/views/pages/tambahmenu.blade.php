@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 text-gray-800 ml-3">Tambah Menu</h1>

    <form action="/menu" method="POST">
        @csrf
        <div class="form-group p-3">
            <label>Nama Menu</label>
            <input type="text" style="width: 72rem;" name="namaMenu" class="form-control" placeholder="Masukkan nama">
            @error('namaMenu')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label>Harga</label>
            <input type="number" style="width: 72rem;" name="harga" class="form-control" placeholder="Masukkan harga"   >
            @error('harga')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label>Deskripsi</label>
            <input type="text" style="width: 72rem;" name="deskripsi" class="form-control" placeholder="Masukkan deskripsi">
            @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label>Kategori</label>
            <input type="text" style="width: 72rem;" name="kategori" class="form-control" placeholder="Masukkan kategori">
            @error('kategori')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
