<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Tambah Karyawan Baru</h1>

        <!-- Form untuk menambah karyawan -->
        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">NIK:</label>
                <input type="number" name="nik" id="nik" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="posisi" class="form-label">Posisi:</label>
                <input type="text" name="posisi" id="posisi" class="form-control" list="posisi-list" required>
                <datalist id="posisi-list">
                    <option value="Lapangan">
                    <option value="Outsourcing">
                    <option value="Helpdesk">
                </datalist>
            </div>
            
            <div class="mb-3">
                <label for="unit" class="form-label">Unit:</label>
                <input type="text" name="unit" id="unit" class="form-control" list="unit-list" required>
                <datalist id="unit-list">
                    <option value="Data Manajemen">
                </datalist>
            </div>
            
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
