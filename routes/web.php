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

// Create
Route::get('/dashboard/prodi/create', [ProdiController::class, 'create']);
Route::get('/dashboard/dosen/create', [DosenController::class, 'create']);
Route::get('/dashboard/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::get('/dashboard/rombel/create', [RombelController::class, 'create']);

//Store
Route::post('/dashboard/prodi/store', [ProdiController::class, 'store']);
Route::post('/dashboard/dosen/store', [DosenController::class, 'store']);
Route::post('/dashboard/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::post('/dashboard/rombel/store', [RombelController::class, 'store']);

//show
Route::get('/dashboard/prodi/show/{id}', [ProdiController::class, 'show']);
Route::get('/dashboard/dosen/show/{nidn}', [DosenController::class, 'show']);
Route::get('/dashboard/mahasiswa/show/{nim}', [MahasiswaController::class, 'show']);
Route::get('/dashboard/rombel/show/{id}', [RombelController::class, 'show']);

//edit
Route::get('/dashboard/prodi/edit/{id}', [ProdiController::class, 'edit']);
Route::get('/dashboard/dosen/edit/{nidn}', [DosenController::class, 'edit']);
Route::get('/dashboard/mahasiswa/edit/{nim}', [MahasiswaController::class, 'edit']);
Route::get('/dashboard/rombel/edit/{id}', [RombelController::class, 'edit']);

//update
Route::put('/dashboard/prodi/update/{id}', [ProdiController::class, 'update']);
Route::put('/dashboard/dosen/update/{nidn}', [DosenController::class, 'update']);
Route::put('/dashboard/mahasiswa/update/{nim}', [MahasiswaController::class, 'update']);
Route::put('/dashboard/rombel/update/{id}', [RombelController::class, 'update']);


//destroy
Route::delete('/dashboard/prodi/destroy/{id}', [ProdiController::class, 'destroy']);
Route::delete('/dashboard/dosen/destroy/{nidn}', [DosenController::class, 'destroy']);
Route::delete('/dashboard/mahasiswa/destroy/{nim}', [MahasiswaController::class, 'destroy']);
Route::delete('/dashboard/rombel/destroy/{id}', [RombelController::class, 'destroy']);


