-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 05:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_dokumen` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `no_box` varchar(20) NOT NULL,
  `no_file` varchar(20) NOT NULL,
  `bulan_periode` varchar(2) NOT NULL,
  `tahun_periode` varchar(4) NOT NULL,
  `keterangan` text NOT NULL,
  `berkas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`id_berkas`, `id_lokasi`, `id_dokumen`, `id_bidang`, `no_box`, `no_file`, `bulan_periode`, `tahun_periode`, `keterangan`, `berkas`) VALUES
(1, 1, 1, 3, '2141', '11', '11', '2021', '1', 'kursi.jpg'),
(2, 1, 2, 3, '1', '1', '12', '2022', 'asad', 'kursi.jpg'),
(3, 1, 3, 2, '53353', '2', '2', '2021', 'keterangan', '12123-42251-1-PB.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bidang`
--

INSERT INTO `tb_bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'Perben'),
(2, 'Aset'),
(3, 'Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nama_dokumen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id_dokumen`, `nama_dokumen`) VALUES
(1, 'BKU'),
(2, 'LPJ'),
(3, 'SPJ Fungsional'),
(8, 'Dokumen SPJ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(1, 'Bangunan Utama'),
(2, 'Bangunan Cabang 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `level_user` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `password`, `no_hp`, `email`, `alamat`, `level_user`) VALUES
(2, 'Tes', 'tes', 'tes', '123', 'tes@gmail.com', 'Padang', 'user'),
(3, 'User', 'user', 'user', '08123456789', 'user@gmail.com', 'Padang', 'user'),
(4, 'Admin', 'admin', 'admin', '08123456789', 'admin@gmail.com', 'Padang', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
