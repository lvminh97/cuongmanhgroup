-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2020 at 02:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicom`
--

-- --------------------------------------------------------

--
-- Table structure for table `kinds_company`
--

CREATE TABLE `kinds_company` (
  `id_kinds_company` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  `name_kinds` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kinds_company`
--

INSERT INTO `kinds_company` (`id_kinds_company`, `id_skill`, `name_kinds`) VALUES
(1, 1, 'Hệ thống tự động hóa xét nghiệm'),
(2, 1, 'Máy xét nghiệm sinh hóa'),
(3, 1, 'Máy xét nghiệm miễn dịch tự động'),
(4, 1, 'Máy xét nghiệm huyết học tự động'),
(5, 2, 'Máy sinh hóa'),
(6, 2, 'Máy miễn dịch'),
(7, 2, 'Máy huyết học'),
(8, 2, 'Máy HBA1C'),
(9, 2, 'Máy nước tiểu'),
(10, 2, 'Máy điện giải'),
(11, 2, 'Máy đông máu'),
(12, 2, 'Máy in barcode ống mẫu - I-Pres'),
(13, 2, 'Bàn nghế lấy máu'),
(14, 3, 'Máy HBA1C'),
(15, 3, 'Máy bacode'),
(16, 3, 'Máy miễn dịch Tosoh'),
(17, 4, 'AirFree'),
(18, 4, 'Rocko');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kinds_company`
--
ALTER TABLE `kinds_company`
  ADD PRIMARY KEY (`id_kinds_company`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kinds_company`
--
ALTER TABLE `kinds_company`
  MODIFY `id_kinds_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
