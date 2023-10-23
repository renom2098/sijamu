-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 09:54 AM
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

--
-- Dumping data for table `data_pengendalian`
--

INSERT INTO `data_pengendalian` (`id`, `nama_bidang_pengaturan_standar`, `tautan_pelaksanaan_rtm`, `tautan_bukti_pelaksanaan_rtm`, `tautan_pelaksanaan_rtl`, `tautan_bukti_pelaksanaan_rtl`, `_ctimeupload`, `_ctimeupdate`) VALUES
(2, 'Standar di bidang SDM', 'https://drive.google.com/file/d/133V2NL8B6FL1nRn09HNDA8yJOQonXxCG/view', 'https://drive.google.com/file/d/133V2NL8B6FL1nRn09HNDA8yJOQonXxCG/view', 'https://drive.google.com/file/d/133V2NL8B6FL1nRn09HNDA8yJOQonXxCG/view', 'https://drive.google.com/file/d/133V2NL8B6FL1nRn09HNDA8yJOQonXxCG/view', '2023-10-05', '2023-10-07'),
(3, 'Standar di aspek pendidikan1', 'coba1', 'coba2', 'coba3', 'coba4', '2023-10-23', '2023-10-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengendalian`
--
ALTER TABLE `data_pengendalian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pengendalian`
--
ALTER TABLE `data_pengendalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
