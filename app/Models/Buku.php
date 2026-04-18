<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // Kita definisikan kolom mana saja yang boleh diisi
    protected $fillable = ['judul', 'penulis', 'harga', 'deskripsi', 'gambar'];
}