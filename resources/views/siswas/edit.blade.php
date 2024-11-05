@extends('adminlte::page')

@section('title', 'Edit Siswa')

@section('content_header')
<h1 class="m-0 text-dark">Edit Siswa</h1>
@stop

@section('content')
<form action="{{ route('siswas.update', $siswa) }}" method="post">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputNama" placeholder="Nama lengkap" name="nama" value="{{ $siswa->nama ?? old('nama') }}">
                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNIS">NIS</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="exampleInputNIS" placeholder="Masukkan NIS" name="nis" value="{{ $siswa->nis ?? old('nis') }}">
                        @error('nis') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTanggalLahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="exampleInputTanggalLahir" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir ?? old('tanggal_lahir') }}">
                        @error('tanggal_lahir') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputKelas">Kelas</label>
                        <select name="id_kelas" id="kelas" class="form-control">
                            @foreach($kelass as $kelas)
                            <option value="{{ $kelas->id }}" {{ $siswa->id_kelas == $kelas->id ? 'selected' : '' }}>
                                {{ $kelas->nama }}
                            </option>
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