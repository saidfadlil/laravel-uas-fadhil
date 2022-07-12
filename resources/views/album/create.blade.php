@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Album</h3>
        <form action="{{ url('/album') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Id Photo</label>
                <input type="text" class="form-control" name="album_id_photo" value="{{ $row->album_id_photo }}"></>
            </div>
            <div class="mb-3">
                <label>Judul Album</label>
                <input type="text" class="form-control" name="album_title" value="{{ $row->album_title }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
