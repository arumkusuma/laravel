@extends('layouts.admin')

@section('tabel')
    <div class="p-3">
        <h1 class="mb-3 text-gray-800">Data Menu</h1>
        <a href="/tambahmenu" class="btn btn-primary my-3">Tambah Menu</a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Harga</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Kategori</th>
            </tr>
            </thead>
            <tbody>
            @forelse($menu as $key => $value)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $value->Nama_Menu }}</td>
                    <td>{{ $value->Harga }}</td>
                    <td>{{ $value->Deskripsi }}</td>
                    <td>{{ $value->Kategori }}</td>
                    <td class="mr-3">
                        <a href="/menu/{{ $value->ID_Menu }}" class="btn btn-info">Detail</a>
                        <a href="/menu/{{ $value->ID_Menu }}/edit" class="btn btn-success">Edit</a>
                        <a href="/menu/{{ $value->ID_Menu }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                    </td>
                </tr>
            </tbody>
            @empty
                <td colspan="6" class="text-center">Tidak ada data.</td>
            @endforelse
        </table>
    </div>
@endsection


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
