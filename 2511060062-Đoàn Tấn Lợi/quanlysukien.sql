-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 18, 2026 lúc 09:15 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlysukien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisukien`
--

CREATE TABLE `loaisukien` (
  `malsk` int(11) NOT NULL,
  `tenlsk` varchar(100) NOT NULL,
  `mota` varchar(300) DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisukien`
--

INSERT INTO `loaisukien` (`malsk`, `tenlsk`, `mota`, `trangthai`) VALUES
(1, 'Hội thảo', 'Sự kiện học thuật', 1),
(2, 'Triển lãm', 'Trưng bày sản phẩm', 1),
(3, 'Hội nghị', 'Họp doanh nghiệp', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `mask` int(11) NOT NULL,
  `malsk` int(11) DEFAULT NULL,
  `tensk` varchar(200) NOT NULL,
  `mota` varchar(500) DEFAULT NULL,
  `poster` varchar(300) DEFAULT NULL,
  `chiphi` decimal(12,2) DEFAULT NULL CHECK (`chiphi` >= 0),
  `soluong` int(11) DEFAULT NULL CHECK (`soluong` > 0),
  `diadiem` varchar(200) DEFAULT NULL,
  `ngaytochuc` date DEFAULT NULL,
  `trangthai` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`mask`, `malsk`, `tensk`, `mota`, `poster`, `chiphi`, `soluong`, `diadiem`, `ngaytochuc`, `trangthai`) VALUES
(1, 1, 'Hội thảo PHP', 'PHP cơ bản', 'php.jpg', 5000000.00, 100, 'Sài Gòn', '2026-08-10', 1),
(2, 2, 'Triển lãm AI', 'AI hiện đại', 'ai.jpg', 12000000.00, 200, 'HCM', '2026-09-01', 1),
(3, 3, 'Hội nghị CNTT', 'Công nghệ mới', 'cntt.jpg', 10000000.00, 150, 'Hà Nội', '2026-10-20', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaisukien`
--
ALTER TABLE `loaisukien`
  ADD PRIMARY KEY (`malsk`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`mask`),
  ADD KEY `malsk` (`malsk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaisukien`
--
ALTER TABLE `loaisukien`
  MODIFY `malsk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `mask` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`malsk`) REFERENCES `loaisukien` (`malsk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
