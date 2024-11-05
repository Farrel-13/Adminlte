@extends('adminlte::page')

@section('title', 'List Siswa')

@section('content_header')
<h1 class="m-0 text-dark">List Siswa</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="{{ route('siswas.create') }}" class="btn btn-primary mb-2">
                    Tambah
                </a>

                <table class="table table-hover table-bordered table-striped" id="example2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Tanggal Lahir</th>
                            <th>Kelas</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siswas as $key => $siswa)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-m-Y') }}</td>
                            <td>{{ $siswa->kelas->nama ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('siswas.edit', $siswa) }}" class="btn btn-primary btn-xs">Edit</a>
                                <a href="{{ route('siswas.destroy', $siswa) }}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">Delete</a>
                                <a href="{{ route('siswas.show', $siswa->id) }}" class="btn btn-info btn-xs">Show</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@push('js')
<form action="" id="delete-form" method="post">
    @method('delete')
    @csrf
</form>
<script>
    $('#example2').DataTable({
        "responsive": true,
    });

    function notificationBeforeDelete(event, el) {
        event.preventDefault();
        if (confirm('Apakah anda yakin akan menghapus data?')) {
            $("#delete-form").attr('action', $(el).attr('href'));
            $("#delete-form").submit();
        }
    }
</script>
@endpush