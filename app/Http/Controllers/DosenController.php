<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Rombel;
use App\Models\Mahasiswa;
class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = dosen::with('prodi')->get();
        return view('admin.dosen.index', compact('dosen'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all(); 
        return view('admin.dosen.create',compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nidn' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'jk' => 'required|string',
            'prodi_id' => 'required|integer'
        ]);
        dosen::create($validate);
        return redirect('dashboard/dosen')->with('pesan', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nidn)
    {
        $dosen = dosen::find($nidn);
        return view('admin.dosen.show', compact('dosen'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nidn)
    {
        // $dosen = dosen::find($nidn);
        // return view('admin.dosen.edit', compact('dosen','prodi'))->with('$dosen', $prodi);

        $dosen = Dosen::where('nidn', $nidn)->first();
        if (!$dosen) {
            return redirect()->back()->with('error', 'Data dosen tidak ditemukan.');
        }
        $prodi = Prodi::all();
        return view('admin.dosen.edit', compact('dosen','prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nidn)
    {
        $validate = $request->validate([
            'nidn' => 'required|integer',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'jk' => 'required|string',
            'prodi_id' => 'required|integer',
        ]);

        $dosen = dosen::find($nidn);
        $dosen->update($validate);
        return redirect('dashboard/dosen')->with('pesan', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nidn)
    {
        // Cek apakah dosen masih terhubung dengan rombongan_belajar
        $isLinked = Rombel::where('dosen_pa', $nidn)->exists();
    
        if ($isLinked) {
            return redirect()->back()->with('error', 'Dosen tidak dapat dihapus karena dosen tersebut sedang ditugaskan sebagai dosen PA.');
        }
    
        // Cari dosen berdasarkan nidn
        $dosen = Dosen::find($nidn);
    
        // Jika dosen tidak ditemukan, tampilkan pesan kesalahan
        if (!$dosen) {
            return redirect('dashboard/dosen')->with('pesan', 'Dosen berhasil dihapus.');
    }
}
}