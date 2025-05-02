@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Tambah Siswa</h2>

        @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
            </div>
            <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select class="form-control" id="kelas_id" name="kelas_id" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->kelas_id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="mapel_id">Mata Pelajaraan</label>
                <select class="form-control" id="mapel_id" name="mapel_id" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    @foreach ($mapel as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_mapel }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
    </div>
@endsection
