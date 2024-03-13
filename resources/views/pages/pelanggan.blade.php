@extends('layouts.admin')

@section('tabel')
<div class="p-3">
    <h1 class="mb-3 text-gray-800">Data Pelanggan</h1>
    <a href="/tambahpelanggan" class="btn btn-primary my-3">Tambah Pelanggan</a>
    <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Pelanggan</th>
              <th scope="col">Nomor Telepon</th>
              <th scope="col">Alamat</th>
              <th scope="col">Email</th>
              <th scope="col">Aksi</th>
          </tr>
          </thead>
          <tbody>
          @forelse($pelanggan as $key => $value)
              <tr>
                  <th scope="row">{{ $key + 1 }}</th>
                  <td>{{ $value->Nama_Pelanggan }}</td>
                  <td>{{ $value->Nomor_Telepon }}</td>
                  <td>{{ $value->Alamat }}</td>
                  <td>{{ $value->Email }}</td>
                  <td class="mr-3">
                      <a href="/pelanggan/{{ $value->ID_Pelanggan }}" class="btn btn-info">Detail</a>
                      <a href="/pelanggan/{{ $value->ID_Pelanggan }}/edit" class="btn btn-success">Edit</a>
                      <a href="/pelanggan/{{ $value->ID_Pelanggan }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
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
