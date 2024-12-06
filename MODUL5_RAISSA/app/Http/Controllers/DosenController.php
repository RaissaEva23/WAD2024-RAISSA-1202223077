<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Http\Requests\StoreDosenRequest;
use App\Http\Requests\UpdateDosenRequest;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_dosen' => 'required|unique:dosens,kode_dosen|max:3',  // Validasi untuk kode dosen baru
            'nama_dosen' => 'required|string|max:255',  // Nama dosen harus ada dan maksimal 255 karakter
            'nip' => 'required|unique:dosens,nip',  // Validasi untuk NIP
            'email' => 'required|email|unique:dosens,email',  // Validasi untuk email
            'no_telepon' => 'nullable',
        ]);

        Dosen::create($validateData);
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        // Validasi untuk update, dengan pengecualian untuk ID yang sedang diedit
        $validated = $request->validate([
            'kode_dosen' => 'required|max:3|unique:dosens,kode_dosen,' . $dosen->id,  // Pengecualian untuk kode_dosen yang sama
            'nama_dosen' => 'required|string|max:255',  // Nama dosen harus ada
            'nip' => 'required|unique:dosens,nip,' . $dosen->id,  // Pengecualian untuk NIP yang sama
            'email' => 'required|email|unique:dosens,email,' . $dosen->id,  // Pengecualian untuk email yang sama
            'no_telepon' => 'nullable',
        ]);

        $dosen->update($validated);
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dosen = Dosen::findOrFail($id);  // Cari dosen berdasarkan ID
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus');
    }
}
