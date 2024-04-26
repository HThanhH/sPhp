-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2023 lúc 01:54 AM
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
-- Cơ sở dữ liệu: `demo_db`
--

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
(5, ' SÆ¡n Jotun LÃ³t Chá»‘ng Kiá»m '),
(6, ' SÆ¡n Jotun Ná»™i Tháº¥t'),
(7, ' SÆ¡n Jotun Ngoáº¡i Tháº¥t '),
(8, ' SÆ¡n Epoxy Jotun vÃ  sÆ¡n Dáº§u');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `note` text NOT NULL,
  `total` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES
(29, 'Andn', '0654654615', 'Ha Noi', 'Ghi chu', 8290000, 1587872426, 1587872426),
(30, 'SÆ¡n chá»‘ng bÃ¡m', '112', '2rq1', '', 540000, 1672755187, 1672755187),
(31, '12', '1', '1', '', 20000000, 1672848986, 1672848986),
(32, 'da', '0375453875', 'th', '', 62000000, 1673081968, 1673081968),
(33, '1', '1', '1', '', 2000000, 1673111545, 1673111545);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_time`, `last_updated`) VALUES
(19, 29, 2, 1, 540000, 1587872426, 1587872426),
(20, 29, 18, 3, 1450000, 1587872426, 1587872426),
(21, 29, 20, 4, 850000, 1587872426, 1587872426),
(24, 30, 2, 1, 540000, 1672755187, 1672755187),
(25, 31, 29, 1, 20000000, 1672848986, 1672848986),
(26, 32, 30, 3, 20000000, 1673081968, 1673081968),
(27, 32, 33, 1, 2000000, 1673081968, 1673081968),
(28, 33, 33, 1, 2000000, 1673111545, 1673111545);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_loai` int(11) NOT NULL,
  `price` float NOT NULL,
  `content` text NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `L` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `id_loai`, `price`, `content`, `created_time`, `last_updated`, `L`) VALUES
