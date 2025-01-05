<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Rombel;
use App\Models\Kesehatan;
use App\Models\Dosen;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kesehatan = Kesehatan::all();
        return view('admin.kesehatan.index', compact('kesehatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kesehatan=Kesehatan::all();
        return view('admin.kesehatan.create',compact('kesehatan'));
        return view('admin.kesehatan.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'id' => 'required|string',
            'berat_badan' => 'required|string',
            'tinggi_badan' => 'required|string',
            'lingkar_kepala' => 'required|string',
            'umur_anak' => 'required|string',
        ]);
        Kesehatan::create($validate);
        return redirect('dashboard/kesehatan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kesehatan = Kesehatan::find($id);
        return view('admin.kesehatan.show', compact('kesehatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kesehatan = Kesehatan::find($id);
        return view('admin.kesehatan.edit', compact('kesehatan'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'id' => 'required|string',
            'berat_badan' => 'required|string',
            'tinggi_badan' => 'required|string',
            'lingkar_kepala' => 'required|string',
            'umur_anak' => 'required|string',
        ]);

        $kesehatan = Kesehatan::find($id);
        $kesehatan->update($validate);
        return redirect('dashboard/kesehatan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kesehatan = Kesehatan::find($id);
        $kesehatan->delete();
        return redirect('dashboard/kesehatan')->with('pesan', 'Data Berhasil dihapus');
    }
}
