@extends('layouts.template')

@section('content')

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        @empty($kategori)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
            <a href="{{ url('kategori') }}" class="btn btn-sm btn-secondary mt-2">Kembali</a>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-sm w-100">
                    <tbody>
                        <tr>
                            <th style="width: 30%;">ID</th>
                            <td style="width: 70%;">{{ $kategori->kategori_id }}</td>
                        </tr>
                        <tr>
                            <th>Kode Kategori</th>
                            <td>{{ $kategori->kategori_kode }}</td>
                        </tr>
                        <tr>
                            <th>Nama Kategori</th>
                            <td>{{ $kategori->kategori_nama }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{ url('kategori') }}" class="btn btn-sm btn-secondary mt-3">Kembali</a>
        @endempty
    </div>
</div>

@endsection

@push('css')
@endpush

@push('js')
@endpush
