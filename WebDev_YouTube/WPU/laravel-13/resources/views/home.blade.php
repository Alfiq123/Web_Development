<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stacked Layout - Tailwind CSS</title>
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body class="bg-gray-100 text-gray-800 antialiased">

  <!-- Wrapper utama: min-h-screen + flex-col agar footer selalu di bawah -->
  <div class="min-h-screen flex flex-col">

    <!-- 1. NAVBAR -->
    <nav class="bg-gray-900 text-white">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

          <!-- Kiri: Logo & Menu Desktop -->
          <div class="flex items-center gap-8">
            <a href="/" class="text-lg font-bold tracking-tight text-white">
              Home<span class="text-indigo-400">Page</span>
            </a>

            <div class="hidden md:flex items-center gap-2">
              <a href="/" 
                class="rounded-md bg-gray-800 px-3 py-2 text-sm font-medium text-white">Home</a>
              <a href="/blog"
                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-800 hover:text-white transition">Blog</a>
              <a href="/contact"
                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-800 hover:text-white transition">Contact</a>
              <a href="/about"
                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-800 hover:text-white transition">About</a>
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
        <a href="/" 
          class="block rounded-md bg-gray-800 px-3 py-2 text-base font-medium text-white">Home</a>
        <a href="/blog"
          class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Blog</a>
        <a href="/contact"
          class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">Contact</a>
        <a href="/about"
          class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-white">About</a>
      </div>
    </nav>

    <!-- 2. PAGE HEADER -->
    <header class="bg-white border-b border-gray-200 shadow-sm">
      <div
        class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">Home Page</h1>
        <button type="button"
          class="inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-500 cursor-pointer transition">
          + Tambah Data
        </button>
      </div>
    </header>

    <!-- 3. MAIN CONTENT -->
    <main class="flex-1">
      <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

        <!-- Contoh Grid Card -->
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mb-6">
          <div class="rounded-lg bg-white p-6 border border-gray-200 shadow-sm">
            <p class="text-sm font-medium text-gray-500">Total Pengguna</p>
            <p class="mt-2 text-3xl font-bold text-gray-900">1.240</p>
          </div>
          <div class="rounded-lg bg-white p-6 border border-gray-200 shadow-sm">
            <p class="text-sm font-medium text-gray-500">Proyek Aktif</p>
            <p class="mt-2 text-3xl font-bold text-gray-900">24</p>
          </div>
          <div class="rounded-lg bg-white p-6 border border-gray-200 shadow-sm">
            <p class="text-sm font-medium text-gray-500">Pendapatan</p>
            <p class="mt-2 text-3xl font-bold text-gray-900">Rp 45,2 Jt</p>
          </div>
        </div>

        <!-- Area Konten Utama -->
        <div class="rounded-lg bg-white p-6 border border-gray-200 shadow-sm min-h">
          <h2 class="text-lg font-semibold text-gray-900">Konten Utama</h2>
          <p class="mt-2 text-sm text-gray-600">
            Taruh konten utama halamanmu di sini (seperti tabel, form, grafik, atau artikel). Layout ini
            sudah responsif untuk mobile maupun desktop.
          </p>
        </div>

      </div>
    </main>

    <!-- 4. FOOTER -->
    <footer class="bg-white border-t border-gray-200">
      <div
        class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-2 text-sm text-gray-500">
        <p>&copy; 2026 BrandKu. Semua hak dilindungi.</p>
        <div class="flex gap-4">
          <a href="#" class="hover:text-gray-900">Bantuan</a>
          <a href="#" class="hover:text-gray-900">Privasi</a>
        </div>
      </div>
    </footer>

  </div>

  <!-- Script sederhana untuk toggle menu mobile -->
  <script>
    const menuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
      const isHidden = mobileMenu.classList.toggle("hidden");
      menuBtn.setAttribute("aria-expanded", String(!isHidden));
    });
  </script>

</body>

</html>