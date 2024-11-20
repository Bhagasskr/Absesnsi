<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi dengan Kamera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        #camera-preview {
            width: 100%;
            max-width: 400px;
            height: auto;
        }
        #capture {
            display: none;
            margin-top: 10px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-1/4 p-4">
            <div class="flex items-center mb-6">
                <img alt="Telkom Indonesia Logo" class="mr-2" height="50" src="https://storage.googleapis.com/a1aa/image/OTBfIoRGKzTel0eyVg6kQSW7JETEkoZTryDS3jfReolgPJVdC.jpg" width="50" />
                <span class="text-xl font-bold">Telkom Indonesia</span>
            </div>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a class="flex items-center p-2 hover:bg-gray-700 rounded" href="dashboard">
                            <i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD
                        </a>
                    </li>
                    <li class="mb-4">
                        <a class="flex items-center p-2 hover:bg-gray-700 rounded" href="#">
                            <i class="fas fa-database mr-2"></i> Report Data
                        </a>
                        <ul class="ml-6 mt-2">
                            <li>
                                
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="absolute bottom-4 left-4">
                <button class="bg-red-600 p-2 rounded-full">
                    <i class="fas fa-arrow-left text-white"></i>
                </button>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">ABSENSI KEHADIRAN PEGAWAI</h1>
                <div class="flex items-center">
                    <span class="mr-2">Users</span>
                    <div class="bg-gray-300 p-2 rounded-full">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
        

                    <form action="{{ route('absensi.store') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="flex">
                            <div class="w-1/2">
                                <div class="mb-4">
                                    <label for="nama" class="block text-gray-700">Nama</label>
                                    <input id="nama" name="nama" type="text" class="w-full p-2 border rounded bg-gray-200" required>
                                </div>
                                <div class="mb-4">
                                    <label for="nik" class="block text-gray-700">NIK</label>
                                    <input id="nik" name="nik" type="text" class="w-full p-2 border rounded bg-gray-200" required>
                                </div>
                                <div class="mb-4">
                                    <label for="jamabsen" class="block text-gray-700">Jam Absen</label>
                                    <input id="jamabsen" name="jamabsen" type="text" class="w-full p-2 border rounded bg-gray-200" readonly>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700">Latitude</label>
                                    <input id="latitude" name="latitude" class="w-full p-2 border rounded bg-gray-200" readonly type="text" name="latitude" id="latitude">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="block text-gray-700">Longitude</label>
                                    <input id="longitude" name="longitude" class="w-full p-2 border rounded bg-gray-200" readonly type="text" name="longitude" id="longitude">
                                </div>
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan</button>
                            </div>
                        </div>
                    </form>
    
                    </div>
                    <div class="w-1/2 flex flex-col items-center">
                        <!-- Video stream dari kamera -->
                        <video id="camera-preview" autoplay></video>
                        
                        <!-- Tombol untuk mengambil foto -->
                        <button id="capture-button" class="bg-red-600 text-white px-6 py-2 rounded mt-4">Ambil Foto</button>
    
                        <!-- Gambar hasil tangkapan -->
                        <canvas id="capture" width="640" height="480" style="display: none;"></canvas>
    
                        <!-- Form untuk mengirim data foto -->
                        <form id="absensi-form" action="{{ route('absensi.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                            
                            <input type="hidden" name="photo" id="photo">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const video = document.getElementById('camera-preview');
        const captureButton = document.getElementById('capture-button');
        const captureCanvas = document.getElementById('capture');
        const photoDataInput = document.getElementById('photo-data');
        
        // Mengambil lokasi pengguna
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(position => {
                document.getElementById('latitude').value = position.coords.latitude;
                document.getElementById('longitude').value = position.coords.longitude;
            }, error => {
                alert("Gagal mendapatkan lokasi, periksa pengaturan izin lokasi Anda.");
            });
        } else {
            alert("Geolocation tidak didukung oleh browser Anda.");
        }


        // Jam
        document.addEventListener('DOMContentLoaded', function () {
        const jamAbsen = document.getElementById('jamabsen');

        function updateTime() {
            const sekarang = new Date();
            const jam = sekarang.getHours().toString().padStart(2, '0');
            const menit = sekarang.getMinutes().toString().padStart(2, '0');
            const detik = sekarang.getSeconds().toString().padStart(2, '0');
            jamAbsen.value = `${jam}:${menit}:${detik}`;
        }

        // Update setiap detik
        setInterval(updateTime, 1000);

        // Inisialisasi pertama
        updateTime();
    });



        // Memanggil fungsi setCurrentTime saat halaman dimuat
        window.onload = setCurrentTime;

        // Akses Kamera
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
            })
            .catch(error => {
                console.error("Error accessing camera: ", error);
            });

        // Fungsi untuk mengambil foto
            captureButton.addEventListener('click', () => {
            captureCanvas.width = video.videoWidth;
            captureCanvas.height = video.videoHeight;
            captureCanvas.getContext('2d').drawImage(video, 0, 0);

            // Mengubah gambar ke format base64 dan memasukkannya ke input tersembunyi
            const photoDataUrl = captureCanvas.toDataURL('image/png');
            photoDataInput.value = photoDataUrl;

            alert('Foto berhasil diambil. Klik Simpan Absensi untuk mengunggah.');
        });
    </script>
</body>
</html>
