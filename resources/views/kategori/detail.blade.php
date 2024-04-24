@extends('layouts.admin')

@section('content')
    <div class="p-3">
        <h1 class="mb-4 text-gray-800">Detail Kategori</h1>
        <div class="card" style="width: 36rem;">
            <div class="card-body">
                <h3 class="card-title mb-3">Detail Kategori "{{ $kategori->Nama_Kategori }}"</h3>
                <h5><strong>ID Kategori</strong> : {{ $kategori->ID_Kategori }}</h5>
                <h5><strong>Nama Kategori</strong> : {{ $kategori->Nama_Kategori }}</h5>
            </div>
        </div>
        <a href="/kategori" class="btn btn-primary my-3">Kembali</a>
    </div>
@endsection
