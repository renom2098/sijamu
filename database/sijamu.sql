-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 09:34 AM
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
  `_ctimeupdate` date DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_evaluasi`
--

INSERT INTO `data_evaluasi` (`id`, `nama_dok_evaluasi`, `jenis_dok_evaluasi`, `tanggal_ditetapkan`, `nama_file`, `tautan_excel`, `prodi`, `fakultas`, `_ctimeupload`, `_ctimeupdate`, `id_level`, `id_fakultas`, `id_prodi`, `id_jenis`) VALUES
(7, 'tautan1', 'tautan2', '2023-11-29', NULL, 'tautanexcel.dkdk.dldld', 9, 11, '2023-11-29', '2023-11-29', NULL, NULL, 6, NULL),
(8, 'tautan1', 'tautan2', '', NULL, 'tautanexcel.dkdk.dldld', 1, 2, '2023-11-29', '2023-11-29', 1, NULL, NULL, NULL),
(9, 'tautan1', 'tautan2', '', NULL, 'tautanexcel.dkdk.dldld', 3, 2, '2023-11-29', '2023-11-29', 1, NULL, NULL, NULL),
(10, 'tautan1', 'tautan2', '', NULL, 'tautanexcel.dkdk.dldld', 1, 1, '2023-11-29', '2023-11-29', 1, NULL, NULL, NULL),
(11, 'tautan1', 'tautan2', '', NULL, 'tautanexcel.dkdk.dldld', 1, 1, '2023-11-29', '2023-11-29', NULL, NULL, NULL, NULL),
(12, 'tautan1', 'tautan2', '', NULL, 'tautanexcel.dkdk.dldld', 2, 3, '2023-11-29', '2023-11-29', 1, NULL, NULL, NULL),
(13, 'dd', 'dd', '2023-11-30', NULL, 'dsd', 1, 1, '2023-11-29', '2023-11-29', 1, 5, 17, NULL),
(14, 'tautan12reno', 'tautan22reno', '2023-11-30', NULL, 'tautanexcel.dkdk.dldld', 9, 11, '2023-11-29', '2023-11-29', 2, 5, 7, NULL),
(15, 'ini data fikom21', 'ini data fikom2', '2023-12-02', NULL, 'ini data fikom', 8, 5, '2023-12-02', '2023-12-04', 3, 5, 8, 2),
(16, 'ini data fikom', 'ini data fikom', '2023-12-02', NULL, 'ini data fikom', 8, 5, '2023-12-02', '2023-12-02', 3, 5, 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_pelaksanaan`
--

CREATE TABLE `data_pelaksanaan` (
  `id` int(11) NOT NULL,
  `nama_dok_pelaksanaan` varchar(128) DEFAULT NULL,
  `jenis_dok_pelaksanaan` varchar(128) DEFAULT NULL,
  `tanggal_ditetapkan` date DEFAULT NULL,
  `tautan` varchar(256) DEFAULT NULL,
  `nama_file` varchar(128) DEFAULT NULL,
  `_ctimeupload` date DEFAULT NULL,
  `_ctimeupdate` date DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pelaksanaan`
--

INSERT INTO `data_pelaksanaan` (`id`, `nama_dok_pelaksanaan`, `jenis_dok_pelaksanaan`, `tanggal_ditetapkan`, `tautan`, `nama_file`, `_ctimeupload`, `_ctimeupdate`, `id_level`, `id_fakultas`, `id_prodi`, `id_jenis`) VALUES
(3, 'jjj2', 'jjj2', '2023-11-01', 'jjj2', NULL, '2023-11-30', '2023-11-30', 2, 1, 6, NULL);

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
  `tautan` varchar(256) DEFAULT NULL,
  `_ctimeupload` date DEFAULT NULL,
  `_ctimeupdate` date DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_penetapan`
--

INSERT INTO `data_penetapan` (`id`, `nama_peraturan`, `jenis_peraturan`, `tanggal_ditetapkan`, `nama_file`, `tautan`, `_ctimeupload`, `_ctimeupdate`, `id_level`, `id_fakultas`, `id_prodi`, `id_jenis`) VALUES
(29, 'coba11', 'coba3', '2023-11-06', NULL, 'https://docs.google.com/spreadsheets/d/1k_i5dIp5Ux4Y-yPo87_HXvt5iwle2pE-/edit?usp=sharing&ouid=104210493633833115442&rtpof=true&sd=true', '2023-11-06', '2023-12-04', 1, 9, 17, 1),
(30, 'coba coba', 'coba coba', '2023-11-01', NULL, 'https://docs.google.com/spreadsheets/d/1k_i5dIp5Ux4Y-yPo87_HXvt5iwle2pE-/edit?usp=sharing&ouid=104210493633833115442&rtpof=true&sd=true', '2023-11-29', '2023-11-29', NULL, NULL, NULL, 0),
(31, 'cek2', 'cek2', '2023-11-01', NULL, 'eee2', '2023-11-30', '2023-11-30', 2, 1, 6, 0);

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
  `_ctimeupdate` date DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pengendalian`
--

INSERT INTO `data_pengendalian` (`id`, `nama_bidang_pengaturan_standar`, `tautan_pelaksanaan_rtm`, `tautan_bukti_pelaksanaan_rtm`, `tautan_pelaksanaan_rtl`, `tautan_bukti_pelaksanaan_rtl`, `_ctimeupload`, `_ctimeupdate`, `id_level`, `id_fakultas`, `id_prodi`, `id_jenis`) VALUES
(5, 'dw2', 'dw2', 'dw3', 'dw4', 'dw5', '2023-11-30', '2023-11-30', 2, 1, 6, NULL);

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
  `_ctimeupdate` date DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_peningkatan`
--

INSERT INTO `data_peningkatan` (`id`, `nama_pengaturan`, `tautan_penetapan`, `tautan_peningkatan`, `tanggal_penetapan_baru`, `_ctimeupload`, `_ctimeupdate`, `id_level`, `id_fakultas`, `id_prodi`, `id_jenis`) VALUES
(3, 'dddw', 'dddw', 'dddw', '2023-11-30', '2023-11-30', '2023-11-30', 2, 1, 6, NULL);

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
(9, 'Admin'),
(10, 'Pusat'),
(11, 'Biro'),
(12, 'Unit'),
(13, 'Lembaga'),
(14, 'Kesekretariatan'),
(15, 'Koordinator');

-- --------------------------------------------------------

--
-- Table structure for table `t_jenis`
--

CREATE TABLE `t_jenis` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_jenis`
--

INSERT INTO `t_jenis` (`id`, `nama_jenis`) VALUES
(1, 'Fakultas'),
(2, 'Prodi'),
(3, 'Lainnya');

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
(17, 'Admin'),
(18, 'Biro Administrasi Akademik Kemahasiswaan dan Alumni'),
(19, 'Pusat Karir Mahasiswa'),
(20, 'Biro Administrasi Umum dan Keuangan'),
(21, 'Biro Hubungan Masyarakat dan Kerjasama'),
(22, 'Biro Hukum dan Organisasi Ketatalaksanaan'),
(23, 'Lembaga Bantuan Hukum'),
(24, 'UPT PUSKOM'),
(25, 'UPT Perpustakaan'),
(26, 'Pusat MKKU'),
(27, 'LPPM'),
(28, 'UPT Bahasa'),
(29, 'Pusat Inkubator Bisnis'),
(30, 'Kesekretariatan Penerimaan Mahasiswa Baru'),
(31, 'Koordinator MBKM'),
(32, 'Rektor'),
(33, 'Wakil Rektor I'),
(34, 'Wakil Rektor II');

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
  `jenis` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(128) DEFAULT NULL,
  `_ctimeupload` date DEFAULT NULL,
  `_ctimeupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`, `level`, `fakultas`, `prodi`, `jenis`, `nama_lengkap`, `_ctimeupload`, `_ctimeupdate`) VALUES
(3, 'admin', 'admin', 1, 9, 17, 1, 'LPM', '2023-10-26', '2023-12-04'),
(4, 'gkmfia', 'gkmfia', 2, 1, 6, NULL, 'GKM FIA', '2023-10-26', '2023-10-26'),
(5, 'fasilkom', 'fasilkom', 3, 4, 12, NULL, 'FASILKOM', '2023-11-29', '2023-11-29'),
(6, 'coba', 'coba', 1, 4, 12, NULL, 'COBA', '2023-11-29', '2023-11-29'),
(7, 'fikom', 'fikom', 3, 5, 8, 2, 'FIKOM', '2023-12-02', '2023-12-04'),
(8, 'sikologi', 'sikologi', 3, 5, 7, NULL, 'Sikologi', '2023-12-02', '2023-12-02');

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
-- Indexes for table `t_jenis`
--
ALTER TABLE `t_jenis`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_pelaksanaan`
--
ALTER TABLE `data_pelaksanaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_penetapan`
--
ALTER TABLE `data_penetapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `data_pengendalian`
--
ALTER TABLE `data_pengendalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_peningkatan`
--
ALTER TABLE `data_peningkatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_fakultas`
--
ALTER TABLE `t_fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_jenis`
--
ALTER TABLE `t_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_level`
--
ALTER TABLE `t_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_prodi`
--
ALTER TABLE `t_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
