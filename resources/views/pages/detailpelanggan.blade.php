@extends('layouts.admin')

@section('content')
    <div class="p-3">
        <h1 class="mb-4 text-gray-800">Detail Pelanggan</h1>
        <div class="card" style="width: 36rem;">
            <div class="card-body">
                <h3 class="card-title mb-3">Detail Pelanggan "{{ $pelanggan->Nama_Pelanggan }}"</h3>
                <h5><strong>ID Pelanggan</strong> : {{ $pelanggan->ID_Pelanggan }}</h5>
                <h5><strong>Nama Pelanggan</strong> : {{ $pelanggan->Nama_Pelanggan }}</h5>
                <h5><strong>Nomor Telepon</strong> : {{ $pelanggan->Nomor_Telepon }}</h5>
                <h5><strong>Alamat</strong> : {{ $pelanggan->Alamat }}</h5>
                <h5><strong>Email</strong> : {{ $pelanggan->Email }}</h5>
            </div>
        </div>
        <a href="/pelanggan" class="btn btn-primary my-3">Kembali</a>
    </div>
@endsection
