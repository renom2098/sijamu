-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 06:19 PM
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
  `nama_peraturan` varchar(128) NOT NULL,
  `jenis_peraturan` varchar(128) NOT NULL,
  `nama_file` varchar(128) NOT NULL,
  `_ctimeupload` date NOT NULL,
  `_ctimeupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penetapan`
--

INSERT INTO `data_penetapan` (`id`, `nama_peraturan`, `jenis_peraturan`, `nama_file`, `_ctimeupload`, `_ctimeupdate`) VALUES
(1, 'statuta nama', 'statuta jenis', 'statuta nama', '2023-10-13', '2023-10-13'),
(2, 'apa nama', 'jenis nama', 'nama file', '2023-10-13', '2023-10-13'),
(3, 'sdsd', 'sdsd', 'sdsd', '2023-10-13', '2023-10-13'),
(4, 'asas', 'asas', 'asas', '2023-10-06', '2023-10-06'),
(5, 'ty', 'ty', 'ty', '2023-10-13', '2023-10-13'),
(6, 'ui', 'ui', 'ui', '2023-10-13', '2023-10-13'),
(7, 'op', 'op', 'op', '2023-10-13', '2023-10-14'),
(8, 'kl', 'kl', 'kl', '2023-10-21', '2023-10-21'),
(9, 'nm', 'nm', 'nm', '2023-10-12', '2023-10-27'),
(10, 'gh', 'gh', 'gh', '2023-10-19', '2023-10-11'),
(11, 'fg', 'fg', 'fg', '2023-10-07', '2023-10-07'),
(12, 'bn', 'bn', 'bn', '2023-10-26', '2023-10-26');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
