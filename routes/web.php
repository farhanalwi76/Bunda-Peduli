<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RombelController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    
        // Prodi
        Route::prefix('/prodi')->group(function () {
            Route::get('/',
            [ProdiController::class, 'index']);
            Route::get('/create', 
            [ProdiController::class, 'create']);
            Route::post('/store',
            [ProdiController::class, 'store']);
            Route::get('show/{id}', [ProdiController::class, 'show']);
            Route::get('/edit/{id}', [ProdiController::class, 'edit']);
            Route::put('update/{id}', [ProdiController::class, 'update']);
            Route::delete('destroy/{id}', [ProdiController::class, 'destroy']);
        });
    
        // Dosen
        Route::prefix('/dosen')->group(function () {
            Route::get('/',
            [DosenController::class, 'index']);
            Route::get('/create',
            [DosenController::class, 'create']);
            Route::post('/store',
            [DosenController::class, 'store']);
            Route::get('/show/{nidn}', [DosenController::class, 'show']);
            Route::get('/edit/{nidn}', [DosenController::class, 'edit']);
            Route::put('/update/{nidn}', [DosenController::class, 'update']);
            Route::delete('/destroy/{nidn}', [DosenController::class, 'destroy']);
        });
    
        // Mahasiswa
        Route::prefix('/mahasiswa')->group(function () {
            Route::get('/',
            [MahasiswaController::class, 'index']);
            Route::get('/create', [MahasiswaController::class, 'create']);
            Route::post('/store', [MahasiswaController::class, 'store']);
            Route::get('/show/{nim}', [MahasiswaController::class, 'show']);
            Route::get('/edit/{nim}', [MahasiswaController::class, 'edit']);
            Route::put('/update/{nim}', [MahasiswaController::class, 'update']);
            Route::delete('/destroy/{nim}', [MahasiswaController::class, 'destroy']);
        });
    
        // Rombel
        Route::prefix('/rombel')->group(function () {
            Route::get('/',
            [RombelController::class, 'index']);
            Route::get('/create', [RombelController::class, 'create']);
            Route::post('/store', [RombelController::class, 'store']);
            Route::get('show/{id}', [RombelController::class, 'show']);
            Route::get('/edit/{id}', [RombelController::class, 'edit']);
            Route::put('/update/{id}', [RombelController::class, 'update']);
            Route::delete('/destroy/{id}', [RombelController::class, 'destroy']);
    });
    });
});    

require __DIR__.'/auth.php';
