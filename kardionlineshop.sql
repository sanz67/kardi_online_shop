-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Okt 2017 pada 18.42
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kardionlineshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(9) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(9) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `lagi_on` int(1) NOT NULL,
  `terakhir_masuk` datetime NOT NULL,
  `terakhir_on` datetime NOT NULL,
  `terakhir_keluar` datetime NOT NULL,
  `warna_favorit` varchar(10) NOT NULL,
  `tgl_daftar` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `tgl_lahir`, `jk`, `alamat`, `username`, `password`, `lagi_on`, `terakhir_masuk`, `terakhir_on`, `terakhir_keluar`, `warna_favorit`, `tgl_daftar`) VALUES
(1, 'Kardi', '1996-10-09', 'Laki-laki', 'Cianjur', 'kardi', 'kardi', 1, '2017-10-20 23:13:14', '2017-10-20 23:42:57', '2017-10-20 23:12:50', 'purple', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id_postingan` int(11) NOT NULL,
  `isi` varchar(120) NOT NULL,
  `tgl_post` datetime NOT NULL,
  `id_pengguna` int(9) NOT NULL,
  `suka` int(9) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id_postingan`, `isi`, `tgl_post`, `id_pengguna`, `suka`, `judul`, `harga`) VALUES
(82, 'Pensil menulis dan menggambar', '2017-10-21 23:05:28', 1, 0, 'Pencil 2B', 5000),
(83, 'Pulpen menulis cepat', '2017-10-21 23:06:55', 1, 0, 'Pulpen 0.5mm point', 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `id_pengguna` (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_pengguna_2` (`id_pengguna`),
  ADD KEY `id_pengguna_3` (`id_pengguna`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id_postingan`),
  ADD UNIQUE KEY `id_postingan_2` (`id_postingan`),
  ADD KEY `id_postingan` (`id_postingan`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_postingan_3` (`id_postingan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id_postingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
