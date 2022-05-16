-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2022 lúc 03:30 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ueh_buger`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `url` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`url`, `name`, `image`) VALUES
('Burger', 'Burger', 'http://localhost/UEH_burger/public/img/sanpham/1.jpg'),
('Combo', 'Combo', 'http://localhost/UEH_burger/public/img/sanpham/4.png'),
('Ga-ran', 'Gà rán', 'http://localhost/UEH_burger/public/img/sanpham/7.jpg'),
('Mon-an-kem', 'Món ăn kèm', 'http://localhost/UEH_burger/public/img/sanpham/6.jpeg'),
('Thuc-uong', 'Thức uống', 'http://localhost/UEH_burger/public/img/sanpham/5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_details`
--

CREATE TABLE `category_details` (
  `category_url` varchar(256) NOT NULL,
  `product_url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category_details`
--

INSERT INTO `category_details` (`category_url`, `product_url`) VALUES
('Burger', 'Burger-Bo-Nuong-Pho-Mai'),
('Burger', 'Burger-Bo-Nuong-Whopper');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images_store`
--

CREATE TABLE `images_store` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `images_store`
--

INSERT INTO `images_store` (`id`, `link`, `date_created`) VALUES
(3, 'http://localhost/UEH_burger/public/img/sanpham/1.jpg', '2022-05-16 17:56:51'),
(4, 'http://localhost/UEH_burger/public/img/sanpham/4.png', '2022-05-16 17:57:37'),
(5, 'http://localhost/UEH_burger/public/img/sanpham/5.jpg', '2022-05-16 17:57:57'),
(6, 'http://localhost/UEH_burger/public/img/sanpham/6.jpeg', '2022-05-16 17:58:11'),
(7, 'http://localhost/UEH_burger/public/img/sanpham/7.jpg', '2022-05-16 17:58:23'),
(8, 'http://localhost/UEH_burger/public/img/sanpham/8.jpg', '2022-05-16 18:02:01'),
(9, 'http://localhost/UEH_burger/public/img/sanpham/9.jpg', '2022-05-16 18:02:07'),
(10, 'http://localhost/UEH_burger/public/img/sanpham/10.jpg', '2022-05-16 18:04:15'),
(11, 'http://localhost/UEH_burger/public/img/sanpham/11.jpg', '2022-05-16 18:04:23'),
(12, 'http://localhost/UEH_burger/public/img/sanpham/12.jpg', '2022-05-16 18:06:04'),
(13, 'http://localhost/UEH_burger/public/img/sanpham/13.jpg', '2022-05-16 18:06:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_infor`
--

CREATE TABLE `order_infor` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `order_detail` text DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `url` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` decimal(13,0) DEFAULT NULL,
  `images` text NOT NULL,
  `description` text NOT NULL,
  `tag` text NOT NULL,
  `date_created` date DEFAULT current_timestamp(),
  `view_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`url`, `name`, `price`, `images`, `description`, `tag`, `date_created`, `view_count`) VALUES
('Burger-Bo-Nuong-Pho-Mai', 'Burger Bò Nướng Phô Mai', '50000', 'http://localhost/UEH_burger/public/img/sanpham/10.jpg, http://localhost/UEH_burger/public/img/sanpham/11.jpg', 'mô tả', 'Burger, Bò Nướng Phô Mai, Phô Mai', '2022-05-16', 299),
('Burger-Bo-Nuong-Whopper', 'Burger Bò Nướng Whopper', '40000', 'http://localhost/UEH_burger/public/img/sanpham/8.jpg, http://localhost/UEH_burger/public/img/sanpham/8.jpg', 'mô tả', 'burger, Whopper, Bò Nướng Whopper', '2022-05-16', 300);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thicong_images`
--

CREATE TABLE `thicong_images` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `address`, `phone_number`, `date_created`, `role`) VALUES
('taidao', '123', 'Tài Đào', 'chung cư an bình ', '0836456628', '2022-05-16 19:24:22', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`url`);

--
-- Chỉ mục cho bảng `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`category_url`,`product_url`),
  ADD KEY `product_url` (`product_url`);

--
-- Chỉ mục cho bảng `images_store`
--
ALTER TABLE `images_store`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_infor`
--
ALTER TABLE `order_infor`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`url`);

--
-- Chỉ mục cho bảng `thicong_images`
--
ALTER TABLE `thicong_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `images_store`
--
ALTER TABLE `images_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `order_infor`
--
ALTER TABLE `order_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thicong_images`
--
ALTER TABLE `thicong_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_details`
--
ALTER TABLE `category_details`
  ADD CONSTRAINT `category_details_ibfk_1` FOREIGN KEY (`category_url`) REFERENCES `category` (`url`),
  ADD CONSTRAINT `category_details_ibfk_2` FOREIGN KEY (`product_url`) REFERENCES `product` (`url`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
