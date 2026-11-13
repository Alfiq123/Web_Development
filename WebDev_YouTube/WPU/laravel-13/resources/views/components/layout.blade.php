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
    <x-navbar></x-navbar>

    <!-- 2. PAGE HEADER -->
    <x-header>{{ $title }}</x-header>

    <!-- 3. MAIN CONTENT -->
    <main class="flex-1">
      <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        {{ $slot }}
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