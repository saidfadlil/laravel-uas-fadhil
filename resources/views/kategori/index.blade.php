@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Kategori
        <a class="btn btn-primary btn-sm float-end" href="{{ url('kategori/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>KETERANGAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->cat_id }}</td>
        <td>{{ $row->cat_name }}</td>
        <td>{{ $row->cat_text }}</td>
        <td><a href="{{ url('kategori/' . $row->cat_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('kategori/' . $row->cat_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection