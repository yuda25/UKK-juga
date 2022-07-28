-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 03:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_perjalanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_perjalanan`
--

CREATE TABLE `tb_perjalanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `suhu` float NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_perjalanan`
--

INSERT INTO `tb_perjalanan` (`id`, `nama`, `nik`, `tanggal`, `waktu`, `suhu`, `tujuan`, `catatan`) VALUES
(1, 'kusuma yuda mubarok', 1234, '2022-03-25', '03:02:00', 36.5, 'mekkah', 'naik CRF'),
(2, 'kym', 1212, '2022-03-25', '00:00:00', 36, 'semarang', 'naik bus kym trans');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_perjalanan`
--
ALTER TABLE `tb_perjalanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_perjalanan`
--
ALTER TABLE `tb_perjalanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
