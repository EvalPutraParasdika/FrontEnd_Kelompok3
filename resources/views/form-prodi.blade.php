<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Form Input Prodi</title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen">
      <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mt-10">
          <form>
              <!-- ID Prodi -->
              <div class="mb-4">
                  <label for="id_prodi" class="block text-sm font-medium text-gray-700">ID Prodi</label>
                  <input type="text" id="id_prodi" name="id_prodi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan ID Prodi">
              </div>
  
              <!-- Nama Prodi -->
              <div class="mb-6">
                  <label for="nama_prodi" class="block text-sm font-medium text-gray-700">Nama Prodi</label>
                  <input type="text" id="nama_prodi" name="nama_prodi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Nama Prodi">
              </div>
  
              <!-- Submit Button -->
              <div>
                  <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
              </div>
          </form>
      </div>
  </body>
  </html>
</x-layout>