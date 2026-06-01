-- Membuat database
CREATE DATABASE donny_store;
USE donny_store;

-- =====================================================
-- TABEL ADMIN
-- =====================================================
CREATE TABLE admin (
    id_admin INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- =====================================================
-- TABEL PELANGGAN
-- =====================================================
CREATE TABLE pelanggan (
    id_pelanggan INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255) NOT NULL,
    alamat TEXT,
    no_telp VARCHAR(20)
);

-- =====================================================
-- TABEL BARANG
-- =====================================================
CREATE TABLE barang (
    id_barang INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(255) NOT NULL,
    harga DECIMAL(12,2) NOT NULL,
    stok INT NOT NULL DEFAULT 0
);

-- =====================================================
-- TABEL PESANAN
-- =====================================================
CREATE TABLE pesanan (
    id_pesanan INT AUTO_INCREMENT PRIMARY KEY,
    id_pelanggan INT NOT NULL,
    tanggal_pesanan DATETIME DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(12,2) NOT NULL,
    status ENUM("Menunggu", "Diproses", "Selesai", "Dibatalkan") DEFAULT "Menunggu",

    CONSTRAINT fk_pesanan_pelanggan
    FOREIGN KEY (id_pelanggan) REFERENCES pelanggan(id_pelanggan)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

-- =====================================================
-- TABEL DETAIL PESANAN
-- =====================================================
CREATE TABLE detail_pesanan (
    id_detail INT AUTO_INCREMENT PRIMARY KEY,
    id_pesanan INT NOT NULL,
    id_barang INT NOT NULL,
    jumlah INT NOT NULL,
    subtotal DECIMAL(12,2) NOT NULL,

    CONSTRAINT fk_detail_pesanan
    FOREIGN KEY (id_pesanan)
    REFERENCES pesanan(id_pesanan)
    ON UPDATE CASCADE
    ON DELETE CASCADE,

    CONSTRAINT fk_detail_barang
    FOREIGN KEY (id_barang) REFERENCES barang(id_barang)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

-- =====================================================
-- TABEL PEMBAYARAN
-- =====================================================
CREATE TABLE pembayaran (
    id_pembayaran INT AUTO_INCREMENT PRIMARY KEY,
    id_pesanan INT NOT NULL,
    metode_bayar VARCHAR(50) NOT NULL,
    tanggal_bayar DATETIME DEFAULT CURRENT_TIMESTAMP,
    status_bayar ENUM("Belum Bayar", "Lunas") DEFAULT "Belum Bayar",

    CONSTRAINT fk_pembayaran_pesanan
    FOREIGN KEY (id_pesanan) REFERENCES pesanan(id_pesanan)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);