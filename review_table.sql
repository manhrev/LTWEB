-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 12:10 PM
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
-- Database: `ueh_burger`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `url` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `rate` tinyint(4) NOT NULL,
  `comment` varchar(2000) DEFAULT NULL,
  `create_day` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

-- INSERT INTO `reviews` (`url`, `username`, `rate`, `comment`, `create_day`) VALUES
-- ('Burger-2-mieng-bo-pho-mai-thit-xong-khoi', 'dongvi', 5, 'Rất ngon, phomai rất béo!', '2022-06-06'),
-- ('Combo-Bo-tam-pho-mai--banh-lon-', 'abcd1234', 5, 'Bánh rất ngon, ship nhanh, giá cả phải chăng. 10đ :v', '2022-06-06'),
-- ('Combo-Bo-tam-pho-mai--banh-lon-', 'tuan', 4, 'Test reviews', '2022-06-06'),
-- ('Combo-burger-2-mieng-bo-nuong-whopper-jr', 'dongvi', 5, 'xcvbn', '2022-06-07'),
-- ('Combo-couple', 'dongvi', 5, 'Test review', '2022-06-07'),
-- ('Mix-wing', 'dongvi', 2, 'test revirwwwwwwwwwwwwwww', '2022-06-07'),
-- ('TRA-CHANH', 'dongvi', 4, 'Dongvi đã review Trà chanh', '2022-06-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`url`,`username`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `forekey_to_product` FOREIGN KEY (`url`) REFERENCES `product` (`url`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forekey_to_user` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
