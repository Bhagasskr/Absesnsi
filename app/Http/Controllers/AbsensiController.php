<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AbsensiController extends Controller
{
    // Menampilkan daftar absensi
    public function index()
    {

    // Mengambil semua data absensi dari database
        $absensis = Absensi::all();
        return view('absensi.index', compact('absensis'));
    }

    public function create()
    {
        return view('absensi.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'nik' => 'required|string|max:255',
        'jamabsen' => 'required|date_format:H:i:s',
        'latitude' => 'required|numeric|between:-90,90', 
        'longitude' => 'required|numeric|between:-180,180', 
        'photo_path' => 'nullable|string|max:255', 
    ]);

    // Simpan ke database
    Absensi::create($validated);

    // Redirect ke halaman indeks absensi dengan pesan sukses
    return redirect()->back()->with('success', 'Absen berhasil disimpan!');
}
    // Menampilkan detail absensi
    public function show(Absensi $absensi)
    {
        return view('absensi.show', compact('absensi'));
    }
}