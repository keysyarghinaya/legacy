-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2023 pada 17.49
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datalegacy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produk`
--

CREATE TABLE `data_produk` (
  `id` int(30) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `harga_produk` varchar(225) NOT NULL,
  `stok_produk` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_produk`
--

INSERT INTO `data_produk` (`id`, `nama_produk`, `harga_produk`, `stok_produk`) VALUES
(1, 'T-shirt legacy', '155.000', '50 stok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id` int(30) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `jumlah_barang` int(225) NOT NULL,
  `waktu_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_transaksi`
--

INSERT INTO `data_transaksi` (`id`, `nama_barang`, `jumlah_barang`, `waktu_transaksi`) VALUES
(1, 'T-shirt Legacy', 5, '2023-06-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
