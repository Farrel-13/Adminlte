@extends('adminlte::page')

@section('title', 'Tambah Siswa')

@section('content_header')
<h1 class="m-0 text-dark">Tambah Siswa</h1>
@stop

@section('content')
<form action="{{ route('siswas.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputNama" placeholder="Nama lengkap" name="nama" value="{{ old('nama') }}">
                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNIS">NIS</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="exampleInputNIS" placeholder="Masukkan NIS" name="nis" value="{{ old('nis') }}">
                        @error('nis') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTanggalLahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="exampleInputTanggalLahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputKelas">Kelas</label>
                        <select class="form-control @error('id_kelas') is-invalid @enderror" id="exampleInputKelas" name="id_kelas">
                            <option value="">Pilih Kelas</option>
                            @foreach($kelass as $kelas) <!-- Pastikan untuk menggunakan $kelass, bukan $siswas -->
                            <option value="{{ $kelas->id }}">{{ $kelas->nama }}</option> <!-- Ganti $siswas->name dengan $kelas->nama -->
                            @endforeach
                        </select>
                        @error('id_kelas') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('siswas.index') }}" class="btn btn-default">Batal</a>
                </div>
            </div>
        </div>
    </div>
</form>
@stop