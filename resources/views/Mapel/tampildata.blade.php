@extends('layouts.app')

@section('contents')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="container">
        <h2>Daftar Mata Pelajaraan</h2>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <a href="{{ route('input.mapel') }}" class="btn btn-primary mb-3">Tambah Kelas</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mata pelajaraan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mapel as $k)
                    <tr>
                        <td>{{ $k->nama_mapel }}</td>
                        <td>
                            <a href="{{ route('mapel.edit', $k->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('mapel.destroy', $k->id) }}" method="POST" style="display:inline;">
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
