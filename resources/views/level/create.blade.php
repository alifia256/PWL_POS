@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('level') }}" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label for="level_kode" class="col-sm-2 col-form-label">Kode Level</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="level_kode" name="level_kode" value="{{ old('level_kode') }}" required>
                    @error('level_kode')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        
            <div class="form-group row">
                <label for="level_nama" class="col-sm-2 col-form-label">Nama Level</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="level_nama" name="level_nama" value="{{ old('level_nama') }}" required>
                    @error('level_nama')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <a class="btn btn-sm btn-default ml-1" href="{{ url('level') }}">Kembali</a>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush