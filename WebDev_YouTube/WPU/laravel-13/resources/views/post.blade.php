    <x-layout>
      <x-slot:title>{{ $title }}</x-slot:title>

      <article class="py-8 max-w">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post["title"] }}</h2>
        <div class="text-base mb-4 text-gray-600">
          <a href="#">{{ $post["author"] }}</a> | 14 November 2026
        </div>
        <p class="my-4 font-light">{{ $post["body"] }}</p>
        <a href="/posts" class="text-blue-500 hover:text-blue-700">&laquo; Back to Posts</a>
      </article>

    </x-layout>