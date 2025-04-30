<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use App\Models\rekapdata;
use App\Models\Kelas;
use Illuminate\Http\Request;

class RekapdataController extends Controller
{
    public function index()
    {
        $rekap = rekapdata::all();
        return view('RekapData.tampildata', compact('rekap'));
    }

    public function show()
    {
        $siswa = Siswa::all();
        $guru = Guru::all();
        $kelas = Kelas::all();
        return view('RekapData.tambahdata', compact('siswa', 'guru', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'guru_id' => 'required|exists:gurus,id',
            'kelas_id' => 'required|exists:kelas,id',
            'tanggal' => 'required|date',
            'jumlah_siswa' => 'required|integer',
        ]);

        rekapdata::create($request->all());
        return redirect()->route('input.rekap');
    }

    public function destroy($id)
{
    $rekap = rekapdata::findOrFail($id);
    $rekap->delete();

    return redirect()->route('rekap.data')->with('success', 'Data berhasil dihapus.');
}

}
