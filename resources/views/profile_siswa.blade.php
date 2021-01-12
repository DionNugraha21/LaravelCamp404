@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <div class="row" ml-2>
                    <h4 class="col-4">Nama</h4>
                    <h4><strong>{{$siswa->nama}}</strong></h4>
                </div>
                <div class="row" ml-2>
                    <h4 class="col-4">NIM</h4>
                    <h4><strong>{{$siswa->nim}}</strong></h4>
                </div>
                <div class="row" ml-2>
                    <h4 class="col-4">Tanggal Lahir</h4>
                    <h4><strong>{{$siswa->tgl_lahir}}</strong></h4>
                </div>
                <a href="{{route('siswa.index')}}" class="btn btn-danger mt-3 float-right">Back</a>
            </div>
        </div>
    </div>
@endsection