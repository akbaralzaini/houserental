-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jan 2020 pada 11.19
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
  `kd_kreteria` varchar(5) NOT NULL,
  `nama_kreteria` text NOT NULL,
  `bobot` int(2) NOT NULL,
  `tipe_pilihan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kreteria`
--

INSERT INTO `kreteria` (`kd_kreteria`, `nama_kreteria`, `bobot`, `tipe_pilihan`) VALUES
('K3D', 'akkaka', 3, '1'),
('DX3', 'dfd s ', 4, '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kreteria_pilihan`
--

CREATE TABLE `kreteria_pilihan` (
  `id_pilihan` int(11) NOT NULL,
  `kode_kreteria` varchar(11) NOT NULL,
  `pilihan` varchar(30) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kreteria_pilihan`
--

INSERT INTO `kreteria_pilihan` (`id_pilihan`, `kode_kreteria`, `pilihan`, `bobot`) VALUES
(7, 'K3D', 'sdds', 3),
(8, 'K3D', '2dsds', 4),
(9, 'K3D', '2eed', 55),
(10, 'K3D', 'bbbbb', 33),
(11, 'erv44', '4dd', 4),
(12, 'erv44', 'cc', 5),
(18, 'DX3', 'dd', 33),
(19, 'DX3', 'ssa', 34),
(20, 'DX3', 'ccc', 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kreteria_range`
--

CREATE TABLE `kreteria_range` (
  `id_range` int(11) NOT NULL,
  `kode_kreteria` varchar(11) NOT NULL,
  `awal` int(15) NOT NULL,
  `akhir` int(15) NOT NULL,
  `pilihan` varchar(30) NOT NULL,
  `bobot` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik_kontrakan`
--

CREATE TABLE `pemilik_kontrakan` (
  `id_pemilik` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `email` varchar(50) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `foto` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik_kontrakan`
--

INSERT INTO `pemilik_kontrakan` (`id_pemilik`, `id_user`, `nama`, `alamat`, `email`, `tlp`, `foto`) VALUES
(2, 2, 'ainuon', '   jl lintas sumatera jalan varu ulak lebar lahat   ', 'nononono@gmail.com', '80786', 'asset/img/rumah/506009.jpg'),
(4, 3, 'bbaba', NULL, NULL, NULL, NULL);

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
  `status` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah`
--

INSERT INTO `rumah` (`id_rumah`, `id_pemilik`, `nama_rumah`, `harga`, `alamat`, `jumlah_kamar`, `luas_bangunan`, `listrik`, `air`, `lokasi`, `longitude`, `latitude`, `image`, `status`) VALUES
(5, 2, 'akka', 9000000, 'sasa', 2, 300, 'Listrik Prabayar', 'Pdam', 'a:1:{i:0;s:14:"Sekolah/Kampus";}', '104.75360870361328', '-2.9850416818862575', 'a:3:{i:0;s:31:"asset/img/rumah/marker copy.jpg";i:1;s:26:"asset/img/rumah/marker.jpg";i:2;s:25:"asset/img/rumah/plane.jpg";}', '1'),
(2, 2, 'akka', 6000000, 'sasa', 1, 20, 'Listrik Prabayar', 'Pdam', 'a:1:{i:0;s:14:"Sekolah/Kampus";}', '104.75360870361328', '-2.9850416818862575', 'a:3:{i:0;s:31:"asset/img/rumah/marker copy.jpg";i:1;s:26:"asset/img/rumah/marker.jpg";i:2;s:25:"asset/img/rumah/plane.jpg";}', '1'),
(7, 2, 'akka', 5500000, 'sasa', 2, 250, 'Listrik Pascabayar', 'sumur', 'a:1:{i:0;s:14:"Sekolah/Kampus";}', '104.75360870361328', '-2.9850416818862575', 'a:3:{i:0;s:31:"asset/img/rumah/marker copy.jpg";i:1;s:26:"asset/img/rumah/marker.jpg";i:2;s:25:"asset/img/rumah/plane.jpg";}', '1'),
(6, 2, 'akka', 11500000, 'sasa', 2, 100, 'Listrik Prabayar', 'Pdam', 'a:1:{i:0;s:14:"Sekolah/Kampus";}', '104.75360870361328', '-2.9850416818862575', 'a:3:{i:0;s:31:"asset/img/rumah/marker copy.jpg";i:1;s:26:"asset/img/rumah/marker.jpg";i:2;s:25:"asset/img/rumah/plane.jpg";}', '1');

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
(2, 'ainun', 'ainun123', 'ainun mardlliyah', 2),
(3, 'admin_rsud@ahmad.com', 'admin123', 'bbaba', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kreteria`
--
ALTER TABLE `kreteria`
  ADD PRIMARY KEY (`kd_kreteria`);

--
-- Indexes for table `kreteria_pilihan`
--
ALTER TABLE `kreteria_pilihan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- Indexes for table `kreteria_range`
--
ALTER TABLE `kreteria_range`
  ADD PRIMARY KEY (`id_range`);

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
-- AUTO_INCREMENT for table `kreteria_pilihan`
--
ALTER TABLE `kreteria_pilihan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `kreteria_range`
--
ALTER TABLE `kreteria_range`
  MODIFY `id_range` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemilik_kontrakan`
--
ALTER TABLE `pemilik_kontrakan`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
