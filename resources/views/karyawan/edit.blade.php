<!DOCTYPE html>
<html>
<head>
    <title>Edit Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
    <h1>Edit Karyawan</h1>
    
    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $karyawan->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK:</label>
            <input type="number" name="nik" id="nik" class="form-control" value="{{ $karyawan->nik }}" required>
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
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
    </div>
    
</body>
</html>
