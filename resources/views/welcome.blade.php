@extends('layout.app')

{{--Customize layout section --}}

@section('subtitle', 'welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{--Customize body: main page content --}}

@section('conten_body')
    <p>Welcome to this beautiful admin panel.</p>
@stop

{{--Push extra CSS --}}

@push('css')
    {{--Add here extra stylesheet--}}
    {{--<link rel="stylesheet"href = "/css/admin_custom.css"> --}}
@endpush

{{--Push extra script --}}
@push('js')
    <script>console.log("Hi,I'm using the laravel-AdminLTE package!"); </script>
@endpush
