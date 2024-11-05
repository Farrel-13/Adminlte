@extends('adminlte::page')

@section('title', 'Detail Kelas')

@section('content_header')
<h1 class="m-0 text-dark">INNER JOIN</h1>
@stop

@section('content')
<div class="row mb-3">
    <div class="col-12">
        <a href="{{ route('joins.inner') }}" class="btn btn-primary">
            Lihat Inner Join
        </a>
    </div>
</div>

<div class="mt-4">
    <h3>LEFT JOIN</h3> <!-- Judul tabel LEFT JOIN -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Jumlah Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelass as $kelas)
            <tr>
                <td>{{ $kelas->id }}</td>
                <td>{{ $kelas->nama }}</td>
                <td>{{ $kelas->jumlah_siswa }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@push('css')
<style>
    .btn-primary {
        margin-bottom: 20px;
    }
</style>
@endpush