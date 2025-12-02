<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', [PegawaiController::class, 'index'])->name('home');

Route::get('/pegawai/tambah', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');

Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');

Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.delete');
