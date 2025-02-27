<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Mahasiswa - Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100  p-10">
    <div class="">
    </div>
    <div class="container mx-auto mt-5">
        <x-nav-link href="form-mahasiswa" :active="request()->is('/form-mahasiswa')">Tambah</x-nav-link>
        <table class="min-w-full bg-white border border-gray-300 mt-5">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-3 px-4 border-gray-300 text-center">NIM</th>
                    <th class="py-3 px-4 border-b text-center">Nama</th>
                    <th class="py-3 px-4 border-b text-center">No HP</th>
                    <th class="py-3 px-4 border-b text-center">Email</th>
                    <th class="py-3 px-4 border-b text-center">Tahun Akademik</th>
                    <th class="py-3 px-4 border-b text-center">Prodi</th>
                    <th class="py-3 px-4 border-b text-center">Status</th>
                    
                </tr>
            </thead>
            <tbody>
                <!-- Data Mahasiswa 1 -->
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b text-center">John Doe</td>
                    <td class="py-3 px-4 border-b text-center">081234567890</td>
                    <td class="py-3 px-4 border-b text-center">12345678</td>
                    <td class="py-3 px-4 border-b text-center">john.doe@example.com</td>
                    <td class="py-3 px-4 border-b text-center">2022/2023</td>
                    <td class="py-3 px-4 border-b text-center">Teknik Informatika</td>
                    <td class="py-3 px-4 border-b text-center">Aktif</td>
                </tr>
                <!-- Data Mahasiswa 2 -->
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b text-center">87654321</td>
                    <td class="py-3 px-4 border-b text-center">Jane Smith</td>
                    <td class="py-3 px-4 border-b text-center">087654321098</td>
                    <td class="py-3 px-4 border-b text-center">jane.smith@example.com</td>
                    <td class="py-3 px-4 border-b text-center">2021/2022</td>
                    <td class="py-3 px-4 border-b text-center">Sistem Informasi</td>
                    <td class="py-3 px-4 border-b text-center">Cuti</td>
                </tr>
                <!-- Data Mahasiswa 3 -->
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b text-center">11223344</td>
                    <td class="py-3 px-4 border-b text-center">Michael Johnson</td>
                    <td class="py-3 px-4 border-b text-center">081122334455</td>
                    <td class="py-3 px-4 border-b text-center">michael.j@example.com</td>
                    <td class="py-3 px-4 border-b text-center">2023/2024</td>
                    <td class="py-3 px-4 border-b text-center">Teknik Elektro</td>
                    <td class="py-3 px-4 border-b text-center">Aktif</td>
                </tr>
                <!-- Data Mahasiswa 4 -->
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b text-center">55667788</td>
                    <td class="py-3 px-4 border-b text-center">Sarah Lee</td>
                    <td class="py-3 px-4 border-b text-center">085566778899</td>
                    <td class="py-3 px-4 border-b text-center">sarah.lee@example.com</td>
                    <td class="py-3 px-4 border-b text-center">2020/2021</td>
                    <td class="py-3 px-4 border-b text-center">Manajemen</td>
                    <td class="py-3 px-4 border-b text-center">Lulus</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
</x-layout> 