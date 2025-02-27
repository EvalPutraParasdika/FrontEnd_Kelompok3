<x-layout>

  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ( $posts as $post )
 
  <article class="py-8 max-w-screen-md border-b border-gray-200">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
      {{ $post ['title'] }}
    </h2>
    <div class="text-gray-500 text-base">
      <a href="#">{{ $post ['author'] }}</a> | 25 Februari 2025
    </div>
    <p class="my-4 font-light">{{ Str::limit($post ['body'], 100) }}</p>
    <a href="#" class="text-blue-600 hover:underline">Read more &raquo;</a>
  </article>

  @endforeach 
</x-layout>