-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 06:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(112, 'sprite', 10000, '/pemweb/image/1700326262-c93c3adb55e80478b7927bb90f0ded33-download.jpeg', '2023-11-18 16:51:02', NULL),
(113, 'fanta', 10000, '/pemweb/image/1700326279-d851d073e88485ab3926ff3bba8a8b60-download (1).jpeg', '2023-11-18 16:51:19', NULL),
(114, 'mizone', 6000, '/pemweb/image/1700326306-c5cceced187f4fd1714893e4c4df4dc6-images (1).jpeg', '2023-11-18 16:51:46', NULL),
(115, 'Nu Green tea', 7000, '/pemweb/image/1700326339-d14787fe556d051b6eab8cb8510aa62f-nu grinti.jpeg', '2023-11-18 16:52:19', NULL),
(116, 'bear brand', 12000, '/pemweb/image/1700326354-6d01e7b95f11993b162c99096e661a8a-images.jpeg', '2023-11-18 16:52:34', NULL),
(117, 'Rinso', 12000, '/pemweb/image/1700326394-3664ed37084c24906dc15f5df4c5c5fe-download (3).jpeg', '2023-11-18 16:53:14', NULL),
(118, 'Jaz 1', 15000, '/pemweb/image/1700326420-45b2a64712301746447e0e070a5c06c7-images (2).jpeg', '2023-11-18 16:53:40', NULL),
(119, 'Green wash', 12000, '/pemweb/image/1700326477-cb75a11a822bf5007d7751486d2bfeb0-download (2).jpeg', '2023-11-18 16:54:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(29, 'Yusuf Eka Wicaksana', 'ekayusuf.wicaksana@gmail.com', 'admin', '$2y$10$tJNVyF3bEh1wdEjdAQPtY.5rMr4hP4uPYOsGtK2t/hEErbMhnkZK.', NULL, '2023-11-16 01:46:23', NULL),
(35, 'Rosihin', 'rosihin24@gmail.com', 'user', '$2y$10$IE.ekmbox2VRSaXWn8Qt8Oh/Tj.KMvr1Pis1bOP5e3.9iAexEbkCe', NULL, '2023-11-18 11:07:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
