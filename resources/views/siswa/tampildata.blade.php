@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Daftar Siswa</h2>
        <a href="{{ route('input.siswa') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $s->nama_siswa }}</td>
                        <td>{{ $s->kelas->kelas_id ?? '-' }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
