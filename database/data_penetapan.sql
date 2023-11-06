-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 05:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
  `_ctimeupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penetapan`
--

INSERT INTO `data_penetapan` (`id`, `nama_peraturan`, `jenis_peraturan`, `tanggal_ditetapkan`, `nama_file`, `tautan`, `_ctimeupload`, `_ctimeupdate`) VALUES
(29, 'coba1', 'coba3', '2023-11-06', NULL, 'https://docs.google.com/spreadsheets/d/1k_i5dIp5Ux4Y-yPo87_HXvt5iwle2pE-/edit?usp=sharing&ouid=104210493633833115442&rtpof=true&sd=true', '2023-11-06', '2023-11-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penetapan`
--
ALTER TABLE `data_penetapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penetapan`
--
ALTER TABLE `data_penetapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
