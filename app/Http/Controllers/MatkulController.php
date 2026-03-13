<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $matkuls = Matkul::all();
        return view('matkul.index', compact('matkuls'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        Matkul::create($request->all());
        return redirect()->route('matkul.index')->with('success', 'Matkul berhasil ditambahkan!');
    }

    public function edit(Matkul $matkul)
    {
        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, Matkul $matkul)
    {
        $matkul->update($request->all());
        return redirect()->route('matkul.index')->with('success', 'Matkul berhasil diupdate!');
    }

    public function destroy(Matkul $matkul)
    {
        $matkul->delete();
        return redirect()->route('matkul.index')->with('success', 'Matkul berhasil dihapus!');
    }
}
