@extends('adminlte::page')

@section('title', 'List Wisata')

@section('content_header')
    <h1 class="m-0 text-dark">List Wisata</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{ route('wisata.create') }}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Rating</th>
                                <th>Harga Diskon</th>
                                <th>Harga Normal</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wisatas as $key => $wisata)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $wisata->nama }}</td>
                                    <td>{{ $wisata->bintang }}</td>
                                    <td>{{ $wisata->harga_disc }}</td>
                                    <td>{{ $wisata->harga_normal }}</td>
                                    <td>
                                        <a href="{{ route('wisata.edit', $wisata) }}" class="btn btn-primary btn-xs">
                                            Edit
                                        </a>
                                        <a href="{{ route('wisata.destroy', $wisata) }}"
                                            onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                            Delete
                                        </a>
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
