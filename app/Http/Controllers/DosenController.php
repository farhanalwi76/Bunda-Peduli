<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;
use App\Models\Prodi;
class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = dosen::all();
        return view('admin.dosen.index', compact('dosen'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all(); 
        return view('admin.dosen.create',compact('prodi'));
        return view('admin.dosen.create');

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
        return redirect('dashboard/dosen');
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
        // $prodi = Prodi::all();
        // return view('admin.dosen.edit', compact('dosen','prodi'))->with('prodi', $prodi);

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
        dosen::find($nidn)->update($validate);
        return redirect('dashboard/dosen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nidn)
    {
        dosen::find($nidn)->delete();
        return redirect('dashboard/dosen');
    }
}
