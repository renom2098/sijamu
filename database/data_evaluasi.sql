-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 01:48 AM
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

--
-- Dumping data for table `data_evaluasi`
--

INSERT INTO `data_evaluasi` (`id`, `nama_dok_evaluasi`, `jenis_dok_evaluasi`, `tanggal_ditetapkan`, `nama_file`, `tautan_excel`, `prodi`, `fakultas`, `_ctimeupload`, `_ctimeupdate`) VALUES
(1, 'evaluasi 1', 'evaluasi 1', '2023-10-01', '17_OKTOBER_2023_RAPAT_PERSIAPAN_APT_8_1.pdf', 'https://docs.google.com/spreadsheets/d/1k_i5dIp5Ux4Y-yPo87_HXvt5iwle2pE-/edit?usp=sharing&ouid=116626565547974171721&rtpof=true&sd=true', 1, 6, '2023-10-21', '2023-10-21'),
(4, 'coba1', 'coba2', '2023-11-03', NULL, NULL, 1, 1, '2023-11-03', '2023-11-03'),
(5, 'tautan1', 'tautan2', '2023-11-01', NULL, 'tautanexcel.dkdk.dldld', 4, 2, '2023-11-03', '2023-11-03'),
(6, 'tautan12', 'tautan22', '2023-11-01', NULL, 'nanitautan', 6, 1, '2023-11-03', '2023-11-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_evaluasi`
--
ALTER TABLE `data_evaluasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_evaluasi`
--
ALTER TABLE `data_evaluasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
