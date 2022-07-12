@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Post</h3>
        <form action="{{ url('/post/' . $row->post_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Id Kategori</label>
                <input type="text" class="form-control" name="post_id_cat" value="{{ $row->post_id_cat }}"></>
            </div>
            <div class="mb-3">
                <label>Judul Post</label>
                <input type="text" class="form-control" name="post_title" value="{{ $row->post_title }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
