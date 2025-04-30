@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Tambah Kelas</h2>
        <form action="{{ route('kelas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kelas_id">Nama Kelas</label>
                <input type="text" class="form-control" id="kelas_id" name="kelas_id" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
    </div>
@endsection
