@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Photo
        <a class="btn btn-primary btn-sm float-end" href="{{ url('photo/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID POST</th>
            <th>TITLE</th>
            <th>FILE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->photo_id }}</td>
        <td>{{ $row->photo_id_post }}</td>
        <td>{{ $row->photo_title }}</td>
        <td>{{ $row->photo_file }}</td>
        <td><a href="{{ url('photo/' . $row->photo_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('photo/' . $row->photo_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection