@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Tambah Rekap</h2>

        @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

        <form action="{{ route('rekap.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="siswa_id">Siswa</label>
                <select class="form-control" id="siswa_id" name="siswa_id" required>
                    <option value="" disabled selected>Pilih Siswa</option>
                    @foreach ($siswa as $s)
                        <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="guru_id">Guru</label>
                <select class="form-control" id="guru_id" name="guru_id" required>
                    <option value="" disabled selected>Pilih Guru</option>
                    @foreach ($guru as $g)
                        <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                    @endforeach
                </select>
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
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="jumlah_siswa">Jumlah Siswa</label>
                <input type="number" class="form-control" id="jumlah_siswa" name="jumlah_siswa" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
    </div>
@endsection
