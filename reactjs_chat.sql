-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 06:41 AM
-- Server version: 5.7.12
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reactjs_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `nickname`, `message`, `date_create`) VALUES
(1, 'TEST', 'TEST', NULL),
(2, 'TEST', 'HELLO', NULL),
(3, 'TEST', 'HI', NULL),
(4, 'TEST', 'ALO', NULL),
(5, 'TEST', 'KASAMITA', NULL),
(6, 'TEST', 'CHÀO BẠN', NULL),
(7, 'TEST', 'BẠN KHOẺ KO', NULL),
(8, 'TEST', 'KHOẺ VÃI', NULL),
(9, 'TEST', 'ĐƯỢC', NULL),
(10, 'TEST', '10 Đ', NULL),
(11, 'TEST', 'AHIHI', NULL),
(12, 'TEST', 'OK', NULL),
(13, 'TEST', 'FINE', NULL),
(14, 'TEST', 'FINE 1', NULL),
(15, 'TEST', 'FINE 12', NULL),
(16, 'TEST', 'FINE 12', NULL),
(17, 'TEST', 'FINE 12', NULL),
(18, 'TEST', 'FINE 12', NULL),
(19, 'TEST', 'FINE 12', NULL),
(20, 'TEST', 'FINE 12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
