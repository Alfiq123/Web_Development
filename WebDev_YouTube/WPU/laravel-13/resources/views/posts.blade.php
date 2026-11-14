    <x-layout>
      <x-slot:title>{{ $title }}</x-slot:title>

      @foreach ( $posts as $post )
        <article class="py-8 max-w border-b border-gray-600">
          <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post["title"] }}</h2>
          </a>
          <div class="text-base mb-4 text-gray-600">
            <a href="#">{{ $post["author"] }}</a> | 14 November 2026
          </div>
          <p class="my-4 font-light">{{ Str::limit($post["body"], 100) }}</p>
          <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 hover:text-blue-700">Read more &raquo;</a>
        </article>
      @endforeach

    </x-layout>