-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bku_burger`
--

-- --------------------------------------------------------

--
-- Table structure for table `cus_contact`
--

CREATE TABLE `cus_contact` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `fullname` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cus_contact`
--

INSERT INTO `cus_contact` (`id`, `title`, `phone`, `email`, `content`, `created_at`, `status`, `fullname`) VALUES
(2, 'Shop', '981643651', 'vanhiepp19988@gmail.com', 'Shop 12 21', '2022-06-02 00:00:00', 0, 'Ngô Văn Hiệp'),
(4, 'Câu hỏi', '090305078', 'luong@gmail.com', 'Thời giàn giao hang trong Quận 12 là bào nhiêu', '2022-06-02 00:00:00', 0, 'Lương'),
(5, 'Câu hỏi', '090305078', 'luong@gmail.com', 'Thời giàn giao hang trong Quận 12 là bào nhiêu', '2022-06-02 00:00:00', 1, 'Lương'),
(6, 'Yêu cầu', '90305078', 'luong@gmail.com', 'Chào shop', '2022-06-02 00:00:00', 1, 'Lương'),
(7, 'Chào shop', '90305078', 'luong@gmail.com', '2', '2022-06-12 00:00:00', 1, 'Lương');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cus_contact`
--
ALTER TABLE `cus_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cus_contact`
--
ALTER TABLE `cus_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
