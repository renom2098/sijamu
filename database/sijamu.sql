-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 07:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sijamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_evaluasi`
--

CREATE TABLE `data_evaluasi` (
  `id` int(11) NOT NULL,
  `nama_dok_evaluasi` varchar(128) DEFAULT NULL,
  `jenis_dok_evaluasi` varchar(128) DEFAULT NULL,
  `tanggal_ditetapkan` varchar(128) DEFAULT NULL,
  `nama_file` varchar(128) DEFAULT NULL,
  `tautan_excel` varchar(256) DEFAULT NULL,
  `prodi` int(11) DEFAULT NULL,
  `fakultas` int(11) DEFAULT NULL,
  `_ctimeupload` date DEFAULT NULL,
  `_ctimeupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pelaksanaan`
--

CREATE TABLE `data_pelaksanaan` (
  `id` int(11) NOT NULL,
  `nama_dok_pelaksanaan` varchar(128) DEFAULT NULL,
  `jenis_dok_pelaksanaan` varchar(128) DEFAULT NULL,
  `tanggal_ditetapkan` date DEFAULT NULL,
  `nama_file` varchar(128) DEFAULT NULL,
  `_ctimeupload` date DEFAULT NULL,
  `_ctimeupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_penetapan`
--

CREATE TABLE `data_penetapan` (
  `id` int(11) NOT NULL,
  `nama_peraturan` varchar(128) DEFAULT NULL,
  `jenis_peraturan` varchar(128) DEFAULT NULL,
  `tanggal_ditetapkan` date DEFAULT NULL,
  `nama_file` varchar(128) DEFAULT NULL,
  `_ctimeupload` date DEFAULT NULL,
  `_ctimeupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengendalian`
--

CREATE TABLE `data_pengendalian` (
  `id` int(11) NOT NULL,
  `nama_bidang_pengaturan_standar` varchar(128) DEFAULT NULL,
  `tautan_pelaksanaan_rtm` varchar(256) DEFAULT NULL,
  `tautan_bukti_pelaksanaan_rtm` varchar(256) DEFAULT NULL,
  `tautan_pelaksanaan_rtl` varchar(256) DEFAULT NULL,
  `tautan_bukti_pelaksanaan_rtl` varchar(256) DEFAULT NULL,
  `_ctimeupload` date DEFAULT NULL,
  `_ctimeupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_peningkatan`
--

CREATE TABLE `data_peningkatan` (
  `id` int(11) NOT NULL,
  `nama_pengaturan` varchar(128) DEFAULT NULL,
  `tautan_penetapan` varchar(256) DEFAULT NULL,
  `tautan_peningkatan` varchar(256) DEFAULT NULL,
  `tanggal_penetapan_baru` date DEFAULT NULL,
  `_ctimeupload` date DEFAULT NULL,
  `_ctimeupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_fakultas`
--

CREATE TABLE `t_fakultas` (
  `id` int(11) NOT NULL,
  `nama_fakultas` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_fakultas`
--

INSERT INTO `t_fakultas` (`id`, `nama_fakultas`) VALUES
(1, 'Fakultas Ilmu Administrasi'),
(2, 'Fakultas Teknik'),
(3, 'Fakultas Hukum'),
(4, 'Fakultas Ilmu Komputer'),
(5, 'Fakultas Ilmu Komunikasi'),
(6, 'Fakultas Agro Bisnis dan Rekayasa Pertanian'),
(7, 'Fakultas Keguruan dan Ilmu Pendidikan'),
(8, 'Magister Administrasi Publik'),
(9, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_level`
--

CREATE TABLE `t_level` (
  `id` int(11) NOT NULL,
  `nama_level` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_level`
--

INSERT INTO `t_level` (`id`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Auditor'),
(3, 'Audite'),
(4, 'Pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `t_prodi`
--

CREATE TABLE `t_prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_prodi`
--

INSERT INTO `t_prodi` (`id`, `nama_prodi`) VALUES
(1, 'Administrasi Keuangan'),
(2, 'Agribisnis'),
(3, 'Agroteknologi'),
(4, 'Arsitektur'),
(5, 'Ilmu Administrasi Bisnis'),
(6, 'Ilmu Administrasi Publik'),
(7, 'Ilmu Hukum'),
(8, 'Ilmu Komunikasi'),
(9, 'Pendidikan Bahasa Inggris'),
(10, 'Pendidikan Jasmani, Kesehatan dan Rekreasi'),
(11, 'Pendidikan Matematika'),
(12, 'Sistem Informasi'),
(13, 'Teknik Elektro'),
(14, 'Teknik Mesin'),
(15, 'Teknik Sipil'),
(16, 'Ilmu Administrasi'),
(17, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `fakultas` int(11) DEFAULT NULL,
  `prodi` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(128) DEFAULT NULL,
  `_ctimeupload` date DEFAULT NULL,
  `_ctimeupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`, `level`, `fakultas`, `prodi`, `nama_lengkap`, `_ctimeupload`, `_ctimeupdate`) VALUES
(3, 'admin', 'admin', 1, 9, 17, 'LPM', '2023-10-26', '2023-11-02'),
(4, 'gkmfia', 'gkmfia', 2, 1, 6, 'GKM FIA', '2023-10-26', '2023-10-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_evaluasi`
--
ALTER TABLE `data_evaluasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pelaksanaan`
--
ALTER TABLE `data_pelaksanaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_penetapan`
--
ALTER TABLE `data_penetapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pengendalian`
--
ALTER TABLE `data_pengendalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_peningkatan`
--
ALTER TABLE `data_peningkatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_fakultas`
--
ALTER TABLE `t_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_level`
--
ALTER TABLE `t_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_prodi`
--
ALTER TABLE `t_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_evaluasi`
--
ALTER TABLE `data_evaluasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_pelaksanaan`
--
ALTER TABLE `data_pelaksanaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_penetapan`
--
ALTER TABLE `data_penetapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `data_pengendalian`
--
ALTER TABLE `data_pengendalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_peningkatan`
--
ALTER TABLE `data_peningkatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_fakultas`
--
ALTER TABLE `t_fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_level`
--
ALTER TABLE `t_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_prodi`
--
ALTER TABLE `t_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
