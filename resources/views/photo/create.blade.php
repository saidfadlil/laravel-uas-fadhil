@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Photo</h3>
        <form action="{{ url('/photo') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Id Post</label>
                <input type="text" class="form-control" name="photo_id_post" value="{{ $row->photo_id_post }}"></>
            </div>
            <div class="mb-3">
                <label>Judul Photo</label>
                <input type="text" class="form-control" name="photo_title" value="{{ $row->photo_title }}"></>
            </div>
            <div class="mb-3">
                <label>File Photo</label>
                <input type="text" class="form-control" name="photo_file" value="{{ $row->photo_file }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
