---
math: mathjax
marp: true
style: |
    .columns {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1rem;
    }

    .container {
        display: flex;
        justify-content: space-between;
    }
theme: gaia
---

<h1>Studi Kasus</h1>

<p style="font-size: 22pt; text-align: justify;">Suatu perusahaan makanan kaleng akan memproduksi makanan jenis ABC. Data 1 bulan terakhir, permintaan terbesar mencapai 5000 kemasan/hari dan permintaan terkecil mencapai kemasan 1000/hari.</p>

<p style="font-size: 22pt; text-align: justify;">Persediaan barang digudang terbanyak mencapai 600 kemasan/hari dan terkecil 100 kemasan/hari. Sampai saat ini perusahaan baru mampu memproduksi barangmaksimum 7000 kemasan/hari, untuk efisiensi mesin dan SDM tiap hari diharapkan perusahaan memproduksi paling tidak 2000 kemasan.</p>

<p style="font-size: 22pt; text-align: justify;">Berapa makanan jenis ABC yang harus diproduksi jika jumlah permintaan sebanyak 4000 kemasan dan persediaan digudang masih 300 kemasan. Apabila proses produksi perusahaan tersebut menggunakan 4 aturan fuzzy berikut?</p>

---

# Aturan

- [R1] IF Permintaan TURUN And Persediaan BANYAK THEN Produksi Barang BERKURANG

---

$$z^* = \frac{\sum z_i \cdot \mu(z_i)}{\sum \mu(z_i)} \rightarrow $$
