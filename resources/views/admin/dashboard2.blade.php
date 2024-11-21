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

        <!-- Form Input Data -->
        {{-- <form action="{{ route('validation.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 mb-6">
            @csrf

            <div class="grid grid-cols-2 gap-4">

                <div>
                    <label for="jobdesk" class="block text-sm font-medium text-gray-700">Jobdesk</label>
                    <select id="jobdesk" name="jobdesk" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
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
                    <select id="nama" name="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="" disabled selected>Pilih Nama</option>
                        <option value="Bagas">Bagas</option>
                        <option value="Andi">Andi</option>
                        <option value="Siti">Siti</option>
                    </select>
                </div>
                
                <div>
                    <label for="hari" class="block text-sm font-medium text-gray-700">Hari</label>
                    <select id="hari" name="hari" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="" disabled selected>Pilih Hari </option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jum'at">Jum'at</option>
                    </select>
                
                <div>
                    <label for="target" class="block text-sm font-medium text-gray-700">Target</label>
                    <select id="target" name="target" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value=disabled selected> 100 </option>
                </div>
               
                <div>
                    <label for="Average" class="block text-sm font-medium text-gray-700">Average</label>
                    <select id="Average" name="Average" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value=disabled selected> 0 </option>
                </div>

                <div>
                    <label for="Keterangan" class="block text-sm font-medium text-gray-700">keterangan</label>
                    <input type="text" name="Keterangan" id="Keterangan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" >
                </div>

            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    Simpan Data
                </button>
            </div>
            
        </form> --}}

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
                
                <div>
                    <label for="target" class="block text-sm font-medium text-gray-700">Target</label>
                    <input type="number" id="target" name="target" value="100" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                </div>
               
                <div>
                    <label for="average" class="block text-sm font-medium text-gray-700">Average</label>
                    <input type="number" id="average" name="average" value="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                </div>
            </div>
        
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    Simpan Data
                </button>
            </div>
        </form> 

        <!-- Tabel Data -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="bg-gray-800 text-white text-sm leading-normal">
                        <th class="py-3 px-6 text-left">jobdesk</th>
                        <th class="py-3 px-6 text-left">nama</th>
                        {{-- <th class="py-3 px-6 text-center">se</th>
                        <th class="py-3 px-6 text-center">s</th>
                        <th class="py-3 px-6 text-center">r</th>
                        <th class="py-3 px-6 text-center">k</th>
                        <th class="py-3 px-6 text-center">j</th>
                        <th class="py-3 px-6 text-center">target</th>
                        <th class="py-3 px-6 text-center">avg</th>
                        <th class="py-3 px-6 text-center">keterangan</th> --}}

                    </tr>
                </thead>
                
            </table>
        </div>
    </div>

 </body>
</html>