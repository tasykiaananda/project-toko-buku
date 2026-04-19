<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // Ini bagian yang paling penting agar kolom tersimpan
    protected $fillable = ['judul', 'penulis', 'harga', 'deskripsi'];
}