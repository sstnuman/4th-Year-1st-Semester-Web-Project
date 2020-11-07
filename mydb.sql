-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 08:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookhistory`
--

CREATE TABLE `bookhistory` (
  `id` int(11) NOT NULL,
  `customername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PackageName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookhistory`
--

INSERT INTO `bookhistory` (`id`, `customername`, `email`, `PackageName`) VALUES
(1, 'abcd', 'test', 'Bandarban'),
(2, 'abcd', 'test', 'Bandarban'),
(3, 'abcd', 'test', 'Sylhet'),
(4, 'abcd', 'test', 'CoxsBazar'),
(5, 'abcd', 'iuman2.mahfuz@g', 'Bandarban'),
(6, 'abcd', 'iuman2.mahfuz@g', 'Sylhet'),
(7, 'abcd', 'iuman2.mahfuz@g', 'CoxsBazar'),
(8, 'Success', 'success@yahoo.c', 'CoxsBazar'),
(9, 'Success', 'success@yahoo.c', 'Sylhet'),
(10, 'Abdul', 'abdul@yahoo.com', 'Sylhet'),
(11, 'Abdul', 'abdul@yahoo.com', 'CoxsBazar'),
(12, 'Jolil', 'jolilmia@outloo', 'CoxsBazar'),
(13, 'prothom', 'prothom@gmail.c', 'Sylhet'),
(14, 'rahim', 'rahim@gmail.com', 'Sylhet'),
(15, 'imdadul', 'imdadul@gmail.c', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) DEFAULT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Email`, `to_date`) VALUES
(NULL, 'jkl', '$2y$10$Jn2fi4LWqZE0nNM0mDz20OY', 'web@gmail.com', '2020-11-05 17:11:06.000000'),
(NULL, 'jkl', '$2y$10$XvGQwi.817PYnPJ.PgIFbea', 'iuman.mahfuz@gmail.c', '2020-11-05 17:12:59.000000'),
(NULL, 'user', '$2y$10$7768ldZX.IHWfs.4K4.H/OF', 'web@gmail.com', '2020-11-06 18:39:38.000000'),
(NULL, 'user1', '$2y$10$dgoFWAFSSeCzZeWBKZP7LuW', 'web1@gmail.com', '2020-11-06 18:42:44.000000'),
(NULL, 'user2', '$2y$10$LKaXLe343bP9A37YOnuIxup', 'iuman2.mahfuz@gmail.', '2020-11-06 18:50:48.000000'),
(NULL, 'user2', '$2y$10$tKvJQ0HHidoTAvepi/hIMeI', 'iuman2.mahfuz@gmail.', '2020-11-06 18:52:58.000000'),
(NULL, 'user2', '$2y$10$JdDkuTCou4vTTCU.yz2LlOx', 'iuman2.mahfuz@gmail.', '2020-11-06 18:54:09.000000'),
(NULL, 'user2', '$2y$10$sGq3iYP5NM/1.KLh09ajduk', 'iuman2.mahfuz@gmail.', '2020-11-06 18:54:55.000000'),
(NULL, 'mohon', '$2y$10$BrM62hfveru6FqbfkDedkOW', 'mohon@gmail.com', '2020-11-06 18:55:48.000000'),
(NULL, 'abcd', '123456', 'iuman2.mahfuz@gmail.', '2020-11-06 19:17:34.000000'),
(NULL, 'Success', 'success', 'success@yahoo.com', '2020-11-06 20:36:06.000000'),
(NULL, 'Abdul', '122488', 'abdul@yahoo.com', '2020-11-06 21:45:40.000000'),
(NULL, 'Jolil', 'jolil', 'jolilmia@outlook.com', '2020-11-07 00:57:45.000000'),
(NULL, 'prothom', 'prothom', 'prothom@gmail.com', '2020-11-07 01:19:08.000000'),
(NULL, 'rahim', 'rahim', 'rahim@gmail.com', '2020-11-07 01:31:34.000000'),
(NULL, 'imdadul', 'imdadul', 'imdadul@gmail.com', '2020-11-07 01:40:30.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookhistory`
--
ALTER TABLE `bookhistory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookhistory`
--
ALTER TABLE `bookhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
