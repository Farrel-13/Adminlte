@extends('adminlte::page')

@section('title', 'List Kelas')

@section('content_header')
<h1 class="m-0 text-dark">List Kelas</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <a href="{{route('kelass.create')}}" class="btn btn-primary mb-2">
                    Tambah
                </a>

                <table class="table table-hover table-bordered table-stripped" id="example2">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kelas</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kelass as $key => $kelas)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$kelas->nama}}</td>
                            <td>
                                <a href="{{route('kelass.edit', $kelas)}}" class="btn btn-primary btn-xs">
                                    Edit
                                </a>
                                <a href="{{route('kelass.destroy', $kelas)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                    Delete
                                </a>
                                </a>
                                <a href="{{ route('kelass.show', $kelas->id) }}" class="btn btn-info btn-xs">Show</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

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
        if (confirm('Apakah anda yakin akan menghapus data ? ')) {
            $("#delete-form").attr('action', $(el).attr('href'));
            $("#delete-form").submit();
        }
    }
</script>
@endpush