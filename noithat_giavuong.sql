-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 26, 2022 lúc 06:20 PM
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
-- Cơ sở dữ liệu: `noithat_giavuong`
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
('giuong', 'giường', 'https://i.imgur.com/Yr1MWxC.jpg'),
('tu-bep', 'tủ bếp', 'https://i.imgur.com/GyPc5Br.jpg'),
('tu-cau-thang', 'tủ cầu thang', 'https://i.imgur.com/PcxPMt7.jpg'),
('tu-quan-ao', 'tủ quần áo', 'https://i.imgur.com/1UxhxaM.jpg'),
('tu-ruou', 'tủ rượu', 'https://i.imgur.com/29gauOY.jpg'),
('vach-tv', 'vách tv', 'https://i.imgur.com/Yr1MWxC.jpg');

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
('giuong', 'giuong-go-soi'),
('giuong', 'giuong-pallet'),
('tu-bep', 'tu-bep-go'),
('tu-bep', 'tu-bep-melamine'),
('tu-cau-thang', 'tu-cau-thang-go'),
('tu-cau-thang', 'tu-cau-thang-nhom'),
('tu-quan-ao', 'tu-quan-ao-ba-canh'),
('tu-quan-ao', 'tu-quan-ao-nhua'),
('tu-ruou', 'tu-ruou-go'),
('tu-ruou', 'tu-ruou-nhom'),
('vach-tv', 'vach-tv-go'),
('vach-tv', 'vach-tv-nhua');

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
('giuong-go-soi', 'giường gỗ sồi', '300000', 'https://i.imgur.com/hndkEEX.jpg, https://i.imgur.com/ZwnwiUb.jpg', 'agsdhfgdsahgfdshifs', 'giường, giường gỗ sồi, gỗ, sồi, gỗ sồi', '2022-04-26', 100),
('giuong-pallet', 'giường pallet', '10000', 'https://i.imgur.com/j3b9h8y.jpg, https://i.imgur.com/k3VhXAr.jpg', 'sahdjsahdjhasjdhsajhdjash', 'giường, pallet, giường pallet', '2022-04-26', 0),
('tu-bep-go', 'tủ bếp gỗ', '0', 'https://i.imgur.com/aV6rx6D.jpg, https://i.imgur.com/P8cTJuP.jpg', 'Tủ bếp gỗ sieeu caaps vip pro', 'tủ gỗ, tủ, gỗ', '2022-04-26', 0),
('tu-bep-melamine', 'tủ bếp melamine', '5000000', 'https://i.imgur.com/70K4lfO.jpg, https://i.imgur.com/6mWhNSa.jpg', 'Tủ bếp melamine loại xịn ', 'melamine, tủ bếp, bếp, tủ', '2022-04-26', 0),
('tu-cau-thang-go', 'tủ càu thang gỗ', '0', 'https://i.imgur.com/1kwebb8.jpg, https://i.imgur.com/PiOOTew.jpg', 'sjfdhjdhfdhskfhsd', 'tủ,tủ cầu thang, gỗ, tủ cầu thang gỗ', '2022-04-26', 90),
('tu-cau-thang-nhom', 'tủ cầu thang nhôm', '0', 'https://i.imgur.com/kGrBtB4.jpg, https://i.imgur.com/23qSmwk.jpg', 'hdsjghsdhhfdshgkdh', 'tủ cầu thang, tủ, tủ cầu thang nhôm', '2022-04-26', 70),
('tu-quan-ao-ba-canh', 'tủ quần áo ba cánh', '0', 'https://i.imgur.com/YbRKs3u.jpg, https://i.imgur.com/wvbK4NJ.jpg', 'hádafhsdjhafghdshhfdshaf', 'tủ, quần áo, ba cánh, tủ quần áo ba cánh', '2022-04-26', 0),
('tu-quan-ao-nhua', 'tủ quần áo nhựa', '200000', 'https://i.imgur.com/T9Nst3d.png, https://i.imgur.com/ScmZ8xp.jpg', 'sagfhsdghfgadgfj', 'tủ, tủ quần áo, tủ quần áo nhựa, nhựa', '2022-04-26', 0),
('tu-ruou-go', 'tủ rượu gỗ', '0', 'https://i.imgur.com/JNXCWd5.png, https://i.imgur.com/tKg8YIj.jpg', 'dhsfghsdagfjdsghj', 'tủ rượu, tủ, tủ rượu gỗ', '2022-04-26', 30),
('tu-ruou-nhom', 'tủ rượu nhôm', '0', 'https://i.imgur.com/7nLrQLk.jpg, https://i.imgur.com/hiFbhsx.jpg', 'dhsgjhdsfjhgkdfshkgj', 'tủ rượu, tủ, tủ rượu nhôm', '2022-04-26', 40),
('vach-tv-go', 'vách tv gỗ', '0', 'https://i.imgur.com/ExvXgM9.jpg, https://i.imgur.com/qoGt0wV.jpg', 'ạhdsjkahdjshkfhdashfsd', 'vách tv, vách tv gỗ, gỗ', '2022-04-26', 0),
('vach-tv-nhua', 'vách tv nhựa', '1000000', 'https://i.imgur.com/wAQJTq8.jpg, https://i.imgur.com/tJR6A6y.jpg ', 'aksdjfkldshfajdshkfhds', 'vách tv, vách, vách tv nhựa', '2022-04-26', 0);

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
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`url`);

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
