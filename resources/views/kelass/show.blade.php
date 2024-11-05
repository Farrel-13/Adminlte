@extends('adminlte::page')

@section('title', 'Detail Kelas')

@section('content_header')
    <h1 class="m-0 text-dark">Detail Kelas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Informasi Kelas</h5>
                    <hr>
                    <div class="form-group">
                        <label for="id">ID</label>
                        <p id="id">{{ $kelas->id }}</p>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Kelas:</label>
                        <p id="nama">{{ $kelas->nama }}</p> <!-- Mengakses nama kelas secara langsung -->
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('kelass.index') }}" class="btn btn-default">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
