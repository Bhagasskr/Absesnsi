<!DOCTYPE html>
<html>
<head>
    <title>Daftar Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Daftar Karyawan</h1>

        <!-- Pesan sukses -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Tombol untuk menambah karyawan -->
        <a href="{{ route('karyawan.create') }}" class="btn btn-success mb-3">Tambah Karyawan</a>

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Posisi</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawans as $karyawan)
                    <tr>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->nik }}</td>
                        <td>{{ $karyawan->posisi }}</td>
                        <td>{{ $karyawan->unit }}</td>
                        <td>
                            <!-- Tombol CRUD (Edit, Delete) -->
                            <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-primary btn-sm">Edit</a>

                            <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus karyawan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
