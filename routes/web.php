<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RombelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard', [AdminController::class, 'index']);

Route::get('/dashboard/prodi', [ProdiController::class, 'index']);
Route::get('/dashboard/dosen', [DosenController::class, 'index']);
Route::get('/dashboard/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/dashboard/rombel', [RombelController::class, 'index']);