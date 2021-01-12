@extends('layouts.app')
@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Siswa</h3>
            </div>
            <div class="card-body">
                <form action="{{route('siswa.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Siswa">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" name="nim" id="nim" placeholder="NIM Siswa">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir Siswa">
                    </div>
                    <a href="{{route('siswa.index')}}" class="btn btn-danger float-right ml-2">Back</a>
                    <button type="submit" class="btn btn-primary float-right">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection