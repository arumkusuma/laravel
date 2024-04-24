@extends('layouts.admin')

@section('tabel')
    <div class="p-3">
        <h1 class="mb-3 text-gray-800">Data Kategori</h1>
        <a href="/kategori/create" class="btn btn-primary my-3">Tambah Kategori</a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($kategori as $key => $value)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $value->Nama_Kategori }}</td>
                    <td class="mr-3">
                        <a href="/kategori/{{ $value->ID_Kategori }}" class="btn btn-info">Detail </a>
                        <a href="/kategori/{{ $value->ID_Kategori }}/edit" class="btn btn-success">Edit</a>
                        <form onclick="return confirm('Yakin ingin menghapus?')" action="/kategori/{{ $value->ID_Kategori }}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" data-confirm-delete="true" value="Delete">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @empty
                <td colspan="6" class="text-center">Tidak ada data.</td>
            @endforelse
        </table>
    </div>
@endsection


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
