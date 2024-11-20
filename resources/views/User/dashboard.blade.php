<html>
 <head>
  <title>
   Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-200">
  <div class="flex">
   <!-- Sidebar -->
   <div class="w-1/6 bg-gray-700 h-screen p-4">
    <div class="flex items-center mb-6">
     <img alt="Telkom Indonesia Logo" class="mr-2" height="50" src="https://storage.googleapis.com/a1aa/image/fXSi8pXbPFTXZSWLfn1yeO02XAms95MAwy1E04UwxBCWiSVnA.jpg" width="50"/>
     <span class="text-white text-lg">
      Telkom Indonesia
     </span>
    </div>
    <div class="text-white mb-4">
     <div class="mb-2">
      DASHBOARD
     </div>
     <div class="mb-2">
      Features
     </div>
     <div class="mb-2">
      MASTER DATA
     </div>
     <div class="mb-2">
      DATA PROGRAM
     </div>
    </div>
    <div class="text-white mt-6">
     <i class="fas fa-arrow-left">
     </i>
    </div>
   </div>
   <!-- Main Content -->
   <div class="w-5/6 p-4">
    <!-- Top Bar -->
    <div class="flex justify-between items-center mb-4">
     <div class="flex space-x-4">
      <div class="bg-gray-500 text-white p-4 rounded-lg flex items-center">
       <div class="mr-2">
        Total DropOnly
       </div>
       <div>
        101
       </div>
       <i class="fas fa-user ml-2">
       </i>
      </div>
      <div class="bg-gray-500 text-white p-4 rounded-lg flex items-center">
       <div class="mr-2">
        Total DropOnly
       </div>
       <div>
        101
       </div>
       <i class="fas fa-user ml-2">
       </i>
      </div>
      <div class="bg-gray-500 text-white p-4 rounded-lg">
      </div>
      <div class="bg-gray-500 text-white p-4 rounded-lg">
      </div>
     </div>
     <div class="bg-gray-500 text-white p-4 rounded-lg flex items-center">
      <div class="mr-2">
       Users
      </div>
      <i class="fas fa-user">
      </i>
     </div>
    </div>
    <!-- Main Dashboard -->
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
                @forelse ($data as $row)
    <tr>
        <td>{{ $row->jobdesk }}</td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->se }}</td>
        <td>{{ $row->s }}</td>
        <td>{{ $row->r }}</td>
        <td>{{ $row->k }}</td>
        <td>{{ $row->j }}</td>
        <td>{{ $row->target }}</td>
        <td>{{ $row->avg }}</td>
        <td>{{ $row->keterangan }}</td>
    </tr>
@empty
    <tr>
        <td colspan="10" class="text-center">Tidak ada data tersedia.</td>
    </tr>
@endforelse

            </tbody>
        </table>
 </body>
</html>