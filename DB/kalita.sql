-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2020 pada 01.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(11) NOT NULL,
  `bus` varchar(50) NOT NULL,
  `jumlah_kursi` int(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_bus` bigint(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bus`
--

INSERT INTO `bus` (`id_bus`, `bus`, `jumlah_kursi`, `deskripsi`, `harga_bus`) VALUES
(1, 'Mitra Rahayu', 50, 'Full fasilitas', 100000),
(5, 'Pandawa', 59, 'Full Fasilitas', 2300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `kode_voucher` varchar(50) NOT NULL,
  `jml_diskon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_wisata` int(11) NOT NULL,
  `trip` varchar(100) NOT NULL,
  `waktu` int(20) NOT NULL,
  `harga_trip` bigint(14) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_wisata`, `trip`, `waktu`, `harga_trip`, `img`) VALUES
(1, 'Bandung - Yogyakarta<br>\r\nInclude : <br>\r\nCandi borobudur\r\n<br>\r\nCandi perambanan\r\n<br>\r\nLava tour m', 4, 1100000, 'jogja.jpg'),
(2, 'Bandung - Bali <br>\r\nInclude : <br>\r\nUbud <br>\r\nKuta pantai\r\n<br>\r\nKota denpasar<br>\r\nJimbaran Panta', 5, 3500000, 'bali.jpg'),
(3, 'Bandung - Cianjur<br>\r\nInclude : <br>\r\nTaman Nasional Gunung gede<br>\r\nCianjur taman sejarah<br>\r\nWa', 2, 2000000, 'cianjur.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bus` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `total_bayar` bigint(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `id_user`, `id_bus`, `id_wisata`, `total_bayar`) VALUES
(1, 5, 0, 2, 7000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `no_telp`, `level`) VALUES
(1, 'raihan', 'raihanaweu', 'raihanr8111@gmail.com', '123', '087746523804', 'admin'),
(2, 'budi', 'budi2', 'han23@gmail.com', '1234', '08888181818', 'user'),
(3, 'kicik', 'raihan44', 'fachridwi1990@gmail.com', '$2y$10$j4gQ/XOUISv/zAdBr9gsS.IYBkbOyh/ytj3GXMt0f.OaxoqJsOWky', '010920975', 'user'),
(4, 'nisa', 'nisa26', 'nisa1@gmail.com', '$2y$10$vt95RYmrZtpOaWegO4vi7eg6m..4vvSzlvA1ALmw1CUzDTnha.JIK', '0811111111', 'user'),
(5, 'raihan', 'raihanr', 'ramadhanraihan814@gmail.com', '$2y$10$9RXY51YUNE20mlJQWyZvDeipbtn65vp8Qhm785lw5gKlFdBjiUGPS', '0894645353', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_bus` (`id_bus`),
  ADD UNIQUE KEY `id_wisata` (`id_wisata`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
