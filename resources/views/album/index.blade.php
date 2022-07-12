@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Album
        <a class="btn btn-primary btn-sm float-end" href="{{ url('album/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID PHOTO</th>
            <th>TITLE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->album_id }}</td>
        <td>{{ $row->album_id_photo }}</td>
        <td>{{ $row->album_title }}</td>
        <td><a href="{{ url('album/' . $row->album_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('album/' . $row->album_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection