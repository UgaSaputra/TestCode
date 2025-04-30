@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Edit Data Kelas</h2>
        <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Tambahkan metode PUT untuk pembaruan data -->
            <div class="form-group">
                <label for="kelas_id">Nama Kelas</label>
                <input type="text" class="form-control" id="kelas_id" name="kelas_id" value="{{ old('kelas_id', $kelas->kelas_id) }}" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Perbarui</button>
        </form>
    </div>
@endsection
