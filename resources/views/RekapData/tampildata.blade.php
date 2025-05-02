@extends('layouts.app')

@section('contents')
    <div class="container">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <h2>Rekap Data</h2>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

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
                            <form method="POST" action="{{ route('rekap.destroy', $r->id) }}" class="d-inline delete-form">
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
