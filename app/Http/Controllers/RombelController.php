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
        $rombongan_belajar = Rombel::all();
        return view('admin.rombel.index', compact('rombongan_belajar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rombongan_belajar = Rombel::all();
        $prodi = Prodi::all();
        $mahasiswa = Mahasiswa::all();
        $dosen=Dosen::all();
        return view('admin.rombel.create', compact('prodi', 'rombongan_belajar', 'mahasiswa', 'dosen'));
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
        $rombongan_belajar = Rombel::find($id);
        return view('admin.rombel.show', compact('rombongan_belajar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $rombongan_belajar = Rombel::find($id);
        $dosen = Dosen::all(); // Jika Anda membutuhkan data dosen untuk dropdown
    
        if (!$rombongan_belajar) {
            return redirect()->back()->with('error', 'Data Rombel tidak ditemukan.');
        }
    
        return view('admin.rombel.edit', compact('rombongan_belajar', 'dosen'));
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
        $rombongan_belajar = Rombel::find($id);
        $rombongan_belajar->update($validate);
        return redirect('dashboard/rombel')->with('pesan', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cek apakah ada mahasiswa yang masih menggunakan prodi ini
        $mahasiswaCount = Mahasiswa::where('prodi_id', $id)->count();

        if ($mahasiswaCount > 0) {
            return redirect()->back()->with('error', 'Tidak bisa menghapus Rombel karena masih digunakan oleh mahasiswa.');
        }

        // Jika tidak ada, maka hapus prodi
        Rombel::find($id)->delete();
        return redirect('dashboard/rombel')->with('pesan', 'Data Berhasil');
    }
}
