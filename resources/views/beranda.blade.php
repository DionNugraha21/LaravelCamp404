@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Hello World!</h1>
        <p class="lead">Selamat Datang di Portal Utama Camp404</p>
        <hr class="my-4">
        <a href="{{url('/info_kegiatan')}}" class="btn btn-dark">Info Kegiatan</a>
        <a href="{{url('/data_mahasiswa')}}" class="btn btn-primary">Data Mahasiswa</a> 
    </div>
@endsection