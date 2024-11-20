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
   <div class="w-1/5 bg-gray-700 h-screen p-4">
    <div class="flex items-center mb-8">
     <img alt="Telkom Indonesia Logo" class="mr-2" height="50" src="https://storage.googleapis.com/a1aa/image/VDxlSiIkHMZyIZiW0E7GH0adGOFfo9WKwxvHlbKi7hE5xT1JA.jpg" width="50"/>
     <div class="text-white">
      <h1 class="text-lg font-bold">
       Telkom Indonesia
      </h1>
      <p class="text-sm">
       the world in your hand
      </p>
     </div>
    </div>
    <nav>
     <ul>
      <li class="mb-4">
       <a class="flex items-center text-white" href="#">
        <i class="fas fa-tachometer-alt mr-2">
        </i>
        DASHBOARD
       </a>
      </li>
      <li class="mb-4">
       <span class="text-gray-400">
        Features
       </span>
      </li>
      <li class="mb-4">
       <span class="text-gray-400">
        MASTER DATA
       </span>
       <ul class="ml-4 mt-2">
        <li class="mb-2">
         <a class="text-white" href="#">
          DATA PEGAWAI
         </a>
        </li>
        <li class="mb-2">
         <a class="text-white" href="#">
          KINERJA PEGAWAI
         </a>
        </li>
        <li class="mb-2">
         <a class="text-white" href="#">
          REKAP DATA
         </a>
        </li>
       </ul>
      </li>
     </ul>
    </nav>
    <div class="mt-auto">
     <button class="bg-red-500 text-white p-2 rounded-full">
      <i class="fas fa-arrow-left">
      </i>
     </button>
    </div>
   </div>
   <!-- Main Content -->
   <div class="w-4/5 p-4">
    <div class="flex justify-between items-center mb-4">
     <div class="flex space-x-4">
      <div class="bg-gray-300 p-4 rounded-lg flex items-center justify-center">
       <span class="text-lg">
        Users
       </span>
       <span class="text-2xl ml-2">
        1
       </span>
      </div>
      <div class="bg-gray-300 p-4 rounded-lg flex items-center justify-center">
       <i class="fas fa-user text-2xl">
       </i>
      </div>
      <div class="bg-gray-300 p-4 rounded-lg flex items-center justify-center">
       <i class="fas fa-square text-2xl">
       </i>
      </div>
      <div class="bg-gray-300 p-4 rounded-lg flex items-center justify-center">
       <i class="fas fa-square text-2xl">
       </i>
      </div>
     </div>
     <div class="bg-gray-300 p-4 rounded-lg flex items-center justify-center">
      <span class="text-lg">
       ADMIN
      </span>
      <i class="fas fa-user ml-2">
      </i>
     </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
     <div class="col-span-2 bg-white p-4 rounded-lg shadow">
      <h2 class="text-lg font-bold mb-4 bg-red-500 text-white p-2 rounded">
       Kinerja Pegawai
      </h2>
      <img alt="Step Count Over a Week Graph" class="w-full" height="400" src="https://storage.googleapis.com/a1aa/image/7AUQkrglhwZEB5tauVccG4khj7alTRC5iyj9WtrT2uf6xT1JA.jpg" width="600"/>
     </div>
     <div class="bg-white p-4 rounded-lg shadow">
      <h2 class="text-lg font-bold mb-4 bg-red-500 text-white p-2 rounded">
       CONTENT
      </h2>
      <img alt="Pie Chart" class="w-full" height="300" src="https://storage.googleapis.com/a1aa/image/di1Xp9Li6M5FN5mDCBq8JbaffFyk4xIjWFG8IH1Fze7nHPVnA.jpg" width="300"/>
     </div>
     <div class="bg-white p-4 rounded-lg shadow">
      <h2 class="text-lg font-bold mb-4 bg-red-500 text-white p-2 rounded">
       CONTENT
      </h2>
     </div>
     <div class="bg-white p-4 rounded-lg shadow">
      <h2 class="text-lg font-bold mb-4 bg-red-500 text-white p-2 rounded">
       CONTENT
      </h2>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
        Penyimpanan
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
        <form action="{{ route('validation.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 mb-6">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="jobdesk" class="block text-sm font-medium text-gray-700">Jobdesk</label>
                    <input type="text" name="jobdesk" id="jobdesk" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" id="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                <div>
                    <label for="se" class="block text-sm font-medium text-gray-700">Se</label>
                    <input type="number" name="se" id="se" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label for="s" class="block text-sm font-medium text-gray-700">S</label>
                    <input type="number" name="s" id="s" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label for="r" class="block text-sm font-medium text-gray-700">R</label>
                    <input type="number" name="r" id="r" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label for="k" class="block text-sm font-medium text-gray-700">K</label>
                    <input type="number" name="k" id="k" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label for="j" class="block text-sm font-medium text-gray-700">J</label>
                    <input type="number" name="j" id="j" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label for="target" class="block text-sm font-medium text-gray-700">Target</label>
                    <input type="number" name="target" id="target" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                <div>
                    <label for="Avg" class="block text-sm font-medium text-gray-700">Avg</label>
                    <input type="number" name="Avg" id="Avg" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                </div>
                <div>
                    <label for="Keterangan" class="block text-sm font-medium text-gray-700">keterangan</label>
                    <input type="number" name="Keterangan" id="Keterangan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
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
                        <th class="py-3 px-6 text-center">se</th>
                        <th class="py-3 px-6 text-center">s</th>
                        <th class="py-3 px-6 text-center">r</th>
                        <th class="py-3 px-6 text-center">k</th>
                        <th class="py-3 px-6 text-center">j</th>
                        <th class="py-3 px-6 text-center">target</th>
                        <th class="py-3 px-6 text-center">avg</th>
                        <th class="py-3 px-6 text-center">keterangan</th>

                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($data as $row)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $row->jobdesk }}</td>
                        <td class="py-3 px-6 text-left">{{ $row->nama }}</td>
                        <td class="py-3 px-6 text-center">{{ $row->se }}</td>
                        <td class="py-3 px-6 text-center">{{ $row->s }}</td>
                        <td class="py-3 px-6 text-center">{{ $row->r }}</td>
                        <td class="py-3 px-6 text-center">{{ $row->k }}</td>
                        <td class="py-3 px-6 text-center">{{ $row->j }}</td>
                        <td class="py-3 px-6 text-center">{{ $row->target }}</td>
                        <td class="py-3 px-6 text-center">{{ $row->Avg }}</td>
                        <td class="py-3 px-6 text-center">{{ $row->Keterangan}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

 </body>
</html>