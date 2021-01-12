@extends('layouts.app')
@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <a href="{{route('siswa.create')}}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Tanggal Lahir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data_siswa as $mahasiswa)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$mahasiswa->nama}}</td>
                            <td>{{$mahasiswa->nim}}</td>
                            <td>{{$mahasiswa->tgl_lahir}}</td>
                            <td>
                                <div class="row">
                                    <a href="{{route('siswa.show', $mahasiswa->id)}}" class="btn btn-info btn-sm mr-2">Detail</a>
                                    <a href="{{route('siswa.edit', $mahasiswa->id)}}" class="btn btn-success btn-sm mr-2">Edit</a>
                                    <form onsubmit="return confirm('Do you really want to submit the form?');"  action="{{route('siswa.destroy', $mahasiswa->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection