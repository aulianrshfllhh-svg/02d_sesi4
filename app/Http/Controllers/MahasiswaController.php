<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; // Tambahkan ini agar tidak perlu menulis \App\Models\ terus-menerus 

class MahasiswaController extends Controller
{
    public function index()
    {
        // Sesuaikan nama folder view: 'mahasiswa' [cite: 45]
        $mahasiswas = Mahasiswa::all(); 
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        // Sesuaikan nama folder view: 'mahasiswa' [cite: 53]
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required',
            'kelas' => 'required',
            'matakuliah' => 'required',
        ]);
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        $mahasiswa = Mahasiswa::findOrFail($nim);
        return view('mahasiswa.edit', compact('mahasiswa'));

    }
    
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'matakuliah' => 'required',
        ]);
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');               
    }

    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');                
    }
}