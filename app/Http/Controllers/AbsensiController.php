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
        // 'photo_path' => 'required|string',
 
    ]);

    // // Cek apakah file gambar ada di request
    // if ($request->hasFile('photo_path')) {
    //     // Simpan file ke folder 'public/absensi' di storage
    //     $filePath = $request->file('photo_path')->store('public/absensi');

    //     // Simpan path file (tanpa 'public/') ke dalam $validated
    //     $validated['photo_path'] = str_replace('public/', '', $filePath);
    // }
    // // Proses Base64 menjadi file gambar
    // $photoData = $validated['photo_path'];
    // $photoPath = null;

    // if ($photoData) {
    //     // Decode Base64
    //     $photo = base64_decode(str_replace('data:image/png;base64,', '', $photoData));

    //     // Buat nama file unik
    //     $fileName = 'absensi_' . time() . '.png';

    //     // Simpan gambar ke folder storage/app/public/absensi
    //     $filePath = 'public/absensi/' . $fileName;
    //     Storage::put($filePath, $photo);

    //     // Simpan path gambar (tanpa 'public/') ke dalam database
    //     $photoPath = str_replace('public/', '', $filePath);
    // }

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