<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah; 
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = MataKuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs,kode_mk',
            'nama_mk' => 'required',
            'sks' => 'required|integer|between:1,6',
            'semester' => 'required|integer',
        ]);
        MataKuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kode_mk)
    {
        $mk = MataKuliah::findOrFail($kode_mk);
        return view('matakuliah.edit', compact('mk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kode_mk)
    {
        $request->validate([
    
            'nama_mk' => 'required',
            'sks' => 'required|integer|between:1,6',
            'semester' => 'required|integer',
        ]);
        $mk = MataKuliah::findOrFail($kode_mk);
        $mk->update($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kode_mk)
    {
        MataKuliah::destroy($kode_mk);
        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil dihapus.');
    }           
    }

