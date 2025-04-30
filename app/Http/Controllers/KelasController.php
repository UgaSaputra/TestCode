<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function show() {
        return view('kelas.tambahdata');
    }

    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.tampildata', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required|string|max:255',
        ]);

        Kelas::create([
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('input.kelas')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect()->route('kelas.index');
    }

    public function edit($id) {
        $kelas = kelas::findOrfail($id);
        return view('Guru.editdata', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:255',
        ]);

        $kelas = kelas::findOrFail($id);
        $kelas->update($request->all());

        return redirect()->route('kelas.data')->with('success', 'Data berhasil diperbarui');
    }
}
