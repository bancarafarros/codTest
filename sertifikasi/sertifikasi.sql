-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 04:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id` int(11) NOT NULL,
  `bil_pertama` int(11) NOT NULL,
  `operator` varchar(11) NOT NULL,
  `bil_kedua` int(11) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perhitungan`
--

INSERT INTO `perhitungan` (`id`, `bil_pertama`, `operator`, `bil_kedua`, `hasil`) VALUES
(1, 2, '*', 3, 6),
(2, 4, '/', 2, 2),
(3, 3, '+', 7, 10),
(4, 9, '-', 3, 6),
(5, 5, '%', 4, 1),
(27, 1, '*', 1, 1),
(28, 10, '*', 2, 20),
(29, 20, '*', 1, 20),
(30, 20, '*', 2, 40),
(31, 40, '*', 1, 40),
(32, 40, '*', 2, 80),
(33, 80, '*', 3, 240),
(34, 240, '/', 20, 12),
(35, 12, '+', 3, 15),
(36, 15, '+', 3, 18),
(37, 18, '-', 10, 8),
(38, 8, '%', 4, 0),
(39, 240, '*', 1, 240),
(40, 240, '*', 5, 1200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
