    <nav class="bg-gray-900 text-white">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

          <!-- Kiri: Logo & Menu Desktop -->
          <div class="flex items-center gap-8">
            <a href="/" class="text-lg font-bold tracking-tight text-white">
              Home<span class="text-indigo-400">Page</span>
            </a>

            <div class="hidden md:flex items-center gap-2">
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
              <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            </div>
          </div>

          <!-- Kanan: Tombol Aksi & Hamburger Menu (Mobile) -->
          <div class="flex items-center gap-3">
            <a href="#"
              class="inline-flex items-center rounded-md bg-indigo-600 px-3.5 py-2 text-sm font-medium text-white hover:bg-indigo-500 transition">
              Masuk
            </a>

            <button id="mobile-menu-btn" type="button" aria-expanded="false" aria-label="Buka menu"
              class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-800 hover:text-white cursor-pointer">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>

        </div>
      </div>

      <!-- Menu Mobile -->
      <div id="mobile-menu" class="hidden md:hidden border-t border-gray-800 px-4 pt-2 pb-4 space-y-1">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
      </div>
    </nav>