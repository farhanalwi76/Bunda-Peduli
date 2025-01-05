<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Rombel;
use App\Models\Prodi;
use App\Models\Dosen;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rombongan_belajar=Rombel::all();
        $prodi = Prodi::all();
        return view('admin.mahasiswa.create',compact('prodi','rombongan_belajar'));
        return view('admin.mahasiswa.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nim' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'ipk' => 'required|string',
            'rombel_id' => 'required|integer',
            'prodi_id' => 'required|integer'
        ]);
        Mahasiswa::create($validate);
        return redirect('dashboard/mahasiswa');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        return view('admin.mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        if (!$mahasiswa) {
            return redirect()->back()->with('error', 'Data mahasiswa tidak ditemukan.');
        }
        $prodi = Prodi::all();
        $rombongan_belajar = Rombel::all();
        return view('admin.mahasiswa.edit', compact('mahasiswa','prodi','rombongan_belajar'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        $validate = $request->validate([
            'nim' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'ipk' => 'required|string',
            'rombel_id' => 'required|integer',
            'prodi_id' => 'required|integer'
        ]);

        $mahasiswa = Mahasiswa::find($nim);
        $mahasiswa->update($validate);
        return redirect('dashboard/mahasiswa');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        $mahasiswa->delete();
        return redirect('dashboard/mahasiswa')->with('pesan', 'Data Berhasil dihapus');
    }
}
