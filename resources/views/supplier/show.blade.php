@extends('layouts.template')

@section('content')

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($supplier)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                Data yang anda cari tidak ditemukan.
            </div>
            <a href="{{ url('supplier') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        @else
            <h5>Detail Supplier</h5>
            <table class="table table-bordered">
                <tr>
                    <th style="width: 150px;">ID</th>
                    <td>{{ $supplier->supplier_id }}</td>
                </tr>
                <tr>
                    <th>Kode</th>
                    <td>{{ $supplier->supplier_kode }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $supplier->supplier_nama }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $supplier->supplier_alamat }}</td>
                </tr>
            </table>
            <a href="{{ url('supplier') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        @endempty
    </div>
</div>

@endsection

@push('css')
@endpush

@push('js')
@endpush
