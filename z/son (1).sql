-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 18, 2022 lúc 11:19 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `son`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gia_sp`
--

CREATE TABLE `gia_sp` (
  `id_don_vi` int(11) NOT NULL,
  `don_vi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gia_sp`
--

INSERT INTO `gia_sp` (`id_don_vi`, `don_vi`) VALUES
(1, 'L'),
(2, 'Kg'),
(4, 'ml'),
(6, 'g');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loai`, `ten_loai`) VALUES
(1, '3'),
(2, 'c2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_sx`
--

CREATE TABLE `nha_sx` (
  `id_nhasx` int(11) NOT NULL,
  `ten_nhasx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_sx`
--

INSERT INTO `nha_sx` (`id_nhasx`, `ten_nhasx`) VALUES
(1, 'c2'),
(2, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` float NOT NULL,
  `created_time` date NOT NULL,
  `last_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `created_time` date NOT NULL,
  `last_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nhasx` int(11) NOT NULL,
  `mo_ta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `so_do_vi` float NOT NULL,
  `id_do_vi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `id_loaisp`, `anh`, `id_nhasx`, `mo_ta`, `gia`, `so_do_vi`, `id_do_vi`) VALUES
(3, 'a', 1, 'https://d1an7elaqzcblb.cloudfront.net/SANTAMARIA-PROD/avndlx/PACKSHOTS/51d65f98810a57e80f93a351a6ad06ce.png', 1, 'adadsa', 1000, 2, 1),
(4, 'a', 1, 'https://d1an7elaqzcblb.cloudfront.net/SANTAMARIA-PROD/avndlx/PACKSHOTS/51d65f98810a57e80f93a351a6ad06ce.png', 1, 'adadsa', 1000, 2, 1),
(5, 'a', 1, 'https://d1an7elaqzcblb.cloudfront.net/SANTAMARIA-PROD/avndlx/PACKSHOTS/51d65f98810a57e80f93a351a6ad06ce.png', 1, 'adadsa', 1000, 2, 1),
(6, 'a', 1, 'https://d1an7elaqzcblb.cloudfront.net/SANTAMARIA-PROD/avndlx/PACKSHOTS/51d65f98810a57e80f93a351a6ad06ce.png', 1, 'adadsa', 1000, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tk`
--

CREATE TABLE `tk` (
  `id` int(11) NOT NULL,
  `tk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tk`
--

INSERT INTO `tk` (`id`, `tk`, `mk`, `email`) VALUES
(1, 'th', 'th1', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `gia_sp`
--
ALTER TABLE `gia_sp`
  ADD PRIMARY KEY (`id_don_vi`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loai`);

--
-- Chỉ mục cho bảng `nha_sx`
--
ALTER TABLE `nha_sx`
  ADD PRIMARY KEY (`id_nhasx`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_loaisp` (`id_loaisp`),
  ADD KEY `id_nhasx` (`id_nhasx`),
  ADD KEY `id_do_vi` (`id_do_vi`);

--
-- Chỉ mục cho bảng `tk`
--
ALTER TABLE `tk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `gia_sp`
--
ALTER TABLE `gia_sp`
  MODIFY `id_don_vi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nha_sx`
--
ALTER TABLE `nha_sx`
  MODIFY `id_nhasx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tk`
--
ALTER TABLE `tk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisp` (`id_loai`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`id_nhasx`) REFERENCES `nha_sx` (`id_nhasx`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`id_do_vi`) REFERENCES `gia_sp` (`id_don_vi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
