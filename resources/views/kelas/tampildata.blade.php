@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Daftar Kelas</h2>
        <a href="{{ route('input.kelas') }}" class="btn btn-primary mb-3">Tambah Kelas</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $k)
                    <tr>
                        <td>{{ $k->kelas_id }}</td>
                        <td>
                            <a href="{{ route('kelas.edit', $k->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" style="display:inline;">
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
