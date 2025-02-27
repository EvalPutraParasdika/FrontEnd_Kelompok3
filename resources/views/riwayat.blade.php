<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Data Pengajuan Cuti</title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
      <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-6xl overflow-x-auto mt-10">
          <table class="min-w-full bg-white border border-gray-300">
              <thead>
                  <tr class="bg-gray-200">
                      <th class="py-2 px-4 border-b">ID Pengajuan</th>
                      <th class="py-2 px-4 border-b">NIM</th>
                      <th class="py-2 px-4 border-b">Nama Mahasiswa</th>
                      <th class="py-2 px-4 border-b">Program Studi</th>
                      <th class="py-2 px-4 border-b">Jurusan</th>
                      <th class="py-2 px-4 border-b">Semester Cuti</th>
                      <th class="py-2 px-4 border-b">Tanggal Mulai Cuti</th>
                      <th class="py-2 px-4 border-b">Tanggal Selesai Cuti</th>
                      <th class="py-2 px-4 border-b">Alasan</th>
                      <th class="py-2 px-4 border-b">NIP</th>
                      <th class="py-2 px-4 border-b">Nama</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="py-2 px-4 border-b text-center">10</td>
                      <td class="py-2 px-4 border-b text-center">220302008</td>
                      <td class="py-2 px-4 border-b">Dewi Putria Ayu</td>
                      <td class="py-2 px-4 border-b">D4 Teknik Pengend</td>
                      <td class="py-2 px-4 border-b">Jurusan Rel</td>
                      <td class="py-2 px-4 border-b text-center">6</td>
                      <td class="py-2 px-4 border-b text-center">2025-04-30</td>
                      <td class="py-2 px-4 border-b text-center">2025-06-30</td>
                      <td class="py-2 px-4 border-b">sabit</td>
                      <td class="py-2 px-4 border-b text-center">234SS</td>
                      <td class="py-2 px-4 border-b">Hariyanto</td>
                  </tr>
                  <tr>
                      <td class="py-2 px-4 border-b text-center">10</td>
                      <td class="py-2 px-4 border-b text-center">220302008</td>
                      <td class="py-2 px-4 border-b">Dewi Putria Ayu</td>
                      <td class="py-2 px-4 border-b">D4 Teknik Pengend</td>
                      <td class="py-2 px-4 border-b">Jurusan Rel</td>
                      <td class="py-2 px-4 border-b text-center">6</td>
                      <td class="py-2 px-4 border-b text-center">2025-04-30</td>
                      <td class="py-2 px-4 border-b text-center">2025-06-30</td>
                      <td class="py-2 px-4 border-b">sabit</td>
                      <td class="py-2 px-4 border-b text-center">428SS</td>
                      <td class="py-2 px-4 border-b">Dwi Gayatri</td>
                  </tr>
                  <tr>
                      <td class="py-2 px-4 border-b text-center">11</td>
                      <td class="py-2 px-4 border-b text-center">230305054</td>
                      <td class="py-2 px-4 border-b">Septiana Raisa</td>
                      <td class="py-2 px-4 border-b">D4 Pengembangan</td>
                      <td class="py-2 px-4 border-b">Jurusan Rel</td>
                      <td class="py-2 px-4 border-b text-center">4</td>
                      <td class="py-2 px-4 border-b text-center">2025-03-01</td>
                      <td class="py-2 px-4 border-b text-center">2025-04-30</td>
                      <td class="py-2 px-4 border-b">bekerja</td>
                      <td class="py-2 px-4 border-b text-center">264SF</td>
                      <td class="py-2 px-4 border-b">Sulistiyo</td>
                  </tr>
                  <tr>
                      <td class="py-2 px-4 border-b text-center">9</td>
                      <td class="py-2 px-4 border-b text-center">220104011</td>
                      <td class="py-2 px-4 border-b">Hanif Maulana Azidan</td>
                      <td class="py-2 px-4 border-b">D4 Teknik Pengend</td>
                      <td class="py-2 px-4 border-b">Jurusan Rel</td>
                      <td class="py-2 px-4 border-b text-center">7</td>
                      <td class="py-2 px-4 border-b text-center">2025-08-01</td>
                      <td class="py-2 px-4 border-b text-center">2026-02-11</td>
                      <td class="py-2 px-4 border-b">bekerja</td>
                      <td class="py-2 px-4 border-b text-center">234SS</td>
                      <td class="py-2 px-4 border-b">Hariyanto</td>
                  </tr>
                  <tr>
                      <td class="py-2 px-4 border-b text-center">11</td>
                      <td class="py-2 px-4 border-b text-center">230305054</td>
                      <td class="py-2 px-4 border-b">Septiana Raisa</td>
                      <td class="py-2 px-4 border-b">D4 Pengembangan</td>
                      <td class="py-2 px-4 border-b">Jurusan Rel</td>
                      <td class="py-2 px-4 border-b text-center">4</td>
                      <td class="py-2 px-4 border-b text-center">2025-03-01</td>
                      <td class="py-2 px-4 border-b text-center">2025-04-30</td>
                      <td class="py-2 px-4 border-b">bekerja</td>
                      <td class="py-2 px-4 border-b text-center">428SS</td>
                      <td class="py-2 px-4 border-b">Dwi Gayatri</td>
                  </tr>
                  <tr>
                      <td class="py-2 px-4 border-b text-center">9</td>
                      <td class="py-2 px-4 border-b text-center">220104011</td>
                      <td class="py-2 px-4 border-b">Hanif Maulana Azidan</td>
                      <td class="py-2 px-4 border-b">D4 Teknik Pengend</td>
                      <td class="py-2 px-4 border-b">Jurusan Rel</td>
                      <td class="py-2 px-4 border-b text-center">7</td>
                      <td class="py-2 px-4 border-b text-center">2025-08-01</td>
                      <td class="py-2 px-4 border-b text-center">2026-02-11</td>
                      <td class="py-2 px-4 border-b">bekerja</td>
                      <td class="py-2 px-4 border-b text-center">428SS</td>
                      <td class="py-2 px-4 border-b">Dwi Gayatri</td>
                  </tr>
                  <tr>
                      <td class="py-2 px-4 border-b text-center">11</td>
                      <td class="py-2 px-4 border-b text-center">230305054</td>
                      <td class="py-2 px-4 border-b">Septiana Raisa</td>
                      <td class="py-2 px-4 border-b">D4 Pengembangan</td>
                      <td class="py-2 px-4 border-b">Jurusan Rel</td>
                      <td class="py-2 px-4 border-b text-center">4</td>
                      <td class="py-2 px-4 border-b text-center">2025-03-01</td>
                      <td class="py-2 px-4 border-b text-center">2025-04-30</td>
                      <td class="py-2 px-4 border-b">bekerja</td>
                      <td class="py-2 px-4 border-b text-center">264SF</td>
                      <td class="py-2 px-4 border-b">Sulistiyo</td>
                  </tr>
                  <tr>
                      <td class="py-2 px-4 border-b text-center">9</td>
                      <td class="py-2 px-4 border-b text-center">220104011</td>
                      <td class="py-2 px-4 border-b">Hanif Maulana Azidan</td>
                      <td class="py-2 px-4 border-b">D4 Teknik Pengend</td>
                      <td class="py-2 px-4 border-b">Jurusan Rel</td>
                      <td class="py-2 px-4 border-b text-center">7</td>
                      <td class="py-2 px-4 border-b text-center">2025-08-01</td>
                      <td class="py-2 px-4 border-b text-center">2026-02-11</td>
                      <td class="py-2 px-4 border-b">bekerja</td>
                      <td class="py-2 px-4 border-b text-center">264SF</td>
                      <td class="py-2 px-4 border-b">Sulistiyo</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </body>
  </html>
</x-layout>