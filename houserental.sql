-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Des 2019 pada 14.25
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `houserental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kreteria`
--

CREATE TABLE `kreteria` (
  `id_kreteria` int(11) NOT NULL,
  `kd_kreteria` varchar(5) NOT NULL,
  `nama_kretria` text NOT NULL,
  `bobot` int(2) NOT NULL,
  `tipe_pilihan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kreteria`
--

INSERT INTO `kreteria` (`id_kreteria`, `kd_kreteria`, `nama_kretria`, `bobot`, `tipe_pilihan`) VALUES
(1, 'c3', 'ssss', 3, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik_kontrakan`
--

CREATE TABLE `pemilik_kontrakan` (
  `id_pemilik` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik_kontrakan`
--

INSERT INTO `pemilik_kontrakan` (`id_pemilik`, `id_user`, `nama`, `alamat`, `email`, `tlp`, `foto`) VALUES
(3, 1, 'saipul', 'ed', 'dsds', '80786', 'dsds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah`
--

CREATE TABLE `rumah` (
  `id_rumah` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `nama_rumah` text NOT NULL,
  `harga` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_kamar` int(2) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `listrik` varchar(50) NOT NULL,
  `air` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah`
--

INSERT INTO `rumah` (`id_rumah`, `id_pemilik`, `nama_rumah`, `harga`, `alamat`, `jumlah_kamar`, `luas_bangunan`, `listrik`, `air`, `lokasi`, `longitude`, `latitude`, `image`, `status`) VALUES
(1, 3, 'dsds', 12121, '', 1, 2, '1', 'w', 'ssdf ddada dadada dasasas asas', '1313', '3232', 'dssa', 'd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'akbaralzaini', 'akbar123', 'akbar alzaini', 1),
(2, 'ainun', 'ainun123', 'ainun mardlliyah', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kreteria`
--
ALTER TABLE `kreteria`
  ADD PRIMARY KEY (`id_kreteria`);

--
-- Indexes for table `pemilik_kontrakan`
--
ALTER TABLE `pemilik_kontrakan`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id_rumah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kreteria`
--
ALTER TABLE `kreteria`
  MODIFY `id_kreteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pemilik_kontrakan`
--
ALTER TABLE `pemilik_kontrakan`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
