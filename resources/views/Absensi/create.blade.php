@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Form Absensi</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Form Absensi -->
        <form id="absensi-form" action="{{ route('absensi.store') }}" method="POST">
            @csrf

            <!-- Input untuk Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">nik</label>
                <input type="text" class="form-control" name="nik" id="nik" required>
            </div>
            <div class="mb-3">
                <label for="jamabsen" class="form-label">jam absen</label>
                <input type="readonly" class="form-control" name="jamabsen" id="jamabsen" required>
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="readonly" class="form-control" name="latitude" id="latitude" required>
            </div>
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="readonly" class="form-control" name="longitude" id="longitude" required>
            </div>

            {{-- <input type="hidden" name="nik" id="nik">
            <input type="hidden" name="jamabsen" id="jamabsen">
            <input type="hidden" name="latitude" id="latitude">
            <input type="hidden" name="longitude" id="longitude"> --}}
            
            <button type="button" onclick="capturePhoto()" class="btn btn-primary">Ambil Foto dan Simpan Absensi</button>
        </form>
    </div>

    <script>
        function capturePhoto() {
            // Menyimpan waktu saat foto diambil
            document.getElementById('timestamp').value = new Date().toISOString();

            // Mengambil lokasi pengguna
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(position => {
                    document.getElementById('latitude').value = position.coords.latitude;
                    document.getElementById('longitude').value = position.coords.longitude;

                    // Submit form setelah data lengkap
                    document.getElementById('absensi-form').submit();
                }, error => {
                    alert("Gagal mendapatkan lokasi, periksa pengaturan izin lokasi Anda.");
                });
            } else {
                alert("Geolocation tidak didukung oleh browser Anda.");
            }
        }
    </script>
@endsection