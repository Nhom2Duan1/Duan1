-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2022 lúc 04:07 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_nhom2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban_dai`
--

CREATE TABLE `ban_dai` (
  `id_ban_dai` int(100) NOT NULL,
  `ten_ban_dai` varchar(250) NOT NULL,
  `sl_ban_dai` int(100) NOT NULL,
  `id_loai_ban` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban_doi`
--

CREATE TABLE `ban_doi` (
  `id_ban_doi` int(100) NOT NULL,
  `ten_ban_doi` varchar(250) NOT NULL,
  `sl_ban_doi` int(100) NOT NULL,
  `id_loai_ban` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban_don`
--

CREATE TABLE `ban_don` (
  `id_ban_don` int(100) NOT NULL,
  `ten_ban_don` varchar(250) NOT NULL,
  `sl_ban_don` int(100) NOT NULL,
  `id_loai_ban` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban_sau`
--

CREATE TABLE `ban_sau` (
  `id_ban_sau` int(100) NOT NULL,
  `ten_ban_sau` varchar(250) NOT NULL,
  `sl_ban_sau` int(100) NOT NULL,
  `id_loai_ban` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_mon`
--

CREATE TABLE `danh_muc_mon` (
  `id_danh_muc_mon` int(11) NOT NULL,
  `ten_danhmuc_mon` varchar(250) NOT NULL,
  `sl_danhmuc_mon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_ban`
--

CREATE TABLE `dat_ban` (
  `id_dat_ban` int(100) NOT NULL,
  `ten_nguoi_dat` varchar(250) NOT NULL,
  `sdt` varchar(250) NOT NULL,
  `ngay` date NOT NULL,
  `gio` varchar(250) NOT NULL,
  `id_loai_ban` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id_lien_he` int(11) NOT NULL,
  `ten_khach` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sdt` varchar(200) NOT NULL,
  `muc_dich` varchar(250) NOT NULL,
  `noi_dung` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_ban`
--

CREATE TABLE `loai_ban` (
  `id_loai_ban` int(100) NOT NULL,
  `ten_danh_muc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_combo`
--

CREATE TABLE `loai_combo` (
  `id_combo` int(11) NOT NULL,
  `ten_combo` varchar(250) NOT NULL,
  `gia` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_an`
--

CREATE TABLE `mon_an` (
  `id_mon` int(11) NOT NULL,
  `ten_mon` varchar(250) NOT NULL,
  `gia` varchar(250) NOT NULL,
  `id_danh_muc_mon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tai_khoan` int(11) NOT NULL,
  `ten_tk` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `sdt` varchar(250) NOT NULL,
  `vai_tro` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ban_dai`
--
ALTER TABLE `ban_dai`
  ADD PRIMARY KEY (`id_ban_dai`);

--
-- Chỉ mục cho bảng `ban_doi`
--
ALTER TABLE `ban_doi`
  ADD PRIMARY KEY (`id_ban_doi`);

--
-- Chỉ mục cho bảng `ban_don`
--
ALTER TABLE `ban_don`
  ADD PRIMARY KEY (`id_ban_don`);

--
-- Chỉ mục cho bảng `ban_sau`
--
ALTER TABLE `ban_sau`
  ADD PRIMARY KEY (`id_ban_sau`);

--
-- Chỉ mục cho bảng `danh_muc_mon`
--
ALTER TABLE `danh_muc_mon`
  ADD PRIMARY KEY (`id_danh_muc_mon`);

--
-- Chỉ mục cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  ADD PRIMARY KEY (`id_dat_ban`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Chỉ mục cho bảng `loai_ban`
--
ALTER TABLE `loai_ban`
  ADD PRIMARY KEY (`id_loai_ban`);

--
-- Chỉ mục cho bảng `loai_combo`
--
ALTER TABLE `loai_combo`
  ADD PRIMARY KEY (`id_combo`);

--
-- Chỉ mục cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD PRIMARY KEY (`id_mon`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tai_khoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ban_dai`
--
ALTER TABLE `ban_dai`
  MODIFY `id_ban_dai` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ban_doi`
--
ALTER TABLE `ban_doi`
  MODIFY `id_ban_doi` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ban_don`
--
ALTER TABLE `ban_don`
  MODIFY `id_ban_don` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ban_sau`
--
ALTER TABLE `ban_sau`
  MODIFY `id_ban_sau` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danh_muc_mon`
--
ALTER TABLE `danh_muc_mon`
  MODIFY `id_danh_muc_mon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dat_ban`
--
ALTER TABLE `dat_ban`
  MODIFY `id_dat_ban` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id_lien_he` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_ban`
--
ALTER TABLE `loai_ban`
  MODIFY `id_loai_ban` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_combo`
--
ALTER TABLE `loai_combo`
  MODIFY `id_combo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tai_khoan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
