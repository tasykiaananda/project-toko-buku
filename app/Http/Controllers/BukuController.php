<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        // Mengambil semua data dari tabel 'bukus'
        $bukus = Buku::all();
        // Mengirim data ke view 'bukus.index'
        return view('bukus.index', compact('bukus'));
    }

    // Menyimpan data buku baru ke database
    public function store(Request $request)
    {
        // Validasi agar field tidak boleh kosong
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
        ]);

        // Menyimpan data
        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        // Kembali ke halaman daftar buku
        return redirect()->route('bukus.index');
    }

    // Menghapus data buku
    public function destroy($id)
    {
        // Mencari buku berdasarkan ID
        $buku = Buku::findOrFail($id);
        // Menghapus data
        $buku->delete();

        // Kembali ke halaman daftar buku
        return redirect()->route('bukus.index');
    }
}