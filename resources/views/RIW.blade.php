<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <!DOCTYPE html>
  <!DOCTYPE html>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Pengajuan Cuti - Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>

  <body class="bg-gray-100 p-10">
    <div class="container mx-full mt-15">
      <table class="min-w-full bg-white border border-gray-300">
        <thead>
          <tr class="bg-gray-200 ">
            <th class="py-3 px-4 border-b border-gray-300 text-center">ID Pengajuan</th>
            <th class="py-3 px-4 border-b border-gray-300 text-center">NIM</th>
            <th class="py-3 px-4 border-b border-gray-300 text-center">Tanggal Pengajuan</th>
            <th class="py-3 px-4 border-b border-gray-300 text-center">Semester Cuti</th>
            <th class="py-3 px-4 border-b border-gray-300 text-center">Tanggal Mulai Cuti</th>
            <th class="py-3 px-4 border-b border-gray-300 text-center">Tanggal Selesai Cuti</th>
            <th class="py-3 px-4 border-b border-gray-300 text-center">Alasan</th>
            <th class="py-3 px-4 border-b border-gray-300 text-center">Dokumen</th>
            <th class="py-3 px-4 border-b border-gray-300 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Data Pengajuan 1 -->
          <tr class="hover:bg-gray-50">
            <td class="py-3 px-4 border-b border-gray-300 text-center">P001</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">12345678</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2023-10-01</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">Ganjil 2023/2024</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2023-10-15</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2024-02-15</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">Kesehatan</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">surat_kesehatan.pdf</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">
              <div class="flex justify-center gap-2">
                <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Terima</button>
                <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 ml-2">Tolak</button>
              </div>
            </td>
          </tr>
          <!-- Data Pengajuan 2 -->
          <tr class="hover:bg-gray-50">
            <td class="py-3 px-4 border-b border-gray-300 text-center">P002</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">87654321</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2023-09-25</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">Genap 2023/2024</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2024-03-01</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2024-07-01</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">Keluarga</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">surat_keluarga.pdf</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">
              <div class="flex justify-center gap-2">
                <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Terima</button>
                <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Tolak</button>
              </div>
            </td>

          </tr>
          <!-- Data Pengajuan 3 -->
          <tr class="hover:bg-gray-50">
            <td class="py-3 px-4 border-b border-gray-300 text-center">P003</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">11223344</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2023-10-05</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">Ganjil 2023/2024</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2023-11-01</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2024-01-31</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">Studi Lanjut</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">surat_studi.pdf</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">
              <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Terima</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 ml-2">Tolak</button>
            </td>
          </tr>
          <!-- Data Pengajuan 4 -->
          <tr class="hover:bg-gray-50">
            <td class="py-3 px-4 border-b border-gray-300 text-center">P004</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">55667788</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2023-10-10</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">Genap 2023/2024</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2024-02-01</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">2024-06-30</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">Pribadi</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">surat_pribadi.pdf</td>
            <td class="py-3 px-4 border-b border-gray-300 text-center">
              <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Terima</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 ml-2">Tolak</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>

  </html>
</x-layout>