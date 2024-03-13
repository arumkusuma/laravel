@extends('layouts.admin')

@section('content')
    <div class="p-3">
        <h1 class="mb-4 text-gray-800">Detail Menu</h1>
        <div class="card" style="width: 36rem;">
            <div class="card-body">
                <h3 class="card-title mb-3">Detail Menu "{{ $menu->Nama_Menu }}"</h3>
                <h5><strong>ID Menu</strong> : {{ $menu->ID_Menu }}</h5>
                <h5><strong>Nama Menu</strong> : {{ $menu->Nama_Menu }}</h5>
                <h5><strong>Harga</strong> : {{ $menu->Harga }}</h5>
                <h5><strong>Deskripsi</strong> : {{ $menu->Deskripsi }}</h5>
                <h5><strong>Kategori</strong> : {{ $menu->Kategori }}</h5>
            </div>
        </div>
        <a href="/menu" class="btn btn-primary my-3">Kembali</a>
    </div>
@endsection
