@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Tambah Guru</h2>
        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_guru">Nama Guru</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
    </div>
@endsection
