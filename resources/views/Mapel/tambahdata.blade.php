@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Tambah Mapel</h2>

        @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

        <form action="{{ route('mapel.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_mapel">Mapel</label>
                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
    </div>
@endsection
