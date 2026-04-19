<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

// Route untuk resource yang sudah mencakup index, create, store, edit, update, destroy
Route::resource('bukus', BukuController::class);

// Alias untuk route root ke index
Route::get('/', function () {
    return redirect()->route('bukus.index');
});