<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan Cuti</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl mt-10">
        <form>
            <!-- NIM -->
            <div class="mb-4">
                <label for="nim" class="block text-gray-700 text-sm font-bold mb-2">NIM</label>
                <input type="text" id="nim" name="nim" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan NIM" required>
            </div>

            <!-- Nama -->
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                <input type="text" id="nama" name="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Nama" required>
            </div>

            <!-- Kelas -->
            <div class="mb-4">
                <label for="kelas" class="block text-gray-700 text-sm font-bold mb-2">Kelas</label>
                <input type="text" id="kelas" name="kelas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Kelas" required>
            </div>

            <!-- Semester -->
            <div class="mb-4">
                <label for="semester" class="block text-gray-700 text-sm font-bold mb-2">Semester</label>
                <input type="number" id="semester" name="semester" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Semester" required>
            </div>

            <!-- Tanggal Pengajuan -->
            <div class="mb-4">
                <label for="tgl_pengajuan" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Pengajuan</label>
                <input type="date" id="tgl_pengajuan" name="tgl_pengajuan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <!-- Semester Cuti -->
            <div class="mb-4">
                <label for="semester_cuti" class="block text-gray-700 text-sm font-bold mb-2">Semester Cuti</label>
                <input type="number" id="semester_cuti" name="semester_cuti" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Semester Cuti" required>
            </div>

            <!-- Tanggal Mulai Cuti -->
            <div class="mb-4">
                <label for="tgl_mulai_cuti" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Mulai Cuti</label>
                <input type="date" id="tgl_mulai_cuti" name="tgl_mulai_cuti" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <!-- Tanggal Selesai Cuti -->
            <div class="mb-4">
                <label for="tgl_selesai_cuti" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Selesai Cuti</label>
                <input type="date" id="tgl_selesai_cuti" name="tgl_selesai_cuti" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <!-- Alasan -->
            <div class="mb-4">
                <label for="alasan" class="block text-gray-700 text-sm font-bold mb-2">Alasan</label>
                <textarea id="alasan" name="alasan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4" placeholder="Masukkan Alasan" required></textarea>
            </div>

            <!-- Tombol Submit -->
            <div class="flex items-center justify-center mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Ajukan Cuti
                </button>
            </div>
        </form>
    </div>
</body>
</html>
</x-layout>