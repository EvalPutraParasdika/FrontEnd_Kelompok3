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
    <div class="container mx-auto mt-5">
        <x-nav-link href="form-staff" :active="request()->is('/form-staff')">Tambah</x-nav-link>
        <table class="min-w-full bg-white border border-gray-300 mt-5">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-3 px-4 border-b text-center">ID Staff</th>
                    <th class="py-3 px-4 border-b text-center">Nama</th>
                    <th class="py-3 px-4 border-b text-center">Jabatan</th>
                    <th class="py-3 px-4 border-b text-center">No HP</th>
                    <th class="py-3 px-4 border-b text-center">Email</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b text-center">001</td>
                    <td class="py-3 px-4 border-b text-center">John Doe</td>
                    <td class="py-3 px-4 border-b text-center">Manager</td>
                    <td class="py-3 px-4 border-b text-center">081234567890</td>
                    <td class="py-3 px-4 border-b text-center">john.doe@example.com</td>
                </tr>
                <!-- Data Staff 2 -->
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b text-center">002</td>
                    <td class="py-3 px-4 border-b text-center">Jane Smith</td>
                    <td class="py-3 px-4 border-b text-center">Supervisor</td>
                    <td class="py-3 px-4 border-b text-center">087654321098</td>
                    <td class="py-3 px-4 border-b text-center">jane.smith@example.com</td>
                </tr>
                <!-- Data Staff 3 -->
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b text-center">003</td>
                    <td class="py-3 px-4 border-b text-center">Michael Johnson</td>
                    <td class="py-3 px-4 border-b text-center">Staff IT</td>
                    <td class="py-3 px-4 border-b text-center">081122334455</td>
                    <td class="py-3 px-4 border-b text-center">michael.j@example.com</td>
                </tr>
                <!-- Data Staff 4 -->
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b text-center">004</td>
                    <td class="py-3 px-4 border-b text-center">Sarah Lee</td>
                    <td class="py-3 px-4 border-b text-center">HRD</td>
                    <td class="py-3 px-4 border-b text-center">085566778899</td>
                    <td class="py-3 px-4 border-b text-center">sarah.lee@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
</x-layout> 