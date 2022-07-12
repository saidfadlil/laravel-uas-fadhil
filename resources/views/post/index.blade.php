@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Post
        <a class="btn btn-primary btn-sm float-end" href="{{ url('post/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID KATEGORI</th>
            <th>TITLE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->post_id }}</td>
        <td>{{ $row->post_id_cat }}</td>
        <td>{{ $row->post_title }}</td>
        <td><a href="{{ url('post/' . $row->post_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('post/' . $row->post_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection