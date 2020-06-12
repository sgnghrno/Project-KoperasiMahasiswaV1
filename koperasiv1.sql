-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 01:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasiv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_anggota`
--

CREATE TABLE `t_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `jabatan` int(2) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_anggota`
--

INSERT INTO `t_anggota` (`id_anggota`, `nama`, `username`, `password`, `jenis_kelamin`, `telepon`, `jabatan`, `prodi`, `jurusan`, `angkatan`, `alamat`) VALUES
(1, 'Sugeng Hariono', 'sgnghrn', 'sgnghrn', 'Laki-Laki', '08156961602', 1, 'Manajemen Informatika', 'Teknologi Informasi', '2018', 'Kediri'),
(7, 'Igniter Covida', 'sekretaris', 'sekretaris', 'Perempuan', '086125638789', 2, 'Hukum', 'Sosial Budaya', '2017', 'Surabaya'),
(8, 'Physicalida Handsaniva', 'bendahara', 'bendahara', 'Perempuan', '087263782617', 3, 'Psikologi', 'Psikolog', '2020', 'Malang'),
(9, 'Socialiya Covidantyar', 'admin', 'admin', 'Laki-Laki', '029878172637', 1, 'Akuntansi', 'Akuntansi', '2019', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `t_grup`
--

CREATE TABLE `t_grup` (
  `id_grup` int(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_grup`
--

INSERT INTO `t_grup` (`id_grup`, `jabatan`) VALUES
(1, 'Admin'),
(2, 'Sektretaris'),
(3, 'Bendahara'),
(4, 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `t_tabungan`
--

CREATE TABLE `t_tabungan` (
  `id_tabungan` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `setoran` int(12) NOT NULL,
  `penarikan` int(12) NOT NULL,
  `saldo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tabungan`
--

INSERT INTO `t_tabungan` (`id_tabungan`, `id_anggota`, `setoran`, `penarikan`, `saldo`) VALUES
(1, 1, 50000, 0, 0),
(2, 1, 5000, 0, 0),
(3, 1, 5000, 0, 0),
(4, 5, 5000, 0, 0),
(5, 1, 10000, 0, 0),
(6, 1, 0, 20000, 0),
(7, 1, 0, 5000, 0),
(8, 1, 2000, 0, 0),
(9, 1, 50000, 0, 0),
(10, 1, 3000, 0, 0),
(11, 1, 5000, 0, 0),
(12, 1, 6000, 0, 0),
(13, 1, 6000, 0, 0),
(14, 1, 5000, 0, 0),
(15, 1, 0, 20000, 0),
(16, 6, 200000, 0, 0),
(17, 6, 0, 100000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `t_grup`
--
ALTER TABLE `t_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `t_tabungan`
--
ALTER TABLE `t_tabungan`
  ADD PRIMARY KEY (`id_tabungan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_anggota`
--
ALTER TABLE `t_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_grup`
--
ALTER TABLE `t_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_tabungan`
--
ALTER TABLE `t_tabungan`
  MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
