<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-10">
    <div class="container mx-auto py-5">
      <x-nav-link href="form-prodi" :active="request()->is('/form-prodi')">Tambah</x-nav-link>
        <table class="min-w-full bg-white border border-gray-300 mt-5">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">ID Prodi</th>
                    <th class="py-2 px-4 border-b">Nama Program Studi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border-b text-center">1</td>
                    <td class="py-2 px-4 border-b text-center">TI</td>
                    <td class="py-2 px-4 border-b text-center">Teknik Informatika </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="py-2 px-4 border-b text-center">2</td>
                  <td class="py-2 px-4 border-b text-center">RKS</td>
                  <td class="py-2 px-4 border-b text-center">Rekayasa Keamanan Siber</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="py-2 px-4 border-b text-center">3</td>
                  <td class="py-2 px-4 border-b text-center">TRM</td>
                  <td class="py-2 px-4 border-b text-center">Teknologi Rekayasa Multimedia</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="py-2 px-4 border-b text-center">4</td>
                  <td class="py-2 px-4 border-b text-center">ALKS</td>
                  <td class="py-2 px-4 border-b text-center">Akuntansi Keuangan Lembaga Syariah</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="py-2 px-4 border-b text-center">5</td>
                  <td class="py-2 px-4 border-b text-center">TM</td>
                  <td class="py-2 px-4 border-b text-center">Teknik Mesin</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
</x-layout>