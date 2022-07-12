@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Kategori</h3>
        <form action="{{ url('/kategori/' . $row-cat_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="cat_name" value="{{ $row->cat_name }}"></>
            </div>
            <div class="mb-3">
                <label>Keterangan Kategori</label>
                <input type="text" class="form-control" name="cat_text" value="{{ $row->cat_text }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
