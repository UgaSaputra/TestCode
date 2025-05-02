<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function show() {
        return view('Guru.tambahdata');
    }

    public function data() {
        $guru = guru::all();
        return view('Guru.tampildata', compact('guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:255',
        ]);

        guru::create($request->all());
        return redirect()->route('input.guru')->with('success', 'Data berhasil disimpan');
    }
    public function destroy(Guru $id)
    {
        $id->delete();
        return redirect()->route('guru.data');
    }

    public function edit($id) {
        $guru = guru::findOrFail($id);

        return view('Guru.editdata', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:255',
        ]);

        $guru = guru::findOrFail($id);
        $guru->update($request->all());

        return redirect()->route('guru.data')->with('success', 'Data berhasil diperbarui');
    }
}
