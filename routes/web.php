<?php

use App\Http\Controllers\dompetController;
use App\Http\Controllers\stokController;
use App\Models\barang;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index', ['barang' => barang::all()->shuffle()->toArray()]);
// });

Route::get('/', [dompetController::class, 'index'])->name('kasir.index');

Route::get('/StokBarang', [stokController::class, 'index'])->name('stok.index');
Route::get('/FormTambahBarang', [stokController::class, 'create'])->name('stok.create');
Route::post('/TambahBarang', [stokController::class, 'store'])->name('stok.tambah');
Route::get('/MejaKasir', [dompetController::class, 'create'])->name('meja.kasir');
Route::post('/BayarKasir', [dompetController::class, 'store'])->name('pelanggan.bayar');
Route::get('/FormEdit/{id}/edit', [stokController::class, 'edit'])->name('form.edit');
Route::put('/AksiEdit/{id}/update', [stokController::class, 'update'])->name('aksi.edit');
Route::get('/AksiHapus/{id}/hapus', [stokController::class, 'destroy'])->name('aksi.hapus');

// Route::get('/BayarKasir', function() {
//     return view('mejaKasir');
// });
