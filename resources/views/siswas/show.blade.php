@extends('adminlte::page')

@section('title', 'Detail Siswa')

@section('content_header')
    <h1 class="m-0 text-dark">Detail Siswa</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Informasi Siswa</h5>
                    <hr>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <p id="nama">{{ $siswa->nama }}</p>
                    </div>

                    <div class="form-group">
                        <label for="nis">NIS:</label>
                        <p id="nis">{{ $siswa->nis }}</p>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <p id="tanggal_lahir">{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-m-Y') }}</p>
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas:</label>
                        <p id="kelas">{{ $siswa->kelas->nama ?? 'N/A' }}</p>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('siswas.index') }}" class="btn btn-default">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
