<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\DatapenggunaController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Periksa apakah email terdaftar
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        // Jika email tidak terdaftar, arahkan ke halaman registrasi
        return redirect()->route('register')->with('status', 'Email belum terdaftar. Silakan daftar terlebih dahulu.');
    }

    // Autentikasi pengguna
    if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
        return redirect()->intended('dashboard');
    }

    // Jika password salah
    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->onlyInput('email');
});

// Profil Pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');

        // Kesehatan
        Route::prefix('/kesehatan')->group(function () {
            Route::get('/', [KesehatanController::class, 'index']);
            Route::get('/create', [KesehatanController::class, 'create']);
            Route::post('/store', [KesehatanController::class, 'store']);
            Route::get('/show/{id}', [KesehatanController::class, 'show']);
            Route::get('/edit/{id}', [KesehatanController::class, 'edit']);
            Route::put('/update/{id}', [KesehatanController::class, 'update']);
            Route::delete('/destroy/{id}', [KesehatanController::class, 'destroy']);
        });

        // Dosen
        Route::prefix('/dosen')->group(function () {
            Route::get('/', [DosenController::class, 'index']);
            Route::get('/create', [DosenController::class, 'create']);
            Route::post('/store', [DosenController::class, 'store']);
            Route::get('/show/{nidn}', [DosenController::class, 'show']);
            Route::get('/edit/{nidn}', [DosenController::class, 'edit']);
            Route::put('/update/{nidn}', [DosenController::class, 'update']);
            Route::delete('/destroy/{nidn}', [DosenController::class, 'destroy']);
        });

        // Mahasiswa
        Route::prefix('/mahasiswa')->group(function () {
            Route::get('/', [MahasiswaController::class, 'index']);
            Route::get('/create', [MahasiswaController::class, 'create']);
            Route::post('/store', [MahasiswaController::class, 'store']);
            Route::get('/show/{nim}', [MahasiswaController::class, 'show']);
            Route::get('/edit/{nim}', [MahasiswaController::class, 'edit']);
            Route::put('/update/{nim}', [MahasiswaController::class, 'update']);
            Route::delete('/destroy/{nim}', [MahasiswaController::class, 'destroy']);
        });

        // Rombel
        Route::prefix('/rombel')->group(function () {
            Route::get('/', [RombelController::class, 'index']);
            Route::get('/create', [RombelController::class, 'create']);
            Route::post('/store', [RombelController::class, 'store']);
            Route::get('/show/{id}', [RombelController::class, 'show']);
            Route::get('/edit/{id}', [RombelController::class, 'edit']);
            Route::put('/update/{id}', [RombelController::class, 'update']);
            Route::delete('/destroy/{id}', [RombelController::class, 'destroy']);
        });

        // Datapengguna
       
        Route::prefix('datapengguna')->name('datapengguna.')->group(function () {
            Route::get('/', [DatapenggunaController::class, 'index'])->name('index');
            Route::get('/create', [DatapenggunaController::class, 'create'])->name('create');
            Route::post('/store', [DatapenggunaController::class, 'store'])->name('store');
            Route::get('/show/{id}', [DatapenggunaController::class, 'show'])->name('show');
            Route::get('/edit/{id}', [DatapenggunaController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [DatapenggunaController::class, 'update'])->name('update');
            Route::delete('/destroy/{id}', [DatapenggunaController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('/komunitas')->group(function () {
            Route::get('/', [KomunitasController::class, 'index']);
            Route::get('/create', [KomunitasController::class, 'create']);
            Route::post('/store', [KomunitasController::class, 'store']);
            Route::get('/show/{id}', [KomunitasController::class, 'show']);
            Route::get('/edit/{id}', [KomunitasController::class, 'edit']);
            Route::put('/update/{id}', [KomunitasController::class, 'update']);
            Route::delete('/destroy/{id}', [KomunitasController::class, 'destroy']);
        });
        
    });
});

// Auth Routes
require __DIR__.'/auth.php';