(2, 'SÆ¡n Jotun lÃ³t ná»™i ngoáº¡i tháº¥t cao cáº¥p - Ultra Primer', 'uploads/06-01-2023/product_1603270706.png', 5, 1540000, '<p><span style=\"color:rgb(32, 33, 36); font-family:consolas,lucida console,courier new,monospace; font-size:12px\">SÆ¡n l&oacute;t ná»™i ngoáº¡i tháº¥t cao cáº¥p gá»‘c nÆ°á»›c cao cáº¥p mang láº¡i Ä‘á»™ b&aacute;m d&iacute;nh tuyá»‡t háº£o gi&uacute;p tÄƒng cÆ°á»ng Ä‘á»™ bá»n cá»§a há»‡ thá»‘ng sÆ¡n phá»§ v&agrave; kháº¯c phá»¥c nhá»¯ng khiáº¿m khuyáº¿t hay gáº·p pháº£i cá»§a bá» máº·t tÆ°á»ng nhÆ° phá»“ng giá»™p, bong tr&oacute;c, muá»‘i h&oacute;a hay Ä‘á»‘m m&agrave;u bá»‹ g&acirc;y ra do t&aacute;c Ä‘á»™ng cá»§a kiá»m.</span></p>\r\n\r\n<p><span style=\"color:rgb(32, 33, 36); font-family:consolas,lucida console,courier new,monospace; font-size:12px\">Äá»™ b&aacute;m d&iacute;nh tuyá»‡t háº£o - Mang láº¡i kháº£ nÄƒng b&aacute;m d&iacute;nh tuyá»‡t háº£o giá»¯a bá» máº·t b&ecirc; t&ocirc;ng v&agrave; lá»›p phá»§ ngo&agrave;i, nháº±m báº£o Ä‘áº£m hiá»‡u suáº¥t báº£o vá»‡ d&agrave;i l&acirc;u cá»§a há»‡ thá»‘ng sÆ¡n. Sáº£n pháº©m n&agrave;y c&ograve;n c&oacute; thá»ƒ Ä‘Æ°á»£c sá»­ dá»¥ng Ä‘á»ƒ&nbsp;tr&ecirc;n bá» máº·t b&ecirc; t&ocirc;ng bá»‹ pháº¥n h&oacute;a nháº¹.</span></p>\r\n', 1552615987, 1673015867, 7),
(29, 'SÆ¡n Jotun lÃ³t chá»‘ng kiá»m ná»™i ngoáº¡i tháº¥t - Essence', 'uploads/06-01-2023/product_1472087366.jpg', 5, 2000000, '', 1672845432, 1673019258, 7.5),
(30, 'SÆ¡n Jotun lÃ³t kiá»m cao cáº¥p trong nhÃ  - Majestic Primer', 'uploads/06-01-2023/product_1588130646.png', 5, 20000000, '', 1673019362, 1673019362, 7),
(33, 'SÆ¡n Jotun lÃ³t kiá»m ngoáº¡i tháº¥t cao cáº¥p Jotashield Primer', 'uploads/06-01-2023/product_1574842107(1).png', 5, 2000000, '', 1673019507, 1673019507, 7.5),
(34, 'SÆ¡n lÃ³t kiá»m ngoáº¡i tháº¥t Tough Shield Primer', 'uploads/06-01-2023/product_1650004672.jpg', 5, 1540000, '', 1673019574, 1673019574, 7),
(35, 'Jotun ná»™i tháº¥t cao cáº¥p nháº¥t - Äáº¹p & ChÄƒm SÃ³c HoÃ n Háº£o', 'uploads/06-01-2023/product_1619683747.png', 6, 1540000, '', 1673020403, 1673020403, 7.5),
(36, 'Sáº£n pháº©m má»›i Jotun Majestic Äáº¹p hoÃ n háº£o - bÃ³ng', 'uploads/06-01-2023/product_1573696578.png', 6, 2000000, '', 1673020478, 1673020478, 7),
(38, 'SÆ¡n ná»™i tháº¥t Majestic Äáº¹p hoÃ n háº£o bÃ³ng má» má»›i', 'uploads/06-01-2023/product_1573696883(1).png', 6, 1540000, '', 1673020596, 1673020596, 7.5),
(39, 'SÆ¡n Jotun ná»™i tháº¥t - Essence dá»… lau chÃ¹i', 'uploads/06-01-2023/product_1472086781.jpg', 6, 1540000, '', 1673020709, 1673020709, 7.5),
(40, 'SÆ¡n Jotun Essence che phá»§ tá»‘i Ä‘a bÃ³ng', 'uploads/06-01-2023/product_1624938014.png', 6, 1540000, '', 1673020770, 1673020770, 7),
(41, 'SÆ¡n Jotun Essence che phá»§ tá»‘i Ä‘a má»', 'uploads/06-01-2023/product_1625023292.png', 6, 1540000, '', 1673020838, 1673020838, 0.5),
(42, 'SÆ¡n Jotun ngoáº¡i tháº¥t - che phá»§ váº¿t ná»©t ', 'uploads/06-01-2023/product_1417051481.jpg', 7, 1540000, '', 1673021054, 1673021054, 7),
(43, 'SÆ¡n Jotun Waterguard sÆ¡n chá»‘ng tháº¥m cao cáº¥p', 'uploads/06-01-2023/product_1596779772.png', 7, 1540000, '', 1673021118, 1673021118, 7),
(44, 'SÆ¡n Jotun Jotatough sÆ¡n ngoáº¡i tháº¥t kinh táº¿ ', 'uploads/06-01-2023/product_1411568972.jpg', 7, 1540000, '', 1673021168, 1673021168, 8),
(45, 'SÆ¡n Jotun ngoáº¡i tháº¥t bá»n Ä‘áº¹p - Essence', 'uploads/06-01-2023/product_1472088436.jpg', 7, 2000000, '', 1673021226, 1673021226, 8),
(46, 'SÆ¡n phá»§ Jotun Penguard topcoat (DÃ nh cho kim loáº¡i)', 'uploads/06-01-2023/product_1495081293.jpg', 8, 100000, '', 1673021962, 1673021962, 2.5),
(47, 'SÆ¡n Jotun chá»‘ng rá»‰ Jotun                     (Resist/ Penguard/ Tankguard) ', 'uploads/06-01-2023/product_1413107107.jpg', 8, 1000000, '', 1673022086, 1673022086, 2.5),
(48, 'SÆ¡n dáº§u Jotun Essence siÃªu bÃ³ng', 'uploads/06-01-2023/product_1495092995.jpg', 8, 2000000, '', 1673022138, 1673022138, 7.5),
(49, 'SÆ¡n Jotun phá»§ 1 thÃ nh pháº§n Jotun Pilot II', 'uploads/06-01-2023/product_1495609873.jpg', 8, 5505500, '', 1673022228, 1673022228, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthday` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `password`, `birthday`, `created_time`, `last_updated`) VALUES
(1, 'admin', 'Andn', '1', 123, 123, 1553185530),
(2, 't', 't', 't', 1, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loai`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai` (`id_loai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loaisp` (`id_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
