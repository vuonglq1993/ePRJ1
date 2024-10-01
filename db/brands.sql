-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 03:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `brand_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_image`) VALUES
(1, 'Cartie', 'https://i.imgur.com/PxW44B6.jpeg'),
(2, 'Christofle', 'https://i.imgur.com/BWEZoAB.jpeg'),
(3, 'Hermes', 'https://i.imgur.com/beibRQg.jpeg'),
(4, 'LEGO', 'https://i.imgur.com/KSJsDFs.jpeg'),
(5, 'LV', 'https://i.imgur.com/m5aKVzQ.jpeg'),
(6, 'The Macallan', 'https://i.imgur.com/H5L5a9d.jpeg'),
(7, 'marklin', 'https://i.imgur.com/g8K9tbr.jpeg'),
(8, 'Nikon', 'https://i.imgur.com/nhnrWTt.jpeg'),
(9, 'OMEGA', 'https://i.imgur.com/Tjl9B3f.jpeg'),
(10, 'pokemon', 'https://i.imgur.com/6S1Vqjm.jpeg'),
(11, 'Porscher', 'https://i.imgur.com/eHlywOD.jpeg'),
(12, 'ROLEX', 'https://i.imgur.com/WU0mJsU.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
