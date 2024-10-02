-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 05:14 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `loggedIn` tinyint(1) DEFAULT 0,
  `lastLoggedIn` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `phone`, `address`, `created_at`, `loggedIn`, `lastLoggedIn`) VALUES
(1, 'chu111', 'chu@gg.vn', '$2y$10$X1HZ2shr5pNQ7W8oDTOoTOUwZpozIaCrj7eNkf18ibgEiDEkCD/mG', NULL, 'aaaaaaaaaaaa', '2024-10-01 11:25:35', 0, NULL),
(2, 'chu222', 'chu@ePRJ1.vn', '$2y$10$7uZZu/705PheaKquz6yC..Ch6V29ruDyrbe.EVO8APpiSa1ZNkWl.', NULL, 'aaaaaaaaaaaabbbbbbbbbbbb', '2024-10-01 11:30:31', 0, NULL),
(3, 'chu333', 'chu@ePRJ1.vn', '$2y$10$yoEyir5cCWvTe7LJ8yaQc.Y24.nGoPqXftO0WusTQhxa9H51WTpfW', '123123123', 'aaaaaaaaabshdhasbdc', '2024-10-01 11:31:10', 0, NULL),
(4, 'chu123', '123@gg.bb', '$2y$10$1QgkQhyH7zpdVg1On7zvl.1rQ2em.gjUmheE44GhGkbyXLTHphNgm', '9278301233', 'dcwasdvwaff', '2024-10-01 13:53:10', 1, '2024-10-02 03:38:53'),
(5, 'chu444', '1@g.coco', '$2y$10$MgjPRW08YKFWnP67vhfbn.ViVUOtwerdiWCLBm1IVKOeapEKBSx6q', '7238712893', 'b?ksdnajkbdahjsbdj', '2024-10-02 14:59:31', 0, NULL),
(6, 'chu69', '4@g.coco', '$2y$10$F7DyhK2HLz7cmL7GgCaN5Ok/xCC6SCK1IwwUK8ZIz4F7eeGxSA9Pi', '7238712893', 'b?ksdnajkbdahjsbdj', '2024-10-02 15:01:26', 0, NULL),
(7, 'chu695', '49@g.coco', '$2y$10$xHOLQZjj6ZtDk0H/6dy1zO5HFcF31tSL6Gjsz8V9YmYku2naWhXqe', '7238712893', 'b?ksdnajkbdahjsbdj', '2024-10-02 15:03:26', 1, '2024-10-02 15:03:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
