@extends('layouts.app')
@section('content')
    <div class="container my-3">
            <h3>Data Mahasiswa</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dion Nugraha</td>
                        <td>41170471</td>
                        <td>21 September 1999</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Marcos Flores</td>
                        <td>41170499</td>
                        <td>01 Januari 1986</td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection