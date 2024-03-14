@extends('layouts.admin')

@section('content')
    <h1 class="mb-3 text-gray-800 ml-3">Edit Menu</h1>
    <div class="p-3">
        <h3>Edit Data Menu "{{$menu->Nama_Menu}}"</h3>
        <form action="/menu/{{$menu->ID_Menu}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="namaMenu">Nama Menu</label>
                <input type="text" style="width: 72rem;" class="form-control" name="namaMenu" value="{{$menu->Nama_Menu}}" id="namaMenu" placeholder="Masukkan nama menu">
                @error('namaMenu')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" style="width: 72rem;" class="form-control" name="harga" value="{{$menu->Harga}}" id="harga" placeholder="Masukkan harga">
                @error('harga')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" style="width: 72rem;" class="form-control" name="deskripsi" value="{{$menu->Deskripsi}}" id="deskripsi" placeholder="Masukkan deskripsi">
                @error('deskripsi')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" style="width: 72rem;" class="form-control" name="kategori" value="{{$menu->Kategori}}" id="kategori" placeholder="Masukkan kategori">
                @error('kategori')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="/menu" class="btn btn-success my-3">Kembali</a>
            </div>
        </form>
    </div>
@endsection
