-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2023 pada 02.50
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
  `kode` varchar(30) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `harga_produk` varchar(225) NOT NULL,
  `stok_produk` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_produk`
--

INSERT INTO `data_produk` (`id`, `kode`, `nama_produk`, `harga_produk`, `stok_produk`) VALUES
(1, '001', 'T-Shirt Black n Blue Legacy', 'Rp.70.000,00', '50 stok'),
(2, '002', 'T-Shirt Long Quotes Legacy', 'Rp.70.000,00', '50 stok'),
(3, '003', 'T-Shirt Legacy Cartoon ', 'Rp.70.000,00', '50 stok'),
(4, '004', 'T-Shirt Monocrom Legacy', 'Rp.70.000,00', '50 stok'),
(5, '005', 'T-Shirt Legacy Text Font', 'Rp.70.000,00', '50 stok'),
(6, '006', 'T-Shirt Man in W&B ', 'Rp.70.000,00', '50 stok'),
(7, '007', 'T-Shirt Photo Couple Lake ', 'Rp.70.000,00', '50 stok'),
(8, '008', 'T-Shirt Abstract Theme', 'Rp.70.000,00', '50 stok'),
(9, '009', 'T-Shirt Iron Maiden Legacy', 'Rp.70.000,00', '50 stok'),
(10, '0010', 'T-Shirt Skateboard On Top', 'Rp.70.000,00', '50 stok'),
(11, '001', 'Black Jeans Pants', 'Rp.45.000,00', '60 stok'),
(12, '002', '873 SLIM STRAIGHT WORK PANTS (BLACK)', 'Rp.45.000,00', '60 stok'),
(13, '003', 'Surf Pants', 'Rp.45.000,00', '60 stok'),
(14, '004', 'Loose Fit Skate Pants', 'Rp.45.000,00', '60 stok'),
(15, '005', 'Chino Pants', 'Rp.45.000,00', '60 stok'),
(16, '006', 'Big Boy Jeans Light Blue ver.', 'Rp.45.000,00', '60 stok'),
(17, '007', 'Skate Cargo Shorts', 'Rp.45.000,00', '60 stok'),
(18, '008', 'Painter Shorts', 'Rp.45.000,00', '60 stok'),
(19, '009', 'Blue Tie Dye Short Pants', 'Rp.45.000,00', '60 stok'),
(20, '0010', 'Solo Swoosh Fleece Pants', 'Rp.45.000,00', '60 stok'),
(21, '001', 'Sweater Logo Legacy', 'Rp.70.000,00', '35 stok'),
(22, '002', 'Paradise Legacy Sweater', 'Rp.70.000,00', '35 stok'),
(23, '003', 'Stripped Light Theme Sweater', 'Rp.70.000,00', '35 stok'),
(24, '004', 'White Flat Sweater', 'Rp.70.000,00', '35 stok'),
(25, '005', 'Bombed Logotype Sweater', 'Rp.70.000,00', '35 stok'),
(26, '006', 'Racing Polarskate Longsleeve', 'Rp.70.000,00', '35 stok'),
(27, '007', 'Super Power Sweater', 'Rp.70.000,00', '35 stok'),
(28, '008', 'Larry June Skate Club Sweater', 'Rp.70.000,00', '35 stok'),
(29, '009', 'Ben Broyed Signature Sweater', 'Rp.70.000,00', '35 stok'),
(30, '0010', 'Thrasher Logo Sweater', 'Rp.70.000,00', '35 stok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id` int(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `jumlah_barang` int(225) NOT NULL,
  `total` varchar(30) NOT NULL,
  `waktu_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_transaksi`
--

INSERT INTO `data_transaksi` (`id`, `kode`, `nama_barang`, `harga`, `jumlah_barang`, `total`, `waktu_transaksi`) VALUES
(1, '001', 'T-shirt Black n Blue Legacy', 'Rp.70.000,00', 2, 'Rp. 140.000,00', '2023-06-21'),
(2, '005', 'Plain Color Hoodie', 'Rp.335.000,00', 1, 'Rp.335.000,00', '2023-06-21'),
(3, '004', 'Nike Basketball Hoodie', 'Rp.335.000,00', 2, 'Rp.670.000,00', '2023-06-23'),
(4, '008', 'Spaceman Hoodie', 'Rp.335.000,00', 2, 'Rp.670.00,00', '2023-06-23'),
(5, '006', 'Bruin High Skate Shoes', 'Rp.250.000,00', 1, 'Rp.250.000,00', '2023-06-24'),
(6, '007', 'Super Power Sweater', 'Rp.70.000,00', 5, 'Rp.350.000,00', '2023-06-24'),
(7, '0010', 'Thrasher Logo Sweater', 'Rp.70.000,00', 2, 'Rp.140.000,00', '2023-06-27'),
(8, '009', 'Summer Park Deck', 'Rp.95.000,00', 1, 'Rp.95.000,00', '2023-06-29'),
(9, '002', 'Main Event (Andrew Allen) Deck', 'Rp.95.000,00', 1, 'Rp.95.000,00', '2023-06-30'),
(10, '006', 'Big Boy Jeans Light Blue ver.', 'Rp.45.000,00', 2, 'Rp.90.000,00', '2023-07-01'),
(11, '001', 'T-Shirt Black n Blue Legacy', 'Rp.70.000,00', 1, 'Rp.70.000,00', '2023-07-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hat`
--

CREATE TABLE `hat` (
  `id` int(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hat`
--

INSERT INTO `hat` (`id`, `kode`, `nama`, `harga`) VALUES
(1, '001', 'White Hat Legacy Logo', 'Rp.45.000,00'),
(2, '002', 'Sci_fi Fantasy 2 Tone Hat', 'Rp.45.000,00'),
(3, '003', 'Black Flap Cap', 'Rp.45.000,00'),
(4, '004', 'Butter Goods Spinner Cap', 'Rp.45.000,00'),
(5, '005', 'Quasi Skateboards Egg-6 Panel Hat', 'Rp.45.000,00'),
(6, '006', 'Gonz Logo Old Timer Hat', 'Rp.45.000,00'),
(7, '007', 'Krooked Eyes Fill Snapback Cap', 'Rp.45.000,00'),
(8, '008', 'Gang Logo Wol Snapback Cap', 'Rp.45.000,00'),
(9, '009', 'VX Dad Hat Denim', 'Rp.45.000,00'),
(10, '0010', 'Reflective Cycle Cap', 'Rp.45.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hoodie`
--

CREATE TABLE `hoodie` (
  `id` int(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hoodie`
--

INSERT INTO `hoodie` (`id`, `kode`, `nama`, `harga`) VALUES
(1, '001', 'Black Jeans Pants', 'Rp.45.000,00'),
(2, '002', 'Hexagon Logo Hoodie', 'Rp.335.000,00'),
(3, '003', 'Tiedye Keith Blue n white hoodie', 'Rp.335.000,00'),
(4, '004', 'Nike Basketball Hoodie', 'Rp.335.000,00'),
(5, '005', 'Plain Color Hoodie', 'Rp.335.000,00'),
(6, '006', 'Varsity Hoodie', 'Rp.335.000,00'),
(7, '007', 'Eyes LG Hoodie', 'Rp.335.000,00'),
(8, '008', 'Spaceman Hoodie', 'Rp.335.000,00'),
(9, '009', 'Pillarman Hoodie', 'Rp.335.000,00'),
(10, '0010', 'Smiley Face Hoodie', 'Rp.335.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pants`
--

CREATE TABLE `pants` (
  `id` int(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pants`
--

INSERT INTO `pants` (`id`, `kode`, `nama`, `harga`) VALUES
(1, '001', 'Black Jeans Pants', 'Rp.45.000,00'),
(2, '002', '873 SLIM STRAIGHT WORK PANTS (BLACK)', 'Rp.45.000,00'),
(3, '003', 'Surf Pants', 'Rp.45.000,00'),
(4, '004', 'Loose Fit Skate Pants', 'Rp.45.000,00'),
(5, '005', 'Chino Pants', 'Rp.45.000,00'),
(6, '006', 'Big Boy Jeans Light Blue ver.', 'Rp.45.000,00'),
(7, '007', 'Skate Cargo Shorts', 'Rp.45.000,00'),
(8, '008', 'Painter Shorts', 'Rp.45.000,00'),
(9, '009', 'Blue Tie Dye Short Pants', 'Rp.45.000,00'),
(10, '0010', 'Solo Swoosh Fleece Pants', 'Rp.45.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(2, 'Admin 1', 'Laki-laki', 'Puri Legenda, Batam Centre, Blok A1 no 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shirt`
--

CREATE TABLE `shirt` (
  `id` int(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shirt`
--

INSERT INTO `shirt` (`id`, `kode`, `nama`, `harga`) VALUES
(1, '001', 'T-Shirt Black n Blue Legacy', 'Rp.70.000,00'),
(2, '002', 'T-Shirt Long Quotes Legacy', 'Rp.70.000,00'),
(3, '003', 'T-Shirt Legacy Cartoon ', 'Rp.70.000,00'),
(4, '004', 'T-Shirt Monocrom Legacy', 'Rp.70.000,00'),
(5, '005', 'T-Shirt Legacy Text Font', 'Rp.70.000,00'),
(6, '006', 'T-Shirt Man in W&B ', 'Rp.70.000,00'),
(7, '007', 'T-Shirt Photo Couple Lake ', 'Rp.70.000,00'),
(8, '008', 'T-Shirt Abstract Theme', 'Rp.70.000,00'),
(9, '009', 'T-Shirt Iron Maiden Legacy', 'Rp.70.000,00'),
(10, '0010', 'T-Shirt Skateboard On Top', 'Rp.70.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shoes`
--

CREATE TABLE `shoes` (
  `id` int(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shoes`
--

INSERT INTO `shoes` (`id`, `kode`, `nama`, `harga`) VALUES
(1, '001', 'Sepatu Air Jordan Red n White', 'Rp.250.000,00'),
(2, '002', 'New Balance Skate Shoes', 'Rp.250.000,00'),
(3, '003', 'Blazer Low Pro GT Shoes ', 'Rp.250.000,00'),
(4, '004', 'Nike Force 58 Premium', 'Rp.250.000,00'),
(5, '005', 'Nike Dunk High Pro ISO', 'Rp.250.000,00'),
(6, '006', 'Bruin High Skate Shoes', 'Rp.250.000,00'),
(7, '007', 'Lakai Cambridge Skate Shoes', 'Rp.250.000,00'),
(8, '008', 'Nike Shane O\'Neill Pro Skate Shoes', 'Rp.250.000,00'),
(9, '009', 'Nike Chron 2', 'Rp.250.000,00'),
(10, '0010', 'Straye Footwear Stanley Navy ', 'Rp.250.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skateboard`
--

CREATE TABLE `skateboard` (
  `id` int(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skateboard`
--

INSERT INTO `skateboard` (`id`, `kode`, `nama`, `harga`) VALUES
(1, '001', 'Knox Punk Reissue Deck', 'Rp.95.000,00'),
(2, '002', 'Main Event (Andrew Allen) Deck', 'Rp.95.000,00'),
(3, '003', 'Dead Kennedy Fresh Fruit Deck', 'Rp.95.000,00'),
(4, '004', 'Coin (Matlok Bennett-Jones) Deck', 'Rp.95.000,00'),
(5, '005', 'Peace Sells (Silvas) Deck', 'Rp.95.000,00'),
(6, '006', 'Rest In Peace (P-Rod) Deck', 'Rp.95.000,00'),
(7, '007', 'Classic Eagle Deck', 'Rp.95.000,00'),
(8, '008', 'Slam Time Deck', 'Rp.95.000,00'),
(9, '009', 'Summer Park Deck', 'Rp.95.000,00'),
(10, '0010', 'Sportsman Deck', 'Rp.95.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sweater`
--

CREATE TABLE `sweater` (
  `id` int(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sweater`
--

INSERT INTO `sweater` (`id`, `kode`, `nama`, `harga`) VALUES
(1, '001', 'Sweater Logo Legacy', 'Rp.70.000,00'),
(2, '002', 'Paradise Legacy Sweater', 'Rp.70.000,00'),
(3, '003', 'Stripped Light Theme Sweater', 'Rp.70.000,00'),
(4, '004', 'White Flat Sweater', 'Rp.70.000,00'),
(5, '005', 'Bombed Logotype Sweater', 'Rp.70.000,00'),
(6, '006', 'Racing Polarskate Longsleeve', 'Rp.70.000,00'),
(7, '007', 'Super Power Sweater', 'Rp.70.000,00'),
(8, '008', 'Larry June Skate Club Sweater', 'Rp.70.000,00'),
(9, '009', 'Ben Broyed Signature Sweater', 'Rp.70.000,00'),
(10, '0010', 'Thrasher Logo Sweater', 'Rp.70.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `totebag`
--

CREATE TABLE `totebag` (
  `id` int(30) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `totebag`
--

INSERT INTO `totebag` (`id`, `kode`, `nama`, `harga`) VALUES
(1, '001', 'Totebag Legacy Abstact Theme', 'Rp.30.000,00'),
(2, '002', 'Classic Label Skatepack', 'Rp.30.000,00'),
(3, '003', 'Force Wallet Bag', 'Rp.30.000,00'),
(4, '004', 'Chocolate Shoulder Bag', 'Rp.30.000,00'),
(5, '005', 'Chuck Duffel Bag', 'Rp.30.000,00'),
(6, '006', 'Icon Skate Fanny Pack', 'Rp.30.000,00'),
(7, '007', 'Independent O.G.B.C Backpack', 'Rp.30.000,00'),
(8, '008', 'Nike Black BackPack', 'Rp.30.000,00'),
(9, '009', 'Skateman Sky Totebag', 'Rp.30.000,00'),
(10, '0010', 'Smoke Cloud Wind Totebag', 'Rp.30.000,00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin1', 'admin1', 'admin1', 'admin'),
(3, 'admin2', 'admin2', 'admin2', 'admin');

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
-- Indeks untuk tabel `hat`
--
ALTER TABLE `hat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hoodie`
--
ALTER TABLE `hoodie`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shirt`
--
ALTER TABLE `shirt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skateboard`
--
ALTER TABLE `skateboard`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sweater`
--
ALTER TABLE `sweater`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `totebag`
--
ALTER TABLE `totebag`
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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `hat`
--
ALTER TABLE `hat`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `hoodie`
--
ALTER TABLE `hoodie`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pants`
--
ALTER TABLE `pants`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `shirt`
--
ALTER TABLE `shirt`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `skateboard`
--
ALTER TABLE `skateboard`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `sweater`
--
ALTER TABLE `sweater`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `totebag`
--
ALTER TABLE `totebag`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
