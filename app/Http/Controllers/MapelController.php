<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function show()
    {
        return view('Mapel.tambahdata');
    }

    public function index()
    {
        $mapel = Mapel::all();
        return view('Mapel.tampildata', compact('mapel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:255',
        ]);

        Mapel::create([
            'nama_mapel' => $request->nama_mapel,
        ]);

        return redirect()->route('input.kelas')->with('success', 'Kelas berhasil ditambahkan!');
    }
    public function destroy(Mapel $mapel)
    {
        $mapel->delete();
        return redirect()->route('mapel.index');
    }
}
