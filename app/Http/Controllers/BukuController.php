<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('bukus.index', compact('bukus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        Buku::create($request->all());
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('bukus.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil diupdate!');
    }

    public function destroy($id)
    {
        Buku::findOrFail($id)->delete();
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil dihapus!');
    }
}