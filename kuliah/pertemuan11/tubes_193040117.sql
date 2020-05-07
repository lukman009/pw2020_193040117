-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 11:24 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040117`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `Asal` varchar(30) NOT NULL,
  `harga` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `gambar`, `nama`, `Asal`, `harga`) VALUES
(1, '1.jpg', 'Nasi goreng', 'Indonesia', 'Rp.15.000'),
(2, '2.jpg', 'Telor ceplok', 'Indonesia', 'Rp8.000'),
(3, '3.jpg', 'Sate madura', 'madura', 'Rp12.000'),
(4, '4.jpg', 'Soto betawi', 'Jakarta', 'Rp15000'),
(5, '5.jpg', 'Indomie goreng', 'indonesia', 'Rp5000'),
(6, '6.jpg', 'Sayur sop', 'Indonesia', 'Rp.8000'),
(7, '7.jpg', 'Batagor', 'Bandung', 'Rp10.000'),
(8, '8.jpg', 'Siomay', 'Bandung', 'Rp10.000'),
(9, '9.jpg', 'Gehu', 'Bandung', 'Rp5000'),
(10, '10.jpg', 'Sayur Kacang', 'Indonesia', 'Rp8000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
