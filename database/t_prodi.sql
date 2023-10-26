-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 09:18 AM
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
(16, 'Ilmu Administrasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_prodi`
--
ALTER TABLE `t_prodi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_prodi`
--
ALTER TABLE `t_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
