<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function show() {
        $kelas = Kelas::all();
        return view('siswa.tambahdata', compact('kelas'));
    }

    public function index() {
        $siswa = Siswa::with('kelas')->get();
        return view('siswa.tampildata', compact('siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        siswa::create($request->all());
        return redirect()->route('input.siswa');
    }
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.data');
    }

    public function edit($id) {
        $siswa = siswa::findOrFail($id);
        $kelas = Kelas::all();

        return view('siswa.editdata', compact('siswa', 'kelas'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama_siswa' => 'required|string|max:255',
        'kelas_id' => 'required|exists:kelas,id',
    ]);

    $siswa = siswa::findOrFail($id);
    $siswa->update($request->all());

    return redirect()->route('siswa.data')->with('success', 'Data siswa berhasil diperbarui.');
}

}
