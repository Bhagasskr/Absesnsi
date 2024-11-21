<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-roboto">
  <div class="flex">
   <!-- Sidebar -->
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Validasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-gray-700 mb-6">Input Data Validasi</h1>

        <form action="{{ route('validation.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 mb-6">
            @csrf
        
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="jobdesk" class="block text-sm font-medium text-gray-700">Jobdesk</label>
                    <select id="jobdesk" name="jobdesk" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                        <option value="" disabled selected>Pilih Jobdesk</option>
                        <option value="Validasi ODC E2E">Validasi ODC E2E</option>
                        <option value="Valins Service">Valins Service</option>
                        <option value="Valins Service Status DC Create Service UIM">Valins Service Status DC Create Service UIM</option>
                        <option value="Drop Only">Drop Only</option>
                        <option value="validasi Egbis">Validasi Egbis</option>
                        <option value="Rekon Valins PSB">Rekon Valins PSB</option>
                    </select>
                </div>
                
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <select id="nama" name="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                        <option value="" disabled selected>Pilih Nama</option>
                        <option value="Bagas">Bagas</option>
                        <option value="Andi">Andi</option>
                        <option value="Siti">Siti</option>
                    </select>
                </div>
                
                <div>
                    <label for="hari" class="block text-sm font-medium text-gray-700">Hari</label>
                    <select id="hari" name="hari" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                        <option value="" disabled selected>Pilih Hari</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jum'at">Jum'at</option>
                    </select>
                </div>
        
                {{-- <div>
                    <label for="se" class="block text-sm font-medium text-gray-700">SE</label>
                    <input type="number" id="se" name="se" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Jumlah SE">
                </div>
        
                <div>
                    <label for="s" class="block text-sm font-medium text-gray-700">S</label>
                    <input type="number" id="s" name="s" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Jumlah S">
                </div>
        
                <div>
                    <label for="r" class="block text-sm font-medium text-gray-700">R</label>
                    <input type="number" id="r" name="r" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Jumlah R">
                </div>
        
                <div>
                    <label for="k" class="block text-sm font-medium text-gray-700">K</label>
                    <input type="number" id="k" name="k" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Jumlah K">
                </div>
        
                <div>
                    <label for="j" class="block text-sm font-medium text-gray-700">J</label>
                    <input type="number" id="j" name="j" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Jumlah J">
                </div> --}}
                
                <div>
                    <label for="target" class="block text-sm font-medium text-gray-700">Target</label>
                    <input type="number" id="target" name="target" value="100" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                </div>
               
                <div>
                    <label for="Avg" class="block text-sm font-medium text-gray-700">Average</label>
                    <input type="number" id="Avg" name="Avg" value="0" step="0.01" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                </div>
        
                <div class="col-span-2">
                    <label for="Keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                    <textarea id="Keterangan" name="Keterangan" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Tambahkan keterangan jika diperlukan"></textarea>
                </div>
            </div>
        
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 ml-[1300px] text-white py-2 px-4 rounded hover:bg-blue-600">
                    Simpan Data
                </button>
            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-500">
              <thead class="bg-gray-50 text-blue-700 uppercase">
                <tr>
                  <th class="px-4 py-2">Jobdesk</th>
                  <th class="px-4 py-2">Nama</th>
                  <th class="px-4 py-2">S</th>
                  <th class="px-4 py-2">S</th>
                  <th class="px-4 py-2">R</th>
                  <th class="px-4 py-2">K</th>
                  <th class="px-4 py-2">J</th>
                  <th class="px-4 py-2">Target</th>
                  <th class="px-4 py-2">AVG</th>
                  <th class="px-4 py-2">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b">
                  <td class="px-4 py-2">E2E</td>
                  <td class="px-4 py-2">Ganjar Maulana</td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2">30</td>
                  <td class="px-4 py-2"></td>
                </tr>
                <tr class="bg-gray-50 border-b">
                  <td class="px-4 py-2">E2E</td>
                  <td class="px-4 py-2">Yuma Maulana</td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2">30</td>
                  <td class="px-4 py-2"></td>
                </tr>
                <tr class="bg-white border-b">
                  <td class="px-4 py-2">VALINS SERVICE</td>
                  <td class="px-4 py-2">Evie Dwiritasari</td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2"></td>
                  <td class="px-4 py-2">100</td>
                  <td class="px-4 py-2"></td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-4 py-2">VALINS SERVICE</td>
                    <td class="px-4 py-2">Irvan Sandi</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">100</td>
                    <td class="px-4 py-2"></td>
                  </tr>
                  <tr class="bg-white border-b">
                    <td class="px-4 py-2">VALINS SERVICE</td>
                    <td class="px-4 py-2">Rian Aditia</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">100</td>
                    <td class="px-4 py-2"></td>
                  </tr>
                  <tr class="bg-white border-b">
                    <td class="px-4 py-2">Rekon Valins PSB</td>
                    <td class="px-4 py-2">Evie Dwiritasari</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">100</td>
                    <td class="px-4 py-2"></td>
                  </tr>
                  <tr class="bg-white border-b">
                    <td class="px-4 py-2">Rekon Valins PSB</td>
                    <td class="px-4 py-2">Irvan Sandi</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">100</td>
                    <td class="px-4 py-2"></td>
                  </tr>
                  <tr class="bg-white border-b">
                    <td class="px-4 py-2">Rekon Valins PSB</td>
                    <td class="px-4 py-2">Rian Aditia</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">100</td>
                    <td class="px-4 py-2"></td>
                  </tr>
                  <tr class="bg-white border-b">
                    <td class="px-4 py-2">Drop Only</td>
                    <td class="px-4 py-2">Rian Aditia</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">300</td>
                    <td class="px-4 py-2"></td>
                  </tr>
                  <tr class="bg-white border-b">
                    <td class="px-4 py-2">Drop Only</td>
                    <td class="px-4 py-2">Evie Dwiritasari</td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">300</td>
                    <td class="px-4 py-2"></td>
                  </tr>
                <!-- Tambahkan baris lainnya sesuai data -->
              </tbody>
            </table>
          </div>
          
    </div>

 </body>
</html>