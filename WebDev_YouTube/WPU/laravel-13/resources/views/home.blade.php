<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

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
</x-layout>