<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/pengguna/tambah', [PenggunaController::class, 'tambah'])->name('pengguna.tambah');
Route::post('/pengguna/simpan', [PenggunaController::class, 'simpan']);
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/edit/{id}', [PenggunaController::class, 'edit'])->name('pengguna.edit');
Route::put('/pengguna/update/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
Route::delete('/pengguna/hapus/{id}', [PenggunaController::class, 'hapus'])->name('pengguna.hapus');