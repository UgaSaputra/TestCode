@extends('layouts.app')

@section('contents')
    <div class="container">
        <h2>Daftar Guru</h2>
        <a href="{{ route('input.guru') }}" class="btn btn-primary mb-3">Tambah Guru</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Guru</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guru as $g)
                    <tr>
                        <td>{{ $g->nama_guru }}</td>
                        <td>
                            <a href="{{ route('guru.edit', $g->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('guru.destroy', $g->id) }}" method="POST" style="display:inline;">
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
