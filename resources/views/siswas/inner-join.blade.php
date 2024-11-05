@extends('adminlte::page')

@section('title', 'Siswa Inner Join')

@section('content_header')
<h1 class="m-0 text-dark">Siswa Inner Join dengan Kelas</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Siswa</th>
                            <th>Nama Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswas as $siswa)
                        <tr>
                            <td>{{ $siswa->id }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->kelas->nama }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@push('css')
<style>
    .btn-secondary {
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 10px;
    }
    th, td {
        padding: 12px;
        text-align: left;
        background-color: #ffffff;
        border: 1px solid #dee2e6;
    }
    th {
        background-color: #f8f9fa;
        font-weight: bold;
    }
</style>
@endpush