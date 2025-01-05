<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rombel;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use App\Models\Dosen;
class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftar_pengguna = Rombel::all();
        return view('admin.rombel.index', compact('daftar_pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $daftar_pengguna = Rombel::all();
        $daftar_pengguna = Prodi::all();
        return view('admin.rombel.create', compact('daftar_tenaga_medis', 'daftar_pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'kode' => 'required|string',
            'thn_masuk' => 'required|string',
            'id' => 'required|string',
            'dosen_pa' => 'required|integer',
        ]);

        Rombel::create($validate);
        return redirect('dashboard/rombel')->with('pesan', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $daftar_pengguna = Rombel::find($id);
        return view('admin.rombel.show', compact('daftar_pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $daftar_pengguna = Rombel::find($id);
        $dosen = Dosen::all(); // Jika Anda membutuhkan data dosen untuk dropdown
    
        if (!$daftar_pengguna) {
            return redirect()->back()->with('error', 'Data Rombel tidak ditemukan.');
        }
    
        return view('admin.rombel.edit', compact('daftar_pengguna', 'daftar_tenaga_medis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate=$request->validate([
            'kode' => 'required|string',
            'thn_masuk' => 'required|string',
            'id' => 'required|string',
            'dosen_pa' => 'required|integer',
        ]);
        $daftar_pengguna = Rombel::find($id);
        $daftar_pengguna->update($validate);
        return redirect('dashboard/rombel')->with('pesan', 'Data Berhasil Diperbarui');
    }
};
