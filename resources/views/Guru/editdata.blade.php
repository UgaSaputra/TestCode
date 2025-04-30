@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Edit Data Guru</h2>
        <form action="{{ route('guru.update', $guru->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Tambahkan metode PUT untuk pembaruan data -->
            <div class="form-group">
                <label for="nama_guru">Nama Guru</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ old('nama_guru', $guru->nama_guru) }}" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Perbarui</button>
        </form>
    </div>
@endsection
