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
                <a href="{{ url('kategori') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            </div>
        @else
            <form method="POST" action="{{ url('kategori/' . $kategori->kategori_id) }}" class="form-horizontal">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="kategori_kode" class="col-2 col-form-label">Kode Kategori</label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="kategori_kode" name="kategori_kode"
                            value="{{ old('kategori_kode', $kategori->kategori_kode) }}" required>
                        @error('kategori_kode')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kategori_nama" class="col-2 col-form-label">Nama Kategori</label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="kategori_nama" name="kategori_nama"
                            value="{{ old('kategori_nama', $kategori->kategori_nama) }}" required>
                        @error('kategori_nama')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-10 offset-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('kategori') }}" class="btn btn-secondary ml-2">Kembali</a>
                    </div>
                </div>
            </form>
        @endempty

    </div>
</div>

@endsection

@push('css')
@endpush

@push('js')
@endpush
