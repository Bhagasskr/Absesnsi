<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // Menampilkan daftar karyawan
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    // Menampilkan form untuk menambah karyawan baru
    public function create()
    {
        return view('karyawan.create');
    }

    // Menyimpan data karyawan baru
    public function store(Request $request)
{
    // Validasi input data
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'posisi' => 'required|string|max:255',
        'unit' => 'required|string',
        'nik' => 'required|integer|unique:karyawans,nik',
    ]);
    Karyawan::create($request->all());

        return redirect()->route('karyawan.index')
                         ->with('success', 'Karyawan berhasil ditambahkan');

    // Simpan data ke dalam database
    Karyawan::create($validated);

    return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan!');
}
// Menampilkan detail karyawan
public function show(Karyawan $karyawan)
{
    return view('karyawan.show', compact('karyawan'));
}

// Menampilkan form untuk mengedit karyawan
public function edit(Karyawan $karyawan)
{
    return view('karyawan.edit', compact('karyawan'));
}


public function update(Request $request, Karyawan $karyawan)
{
    // Validasi input data
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'posisi' => 'required|string|max:255',
        'unit' => 'required|string',
        'nik' => 'required|integer|unique:karyawans,nik,' . $karyawan->id,
    ]);

    // Update data di database
    $karyawan->update($request->all());

    return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diperbarui!');
}
public function destroy(Karyawan $karyawan)
    {
        // Hapus karyawan dari database
        $karyawan->delete();

        // Redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus!');
    }
}
