@extends('layouts.app')

@section('contents')
    <div class="container">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <h2>Daftar Guru</h2>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
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
                                <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function () {
                const form = this.closest('form');
                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: "Data akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
