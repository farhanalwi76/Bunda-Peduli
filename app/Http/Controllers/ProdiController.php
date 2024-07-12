<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('admin.prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string'
        ]);

        prodi::create($validate);
        return redirect('dashboard/prodi')->with('pesan', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodi = prodi::find($id);
        return view('admin.prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = prodi::find($id);
        return view('admin.prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string'
        ]);

        $prodi = prodi::find($id);
        $prodi->update($validate);
        return redirect('dashboard/prodi')->with('pesan', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = prodi::find($id);
        $prodi->delete();
        
        return redirect('dashboard/prodi')->with('pesan', 'Data Berhasil Dihapus');
    }
}
