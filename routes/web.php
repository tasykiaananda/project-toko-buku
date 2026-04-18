<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini tempat kamu mendefinisikan URL untuk website toko buku kamu.
|
*/

// Halaman utama (redirect ke daftar buku)
Route::get('/', function () {
    return redirect()->route('bukus.index');
});

// Route CRUD Buku
// Route::get    -> Menampilkan halaman (index, create, edit)
// Route::post   -> Menyimpan data baru
// Route::put    -> Mengupdate data yang ada
// Route::delete -> Menghapus data
Route::get('/buku', [BukuController::class, 'index'])->name('bukus.index');
Route::post('/buku', [BukuController::class, 'store'])->name('bukus.store');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('bukus.edit');
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('bukus.update');
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('bukus.destroy');