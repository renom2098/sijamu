-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 10:37 AM
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

--
-- Dumping data for table `data_peningkatan`
--

INSERT INTO `data_peningkatan` (`id`, `nama_pengaturan`, `tautan_penetapan`, `tautan_peningkatan`, `tanggal_penetapan_baru`, `_ctimeupload`, `_ctimeupdate`) VALUES
(2, 'pengaturan1', 'https://drive.google.com/file/d/1jxMl_vpshi8TfzfHdQLGOiihGRlGV46f/view', 'https://drive.google.com/file/d/1jxMl_vpshi8TfzfHdQLGOiihGRlGV46f/view', '2023-10-24', '2023-10-24', '2023-10-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_peningkatan`
--
ALTER TABLE `data_peningkatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_peningkatan`
--
ALTER TABLE `data_peningkatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
