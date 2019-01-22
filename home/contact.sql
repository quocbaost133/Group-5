-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 22, 2019 lúc 03:58 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `contact`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `ContactId` int(11) NOT NULL,
  `Names` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `Information` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(145) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`ContactId`, `Names`, `Information`, `Email`) VALUES
(2, 'Nguyễn Thị Cẩm Tuyên', 'Muốn được mua nhiều rượu nho hơn', 'ntctuyen@ctu.edu.vn'),
(4, 'nscascin', 'Ã¡', 'dvzuu2@gmail.com'),
(5, 'nscascin', 'Ã¡', 'dvzuu2@gmail.com'),
(6, 'nscascin', 'Ã¡', 'dvzuu2@gmail.com'),
(7, 'nscascin', 'Ã¡', 'dvzuu2@gmail.com'),
(8, 'jbdvvdsjkb', 'ksdnl', 'jvsdjkb@gmail.com'),
(9, 'jbdvvdsjkb', 'ksdnl', 'jvsdjkb@gmail.com'),
(10, 'jbdvvdsjkb', 'ksdnl', 'jvsdjkb@gmail.com'),
(11, 'jbdvvdsjkb', 'ksdnl', 'jvsdjkb@gmail.com'),
(12, 'jbdvvdsjkb', 'ksdnl', 'jvsdjkb@gmail.com'),
(13, 'nkdsm,', 'nkdfnklfd', 'sdvjdvjs@gmail.com'),
(14, 'rewdjdsjb', 'nkcdnkld', 'fjÄ‘Ä‘jbkb@gmail.com'),
(15, 'bkfsebkusd', 'jkdsvbvksb', 'ud@gmail.com'),
(16, 'bkfsebkusd', 'jkdsvbvksb', 'ud@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
