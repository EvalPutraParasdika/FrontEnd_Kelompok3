<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-10">
    <div class="container mx-auto  mt-5">
        <x-nav-link href="form-jurusan" :active="request()->is('/form-jurusan')">Tambah</x-nav-link>
        <table class="min-w-full bg-white border border-gray-300 mt-5">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">ID Jurusan</th>
                    <th class="py-2 px-4 border-b">Nama Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border-b text-center">1</td>
                    <td class="py-2 px-4 border-b text-center">JKB</td>
                    <td class="py-2 px-4 border-b text-center">Komputer dan Bisnis</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="py-2 px-4 border-b text-center">2</td>
                  <td class="py-2 px-4 border-b text-center">RMIP</td>
                  <td class="py-2 px-4 border-b text-center">Rekayasa Mesin dan Industri Pertanian</td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="py-2 px-4 border-b text-center">3</td>
                  <td class="py-2 px-4 border-b text-center">JREM</td>
                  <td class="py-2 px-4 border-b text-center">Rekayasa Elektronika dan Mekatronika</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
</x-layout>