-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 09:58 AM
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

--
-- Dumping data for table `data_penetapan`
--

INSERT INTO `data_penetapan` (`id`, `nama_peraturan`, `jenis_peraturan`, `tanggal_ditetapkan`, `nama_file`, `_ctimeupload`, `_ctimeupdate`) VALUES
(19, 'qwe11', 'qwe11', '2023-10-01', 'Undangan_Sosialisasi_Dari_PT_SEVIMA2.pdf', '2023-10-18', '2023-10-20'),
(20, 'kegiatan 2', 'kegiatan 2', '2017-12-01', 'kegiatan1.pdf', '2023-10-19', '2023-10-19'),
(22, 'tanggal123', 'tanggal223', '2023-10-06', 'suratala720362.pdf', '2023-10-20', '2023-10-20'),
(23, '2', '2', '2023-10-04', 'suratala720361.pdf', '2023-10-20', '2023-10-20'),
(25, 'sdsdsd coba', 'sdsdsd coba', '2023-10-06', '17_OKTOBER_2023_RAPAT_PERSIAPAN_APT_8_3.pdf', '2023-10-20', '2023-10-21'),
(28, 'nice 1', 'nice 2', '2023-12-01', '17_OKTOBER_2023_RAPAT_PERSIAPAN_APT_8_4.pdf', '2023-10-21', '2023-10-21');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
