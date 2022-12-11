-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 06:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kostfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `weeklymeal`
--

CREATE TABLE `weeklymeal` (
  `id_user` int(11) NOT NULL,
  `id_meal` int(11) NOT NULL,
  `date` date NOT NULL,
  `waktu_makan` varchar(60) NOT NULL,
  `jenis_makanan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weeklymeal`
--

INSERT INTO `weeklymeal` (`id_user`, `id_meal`, `date`, `waktu_makan`, `jenis_makanan`) VALUES
(0, 8, '2022-12-13', 'Lunch', 'hhuyuy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weeklymeal`
--
ALTER TABLE `weeklymeal`
  ADD PRIMARY KEY (`id_meal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weeklymeal`
--
ALTER TABLE `weeklymeal`
  MODIFY `id_meal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
