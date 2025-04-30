@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Edit Siswa</h2>
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
            </div>
            <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select class="form-control" id="kelas_id" name="kelas_id" required>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}" @if ($k->id == $siswa->kelas_id) selected @endif>{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-warning mt-3">Update</button>
        </form>
    </div>
@endsection
