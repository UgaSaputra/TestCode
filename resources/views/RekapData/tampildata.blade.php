@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Rekap Data</h2>
        <a href="{{ route('input.rekap') }}" class="btn btn-primary mb-3">Tambah Rekap</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Siswa</th>
                    <th>Kelas</th>
                    <th>Guru</th>
                    <th>Tanggal</th>
                    <th>Jumlah Siswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekap as $r)
                    <tr>
                        <td>{{ $r->siswa->nama_siswa ?? 'Tidak ditemukan' }}</td>
                        <td>{{ $r->kelas->kelas_id ?? 'Tidak ditemukan' }}</td>
                        <td>{{ $r->guru->nama_guru ?? 'Tidak ditemukan' }}</td>
                        <td>{{ $r->tanggal }}</td>
                        <td>{{ $r->jumlah_siswa }}</td>
                        <td>
                            {{-- <a href="{{ route('rekap.edit', $r->id) }}" class="btn btn-warning">Edit</a> --}}
                            <form action="{{ route('rekap.destroy', $r->id) }}" method="POST" style="display:inline;">
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
