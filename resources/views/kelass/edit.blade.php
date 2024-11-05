@extends('adminlte::page')

@section('title', 'Edit Kelas')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Kelas</h1>
@stop

@section('content')
    <form action="{{route('kelass.update', $kelas)}}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputNama">Nama Kelas</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputNama" placeholder="Nama Kelas" name="nama" value="{{$kelas->nama ?? old('nama')}}">
                            @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('kelass.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
