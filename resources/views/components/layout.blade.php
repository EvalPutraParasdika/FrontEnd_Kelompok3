<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Home</title>
</head>
<body class="h-full">
  
<div class="min-h-full">
  <x-navbar></x-navbar>

  <x-header>{{ $title }}</x-header>
  <div class="py-1">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex content-center justify-center ">
      {{ $slot }}
    </div>
  </div>
</div>
</body>
</html>