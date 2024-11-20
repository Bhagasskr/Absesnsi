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
                
            </table>
        </div>
    </div>

 </body>
</html>