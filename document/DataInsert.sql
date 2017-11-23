-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2017 lúc 01:45 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `managementscore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `academy`
--

CREATE TABLE `academy` (
  `idAcademy` varchar(10) NOT NULL,
  `academyName` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `academy`
--

INSERT INTO `academy` (`idAcademy`, `academyName`) VALUES
('CN', 'Khoa Công nghệ'),
('DBDT', 'Khoa Dự bị Dân tộc'),
('DI', 'Khoa Công nghệ Thông tin và Truyền thông'),
('GDTC', 'Bộ môn Giáo dục Thể Chất'),
('KHCT', 'Khoa Khoa học Chính trị'),
('KHTN', 'Khoa Khoa học Tự nhiên'),
('KHXH', 'Khoa Khoa học Xã hội và Nhân văn'),
('KT', 'Khoa Kinh Tế'),
('L', 'Khoa Luật'),
('MT', 'Khoa Trường và Tài nguyên Thiên nhiên'),
('NN', 'Khoa Ngoại ngữ'),
('NNSH', 'Khoa Nông nghiệp và Sinh học Ứng dụng'),
('PTNT', 'Khoa Phát triển Nông thôn'),
('SDH', 'Khoa Sau đại học'),
('SP', 'Khoa Sư phạm'),
('THSP', 'Trường THPT Thực hành Sư phạm'),
('TS', 'Khoa Thủy sản'),
('VNCBDKH', 'Viện Nghiên cứu Biến đổi Khí hậu'),
('VNCPT', 'Viện Nghiên cứu Phát triển ĐBSCL'),
('VNCPTCNSH', 'Viện Nghiên cứu và phát triển công nghệ sinh học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `idAccount` varchar(10) NOT NULL,
  `accountName` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `sex` varchar(4) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `Permission_position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`) VALUES
('AAAA', 'Nguyễn Văn A', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('Admin01', 'Lê Minh Luân', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin'),
('Admin02', 'Đoàn Minh Nhựt', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin'),
('Admin03', 'Nguyễn Tấn Phát', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin'),
('Admin04', 'Pham Hoài An', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin'),
('Admin05', 'Huỳnh Hoàng Thơ', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin'),
('BBBB', 'Nguyễn Văn B', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 2147483647, 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('CB101', 'Phan Phương Lan', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB102', 'Nguyễn Thái Nghe', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB103', 'Huỳnh Quang Nghi', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB104', 'Trương Minh Thái', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB105', 'Hồ Quang Thái', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB106', 'Nguyễn Thúy An', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB107', 'Trần Cao Đệ', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB108', 'Trần Công Án', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB109', 'Trương Thị Thanh Tuyền', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB110', 'Trần Minh Tân', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB111', 'Nguyễn Hoàng Long', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'nhlong@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB112', 'Nguyễn Văn Hòa', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'nvhoa@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB113', 'Trần Văn Hiếu', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'nvhieu@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB114', 'Bùi Thị Bửu Huê', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB115', 'Nguyễn Văn', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB116', 'Bùi Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB117', 'Lâm Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB118', 'Huỳnh Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB119', 'Phan Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB120', 'Dương Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB121', 'Nguyễn Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB122', 'Lâm Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB123', 'Ngọc Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB124', 'Ái Thị', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB125', 'Nguyễn Thu', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB126', 'Trương Huỳnh Anh', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB127', 'Nguyễn Thị Ngọc Yến', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CB128', 'Võ Huỳnh Diễm', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'btbhue@ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Cố vấn học tập'),
('CCCC', 'Nguyễn Văn C', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('DDDD', 'Nguyễn Văn D', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('EEEE', 'Nguyễn Văn E', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('FFFF', 'Nguyễn Văn F', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('GGGG', 'Nguyễn Văn G', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 2147483647, 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('HHHH', 'Nguyễn Văn H', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('IIII', 'Nguyễn Văn I', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('KKKK', 'Nguyễn Văn K', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('LLLL', 'Nguyễn Văn L', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('MMMM', 'Nguyễn Văn M', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 2147483647, 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('NNNN', 'Nguyễn Văn N', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội'),
('OOOO', 'Nguyễn Văn O', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('PPPP', 'Nguyễn Văn P', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('QL101', 'Dương Văn Lăng', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QL102', 'Nguyễn Đại Lợi', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QL103', 'Lê Nguyên Thức', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QL104', 'Trương Công Hiển', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QL105', 'Trần Văn Linh', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QL106', 'Nguyễn Văn Tài', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QL107', 'Trần Quốc Khánh', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QL108', 'Nguyễn Tấn Phát', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QL109', 'Phạm Hoài An', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QL110', 'Huỳnh Hoàng Thơ', '1980-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 964054244, 'pplan@cit.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý khoa'),
('QQQQ', 'Nguyễn Văn Q', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Sinh viên'),
('RRRR', 'Nguyễn Văn R', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 2147483647, 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội'),
('SSSS', 'Nguyễn Văn S', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội'),
('TTTT', 'Nguyễn Văn T', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội'),
('UUUU', 'Nguyễn Văn U', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội'),
('VVVV', 'Nguyễn Văn V', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'ab1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội'),
('WWWW', 'Nguyễn Văn W', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nữ', 2147483647, 'bb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội'),
('XXXX', 'Nguyễn Văn X', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'cb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội'),
('YYYY', 'Nguyễn Văn Y', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'db1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội'),
('ZZZZ', 'Nguyễn Văn Z', '1996-01-16', 'An Khánh - Ninh Kiều Cần Thơ', 'Nam', 964054244, 'eb1400701@student.ctu.edu.vn', '81dc9bdb52d04dc20036dbd8313ed055', 'Quản lý chi hội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_has_academy`
--

CREATE TABLE `account_has_academy` (
  `Account_idAccount` varchar(10) NOT NULL,
  `Academy_idAcademy` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account_has_academy`
--

INSERT INTO `account_has_academy` (`Account_idAccount`, `Academy_idAcademy`) VALUES
('AAAA', 'DI'),
('BBBB', 'DI'),
('CB101', 'DI'),
('CB102', 'DI'),
('CB103', 'DI'),
('CB104', 'DI'),
('CB105', 'DI'),
('CB106', 'CN'),
('CB107', 'CN'),
('CB108', 'CN'),
('CB109', 'CN'),
('CB110', 'CN'),
('CB111', 'DBDT'),
('CB112', 'GDTC'),
('CB113', 'KHCT'),
('CB114', 'KHTN'),
('CB115', 'KHXH'),
('CB116', 'KT'),
('CB117', 'L'),
('CB118', 'MT'),
('CB119', 'NN'),
('CB120', 'NNSH'),
('CB121', 'PTNT'),
('CB122', 'SDH'),
('CB123', 'SP'),
('CB124', 'TS'),
('CB125', 'VNCBDKH'),
('CB126', 'VNCPT'),
('CB127', 'VNCPTCNSH'),
('CB128', 'THSP'),
('CCCC', 'DI'),
('DDDD', 'DI'),
('EEEE', 'DI'),
('FFFF', 'DI'),
('GGGG', 'DI'),
('HHHH', 'DI'),
('KKKK', 'CN'),
('LLLL', 'CN'),
('MMMM', 'CN'),
('OOOO', 'CN'),
('PPPP', 'CN'),
('QL101', 'DI'),
('QL102', 'DI'),
('QL103', 'DI'),
('QL104', 'DI'),
('QL105', 'DI'),
('QL106', 'CN'),
('QL107', 'CN'),
('QL108', 'CN'),
('QL109', 'CN'),
('QL110', 'CN'),
('QQQQ', 'CN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_has_branch`
--

CREATE TABLE `account_has_branch` (
  `Account_idAccount` varchar(10) NOT NULL,
  `Branch_idBranch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account_has_branch`
--

INSERT INTO `account_has_branch` (`Account_idAccount`, `Branch_idBranch`) VALUES
('AAAA', 'CT01'),
('BBBB', 'CT01'),
('CCCC', 'CT01'),
('DDDD', 'HG01'),
('EEEE', 'CT03'),
('FFFF', 'ĐT01'),
('GGGG', 'CT01'),
('GGGG', 'ST01'),
('HHHH', 'CT01'),
('KKKK', 'HG01'),
('LLLL', 'CT03'),
('MMMM', 'ĐT01'),
('NNNN', 'CT01'),
('OOOO', 'CT01'),
('PPPP', 'HG01'),
('QQQQ', 'CT03'),
('RRRR', 'ST02'),
('SSSS', 'CT02'),
('TTTT', 'HG01'),
('UUUU', 'CT03'),
('VVVV', 'ĐT01'),
('WWWW', 'ST01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_has_class`
--

CREATE TABLE `account_has_class` (
  `Account_idAccount` varchar(10) NOT NULL,
  `Class_idClass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account_has_class`
--

INSERT INTO `account_has_class` (`Account_idAccount`, `Class_idClass`) VALUES
('AAAA', 'DI1496A1'),
('BBBB', 'DI1496A1'),
('CB101', 'DI1496A1'),
('CB102', 'DI1496A2'),
('CB106', 'DI1496A1'),
('CB107', 'DI1496A2'),
('CCCC', 'DI1496A1'),
('DDDD', 'DI1496A1'),
('EEEE', 'DI1496A2'),
('FFFF', 'DI1496A2'),
('GGGG', 'DI1496A2'),
('HHHH', 'DI1496A2'),
('KKKK', 'CN15YTA1'),
('LLLL', 'CN15YTA1'),
('MMMM', 'CN15YTA1'),
('OOOO', 'CN15YTA2'),
('PPPP', 'CN15YTA2'),
('QQQQ', 'CN15YTA2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `branch`
--

CREATE TABLE `branch` (
  `idBranch` varchar(10) NOT NULL,
  `branchName` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `branch`
--

INSERT INTO `branch` (`idBranch`, `branchName`, `city`) VALUES
('CT01', 'Ninh Kiều', 'Cần Thơ'),
('CT02', 'Bình Thủy', 'Cần Thơ'),
('CT03', 'Cái Răng', 'Cần Thơ'),
('CT04', 'Cờ Đở', 'Cần Thơ'),
('CT05', 'Thốt Nốt', 'Cần Thơ'),
('CT06', 'Ô Môn', 'Cần Thơ'),
('CT07', 'Phong Điền', 'Cần Thơ'),
('CT08', 'Vĩnh Thạnh', 'Cần Thơ'),
('HG01', 'Châu Thành', 'Hậu Giang'),
('HG02', 'Ngã Bảy', 'Hậu Giang'),
('HG03', 'Phụng Hiệp', 'Hậu Giang'),
('HG04', 'Châu Thành A', 'Hậu Giang'),
('HG05', 'Vị Thủy', 'Hậu Giang'),
('HG06', 'Vị Thanh', 'Hậu Giang'),
('HG07', 'Long Mỹ', 'Hậu Giang'),
('ST01', 'Mỹ Tú', 'Sóc Trăng'),
('ST02', 'TP. Sóc Trăng', 'Sóc Trăng'),
('ST03', 'Kế Sách', 'Sóc Trăng'),
('ST04', 'Châu Thành', 'Sóc Trăng'),
('ST05', 'Cù Lao Dung', 'Sóc Trăng'),
('ST06', 'Mỹ Xuyên', 'Sóc Trăng'),
('ST07', 'Long Phú', 'Sóc Trăng'),
('ST08', 'Vĩnh Châu', 'Sóc Trăng'),
('ST09', 'Thạnh Trị', 'Sóc Trăng'),
('ST10', 'Ngã Năm', 'Sóc Trăng'),
('ĐT01', 'TP. Sa Đéc', 'Đồng Tháp'),
('ĐT02', 'TP. Cao Lãnh', 'Đồng Tháp'),
('ĐT03', 'Tháp Mười', 'Đồng Tháp'),
('ĐT04', 'Cao Lãnh', 'Đồng Tháp'),
('ĐT05', 'Lấp Vò', 'Đồng Tháp'),
('ĐT06', 'Lai Dung', 'Đồng Tháp'),
('ĐT07', 'Châu Thành', 'Đồng Tháp'),
('ĐT08', 'Thanh Bình', 'Đồng Tháp'),
('ĐT09', 'Tam Nông', 'Đồng Tháp'),
('ĐT10', 'Tân Hồng', 'Đồng Tháp'),
('ĐT11', 'Hồng Ngự', 'Đồng Tháp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calendarscoring`
--

CREATE TABLE `calendarscoring` (
  `openDate` date NOT NULL,
  `closeDate` date NOT NULL,
  `Permission_position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `calendarscoring`
--

INSERT INTO `calendarscoring` (`openDate`, `closeDate`, `Permission_position`) VALUES
('2017-10-04', '2017-12-30', 'Cố vấn học tập'),
('2017-10-04', '2017-12-26', 'Quản lý chi hội'),
('2017-10-02', '2017-12-25', 'Quản lý khoa'),
('2017-10-04', '2017-12-25', 'Sinh viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `idClass` varchar(10) NOT NULL,
  `className` varchar(70) DEFAULT NULL,
  `schoolYear` varchar(2) DEFAULT NULL,
  `Academy_idAcademy` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`idClass`, `className`, `schoolYear`, `Academy_idAcademy`) VALUES
('CN15YTA1', 'Cơ khí giao thông 1', '41', 'CN'),
('CN15YTA2', 'Cơ khí giao thông 2', '41', 'CN'),
('DI1496A1', 'Kỹ thuật phần mềm 1', '40', 'DI'),
('DI1496A2', 'Kỹ thuật phần mềm 2', '40', 'DI'),
('KT16ABA1', 'Kinh tế tài nguyên 1', '42', 'KT'),
('KT16ABA2', 'Kinh tế tài nguyên 2', '42', 'KT'),
('L1496A1', 'Luật Kinh Tế 1', '40', 'L'),
('L1496A2', 'Luật Kinh Tế 2', '40', 'L'),
('MT13ABA1', 'Tài nguyên môi trường 1', '39', 'MT'),
('MT13ABA2', 'Tài nguyên môi trường 2', '39', 'MT'),
('NN15YTA1', 'Khoa Học Cây Trồng 1', '41', 'NNSH'),
('NN15YTA2', 'Khoa Học Cây Trồng 2', '41', 'NNSH'),
('SP15ABA1', 'Sư phạm toán 1', '41', 'SP'),
('SP15ABA2', 'Sư phạm toán 2', '41', 'SP'),
('TS13ABA1', 'Chăn nuôi thủy sản 1', '39', 'TS'),
('TS13ABA2', 'Chăn nuôi thủy sản 2', '39', 'TS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `Image` varchar(200) NOT NULL,
  `Account_idAccount` varchar(10) NOT NULL,
  `Transcript_idItem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

CREATE TABLE `permission` (
  `position` varchar(200) NOT NULL,
  `power` varchar(200) NOT NULL,
  `selected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `permission`
--

INSERT INTO `permission` (`position`, `power`, `selected`) VALUES
('Admin', 'Full ', 1),
('Cố vấn học tập', 'Chấm điểm cho một lớp', 1),
('Cố vấn học tập', 'Chấm điểm rèn luyện cá nhân sinh viên', 1),
('Cố vấn học tập', 'Thêm bảng điểm cộng trừ cho lớp', 1),
('Default', 'Not ', 1),
('Quản lý chi hội', 'Chấm điểm rèn luyện cá nhân sinh viên', 1),
('Quản lý chi hội', 'Quản lý thành viên chi hội', 1),
('Quản lý chi hội', 'Thêm bảng điểm cộng trừ cho sinh viên theo chi hội', 1),
('Quản lý khoa', 'Chấm điểm rèn luyện cho cả khoa - viện', 1),
('Quản lý khoa', 'Thêm bảng điểm cộng trừ cho khoa - viện', 1),
('Sinh viên', 'Chấm điểm rèn luyện cá nhân sinh viên', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `practisescores`
--

CREATE TABLE `practisescores` (
  `scores` int(11) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `years` varchar(11) NOT NULL,
  `Account_idAccount` varchar(10) NOT NULL,
  `beginDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scoresadd`
--

CREATE TABLE `scoresadd` (
  `idScore` varchar(10) NOT NULL,
  `scoreName` varchar(255) DEFAULT NULL,
  `scores` int(11) DEFAULT NULL,
  `describe` varchar(512) DEFAULT NULL,
  `Transcript_idItem` varchar(10) NOT NULL,
  `idAccountManage` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `scoresadd`
--

INSERT INTO `scoresadd` (`idScore`, `scoreName`, `scores`, `describe`, `Transcript_idItem`, `idAccountManage`) VALUES
('220789NNNN', 'Cộng điểm lao động', 1, 'Lao động khao định kỳ', 'I.d.1', 'NNNN'),
('3243241234', 'Cộng điểm học tập', 1, 'Đi học đầy đủ', 'I.b.1.1', 'NNNN'),
('adsbfasdfa', 'fasdfasdf', 20, 'fasdfasdfasdf', 'I.e.1.2', 'NNNN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scoresadd_has_account`
--

CREATE TABLE `scoresadd_has_account` (
  `ScoresAdd_idScore` varchar(10) NOT NULL,
  `Account_idAccount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `scoresadd_has_account`
--

INSERT INTO `scoresadd_has_account` (`ScoresAdd_idScore`, `Account_idAccount`) VALUES
('adsbfasdfa', 'AAAA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `structure`
--

CREATE TABLE `structure` (
  `idItem` varchar(10) NOT NULL,
  `itemName` varchar(512) DEFAULT NULL,
  `scores` int(11) DEFAULT NULL,
  `describe` varchar(512) DEFAULT NULL,
  `IDParent` varchar(10) DEFAULT NULL,
  `scoresDefault` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `structure`
--

INSERT INTO `structure` (`idItem`, `itemName`, `scores`, `describe`, `IDParent`, `scoresDefault`) VALUES
('I', 'Điều 4. Đánh giá về ý thức tham gia học tập', 20, '', '0', 0),
('I.a', 'a. Ý thức và thái độ trong học tập.', 0, '', 'I', 0),
('I.a.1', '- Đi học đầy đủ, đúng giờ, nghiêm túc trong giờ học (Mỗi môn bị cấm thi trừ 03 điểm)', 6, '', 'I.a', 6),
('I.b', 'b. Ý thức và thái độ tham gia các câu lạc bộ học thuật, các hoạt động học thuật, hoạt động ngoại khóa, hoạt động nghiên cứu khoa học.', 0, '', 'I', NULL),
('I.b.1', 'Nghiên cứu khoa học (NCKH)', 0, '', 'I.b', NULL),
('I.b.1.1', '- Có tham gia đề tài NCKH của sinh viên hoặc của Khoa và cấp tương đương, có xác nhận của Chủ nhiệm đề tài (Không tính bài tập, tiểu luận, đồ án môn học, luận văn...)', 5, '', 'I.b.1', 5),
('I.b.1.2', '- Có giấy khen về NCKH', 8, '', 'I.b.1', NULL),
('I.b.1.3', '- Có bài báo trong và ngoài nước trong hoạt động NCKH.', 8, '', 'I.b.1', NULL),
('I.b.2', 'Hoàn thành chứng chỉ ngoại ngữ, tin học.', 0, '', 'I.b', NULL),
('I.b.2.1', '- Ngoại ngữ không chuyên/chứng chỉ A/chuẩn khung Châu Âu.', 3, '', 'I.b.2', 0),
('I.b.2.2', '- Chứng chỉ B/chuẩn khung Châu Âu.', 5, '', 'I.b.2', 0),
('I.b.2.3', '- Chứng chỉ C/chuẩn khung Châu Âu', 7, '', 'I.b.2', 0),
('I.b.2.4', '- Riếng chứng chỉ ngoại ngữ, Chứng nhận Toefl >= 500 điểm; IELTS >= 5.0', 10, '', 'I.b.2', 0),
('I.b.3', 'Tham gia các kỳ thi chuyên ngành, thi Olympic...', 0, '', 'I.b', NULL),
('I.b.3.1', '- Có tham gia kỳ thi', 2, '', 'I.b.3', 0),
('I.b.3.2', '- Đạt giải cấp Trường', 4, '', 'I.b.3', 0),
('I.b.3.3', '- Đạt giải cấp cao hơn.', 7, '', 'I.b.3', 0),
('I.c', 'c. Ý thức và thái độ tham gia các kỳ thi, cuộc thi.', 0, '', 'I', NULL),
('I.c.1', '- Không vi phạm quy chế về thi, kiểm tra (Mỗi lần vi phạm trừ 03 điểm)', 6, '', 'I.c', 6),
('I.d', 'd. Tinh thần vượt khó, phấn đấu vươn lên trong học tập.', 0, '', 'I', NULL),
('I.d.1', '- Có cố gắng, vượt khó trong học tập (có ĐTB học kỳ sau lớn hơn học kỳ trước đó; đối với SV năm thứ nhất, học kỳ I không có điểm dưới 4)', 2, '', 'I.d', 2),
('I.e', 'e. Kết quả học tập', 0, '', 'I', NULL),
('I.e.1', 'Kết quả học tập trong học kỳ:', 0, '', 'I.e', NULL),
('I.e.1.1', '- Điểm trung bình chung học kỳ (ĐTBCHK) đạt >= 3,60', 8, '', 'I.e.1', 0),
('I.e.1.2', '- ĐTBCHK đạt từ 3,20 đến 3,59', 6, '', 'I.e.1', 6),
('I.e.1.3', '- ĐTBCHK đạt từ 2,50 đến 3,19', 4, '', 'I.e.1', 0),
('I.e.1.4', '- ĐTBCHK đạt từ 2,00 đến 2,49', 2, '', 'I.e.1', 0),
('II', 'Điều 5. Đánh giá về ý thức và kết quả chấp hành nội quy, quy chế, quy định trong nhà trường', 25, '', '0', 0),
('II.a', 'a. Ý thức chấp hành các văn bản chỉ đạo của ngành, của cơ quan chỉ đạo cấp trên được thực hiện trong nhà trường.', 0, '', 'II', NULL),
('II.a.1', '- Không vi phạm và có ý thức tham gia thực hiện nghiêm túc các quy định của Lớp, nội quy, quy chế của trường, Khoa và các tổ chức trong nhà trường (Mỗi lần vắng trừ 03 điểm)', 15, '', 'II.a', 15),
('II.b', 'b. Ý thức chấp hành các nội quy, quy chế và các quy định khác được áp dụng trong nhà trường.', 0, '', 'II', NULL),
('II.b.1', 'Sinh viên có tích cực tham gia các hoạt động tuyên truyền, vận động mọi người xung quanh thực hiện nghiêm túc nội quy, quy chế, các quy định của nhà trường về:', 0, '', 'II.b', NULL),
('II.b.1.1', '- Giữ gìn an ninh, trật tự nơi công cộng có xác nhận của Đoàn khoa.', 10, '', 'II.b.1', 0),
('II.b.1.2', '- Giữ gìn vệ sinh, bảo vệ cảnh quan môi trường, nếp sống văn minh (có xác nhận của đoàn thể, Khoa, trường ...)', 10, '', 'II.b.1', 0),
('III', 'Điều 6. Đánh giá về ý thức tham gia các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao, phòng chống tội phạm và các tệ nạn xã hội', 20, '', '0', NULL),
('III.a', 'a. Ý thức và hiệu quả tham gia các hoạt động rèn luyện về chính trị, xã hội, văn hóa, văn nghệ, thể thao.', 0, '', 'III', NULL),
('III.a.1', ' - Tham gia đầy đủ các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao các cấp từ Lớp, Chi hội, Chi đoàn trở lên tổ chức (Mỗi lần vắng trừ 02 điểm từ cấp đơn vị lớp trở lên).', 12, '', 'III.a', 12),
('III.a.2', ' - Lực lượng nồng cốt của phong trào', 5, '', 'III.a', 0),
('III.b', 'b. Ý thức tham gia các hoạt động công ích tình nguyện, công tác xã hội.', 0, '', 'III', NULL),
('III.b.1', 'Là lực lượng nồng cốt trong các phong trào văn hóa, văn nghệ, thể thao:', 0, '', 'III.b', NULL),
('III.b.1.1', '- Cấp Bộ môn, Chi đoàn, Chi hội, Đội, Nhóm', 3, '', 'III.b.1', 0),
('III.b.1.2', '- Cấp Khoa (và tương đương), trường.', 5, '', 'III.b.1', 0),
('III.c', 'c. Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội.', 0, '', 'III', 0),
('III.c.1', 'Được khen thưởng trong các hoạt động phong trào.', 0, '', 'III', NULL),
('III.c.1.1', '- Quyết định khen thưởng của Đoàn Khoa (và tương đương)', 6, '', 'III.c.1', 0),
('III.c.1.2', '- Giấy khen cấp Trường.', 8, '', 'III.c.1', 0),
('III.c.1.3', '- Giấy khen cấp cao hơn.', 10, '', 'III.c.1', 0),
('IV', 'Điều 7. Đánh giá về ý thức công dân trong quan hệ cộng đồng', 25, '', '0', 0),
('IV.a', 'a. Ý thức chấp hành và tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV', NULL),
('IV.a.1', '- Không vi phạm pháp luật của Nhà nước (Nếu vi phạm pháp luật sẽ bị điểm 00 (điểm không)).', 10, '', 'IV.a', 10),
('IV.a.2', '- Tích cực tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 5, '', 'IV.a', 5),
('IV.b', 'b. Ý thức tham gia các hoạt động xã hội có thành tích được ghi nhận, biểu dương, khen thưởng.', 0, '', 'IV', NULL),
('IV.b.1', '  - Tham gia đội nhóm sinh hoạt hướng đên lợi ích cộng đồng (tham gia công tác xã hội ở trường, nơi cư trú, địa phương). (Mỗi đợt tham gia được cộng 02 điểm).', 10, '', 'IV.b', 2),
('IV.c', 'c. Có tinh thần chia sẽ, giúp đỡ người thân, người có khó khăn, hoạn nạn.', 0, '', 'IV', NULL),
('IV.c.1', '- Có tinh thần giúp đỡ bạn bè trong học tập, trong cuộc sống.', 5, '', 'IV.c', 5),
('V', 'Điều 8. Đánh giá về ý thức và kết quả khi tham gia công tác cán bộ lớp, các đoàn thể, tổ chức trong nhà trường hoặc người học đạt được thành tích đặc biệt trong học tập, rèn luyện.', 10, '', '0', NULL),
('V.a', 'a. Ý thức, tinh thần thái độ, uy tín và hiệu quả công việc của người học được phân công nhiệm vụ quản lý lớp, các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V', NULL),
('V.a.1', '- Lớp trưởng, Bí thư Chi đoàn, Ủy viên BCH đoàn thể cấp cao hơn Chi đoàn, BCH Hội sinh viên Trường, Liên Chi hội trưởng, Chi hội trưởng, Đội trưởng các Đội, Nhóm, Câu lạc bộ từ cấp khoa và tương đương.', 10, '', 'V.a', 10),
('V.b', 'b. Kỹ năng tổ chức, quản lý lớp, quản lý các tổ chức Đảng, Đoàn thanh niên, Hội sinh viên và các tổ chức khác trong nhà trường.', 0, '', 'V', NULL),
('V.b.1', ' - Là thành viên của Ban Cán sự lớp, Ban Chấp hành chi đoàn, Ban chấp hành Liên Chi hội SV, Chi hội SV Trường (trừ các thành viên nêu mục trên), Đội SV an ninh xung kích (KTX), Hội đồng tự quản KTX (gồm Chủ tịch và các Trưởng nhóm chuyên môn), Hội đồng tự quản ngoại trú, Nhà trưởng KTX, Cụm trưởng khu nhà trọ đã hoàn thành nhiệm vụ được giao', 8, '', 'V.b', 0),
('V.b.2', ' - Là thành viên của các Ban chuyên môn Đoàn, Hội sinh viên trường hoàn thành nhiệm vụ có xác nhận của Đoàn hoặc Hội sinh viên.', 8, '', 'V.b', 0),
('V.c', 'c. Hỗ trợ và tham gia tích cực vào các hoạt động chung của lớp, tập thể, khoa và nhà trường.', 0, '', 'V', NULL),
('V.c.1', '  - Tích cực tham gia hỗ trợ các hoạt động, phong trào của cấp Khoa, sự kiện chung của nhà trường có xác nhận của đơn vị tổ chức sự kiện (Mỗi đợt tham gia được cộng 01 điểm).', 6, '', 'V.c', 0),
('V.d', 'd. Người học đạt được các thành tích đặc biệt trong học tập, rèn luyện.', 0, '', 'V', NULL),
('V.d.1', '- Được kết nạp Đảng, hoặc được công nhận Đoàn viên ưu tú.', 6, '', 'V.d', 0),
('V.d.2', '- Đạt danh hiệu sinh viên 5 tốt cấp trường trở lên.', 6, '', 'V.d', 0),
('V.d.3', '- Phân loại Đảng viên được xếp loại mức 2', 5, '', 'V.d', 0),
('VI', 'Tổng điểm các điều', 100, '', '0', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transcript`
--

CREATE TABLE `transcript` (
  `idItem` varchar(10) NOT NULL,
  `Account_idAccount` varchar(10) NOT NULL,
  `itemName` varchar(512) DEFAULT NULL,
  `scores` int(11) DEFAULT NULL,
  `describe` varchar(512) DEFAULT NULL,
  `IDParent` varchar(10) DEFAULT NULL,
  `scoresDefault` int(11) DEFAULT NULL,
  `scoresMax` int(11) DEFAULT NULL,
  `scoresStudent` int(11) DEFAULT NULL,
  `scoresTeacher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `transcript`
--

INSERT INTO `transcript` (`idItem`, `Account_idAccount`, `itemName`, `scores`, `describe`, `IDParent`, `scoresDefault`, `scoresMax`, `scoresStudent`, `scoresTeacher`) VALUES
('I.a.1', 'AAAA', '- Đi học đầy đủ, đúng giờ, nghiêm túc trong giờ học (Mỗi môn bị cấm thi trừ 03 điểm)', 0, '', 'I.a', 6, 6, 6, 0),
('I.a.1', 'NNNN', '- Đi học đầy đủ, đúng giờ, nghiêm túc trong giờ học (Mỗi môn bị cấm thi trừ 03 điểm)', 0, '', 'I.a', 6, 6, 0, 0),
('I.b.1.1', 'AAAA', '- Có tham gia đề tài NCKH của sinh viên hoặc của Khoa và cấp tương đương, có xác nhận của Chủ nhiệm đề tài (Không tính bài tập, tiểu luận, đồ án môn học, luận văn...)', 0, '', 'I.b.1', 5, 5, 5, 0),
('I.b.1.1', 'NNNN', '- Có tham gia đề tài NCKH của sinh viên hoặc của Khoa và cấp tương đương, có xác nhận của Chủ nhiệm đề tài (Không tính bài tập, tiểu luận, đồ án môn học, luận văn...)', 0, '', 'I.b.1', 5, 5, 0, 0),
('I.b.1.2', 'AAAA', '- Có giấy khen về NCKH', 0, '', 'I.b.1', 0, 8, 0, 0),
('I.b.1.2', 'NNNN', '- Có giấy khen về NCKH', 0, '', 'I.b.1', 0, 8, 0, 0),
('I.b.1.3', 'AAAA', '- Có bài báo trong và ngoài nước trong hoạt động NCKH.', 0, '', 'I.b.1', 0, 8, 0, 0),
('I.b.1.3', 'NNNN', '- Có bài báo trong và ngoài nước trong hoạt động NCKH.', 0, '', 'I.b.1', 0, 8, 0, 0),
('I.b.2.1', 'AAAA', '- Ngoại ngữ không chuyên/chứng chỉ A/chuẩn khung Châu Âu.', 0, '', 'I.b.2', 0, 3, 0, 0),
('I.b.2.1', 'NNNN', '- Ngoại ngữ không chuyên/chứng chỉ A/chuẩn khung Châu Âu.', 0, '', 'I.b.2', 0, 3, 0, 0),
('I.b.2.2', 'AAAA', '- Chứng chỉ B/chuẩn khung Châu Âu.', 0, '', 'I.b.2', 0, 5, 0, 0),
('I.b.2.2', 'NNNN', '- Chứng chỉ B/chuẩn khung Châu Âu.', 0, '', 'I.b.2', 0, 5, 0, 0),
('I.b.2.3', 'AAAA', '- Chứng chỉ C/chuẩn khung Châu Âu', 0, '', 'I.b.2', 0, 7, 0, 0),
('I.b.2.3', 'NNNN', '- Chứng chỉ C/chuẩn khung Châu Âu', 0, '', 'I.b.2', 0, 7, 0, 0),
('I.b.2.4', 'AAAA', '- Riếng chứng chỉ ngoại ngữ, Chứng nhận Toefl >= 500 điểm; IELTS >= 5.0', 0, '', 'I.b.2', 0, 10, 0, 0),
('I.b.2.4', 'NNNN', '- Riếng chứng chỉ ngoại ngữ, Chứng nhận Toefl >= 500 điểm; IELTS >= 5.0', 0, '', 'I.b.2', 0, 10, 0, 0),
('I.b.3.1', 'AAAA', '- Có tham gia kỳ thi', 0, '', 'I.b.3', 0, 2, 0, 0),
('I.b.3.1', 'NNNN', '- Có tham gia kỳ thi', 0, '', 'I.b.3', 0, 2, 0, 0),
('I.b.3.2', 'AAAA', '- Đạt giải cấp Trường', 0, '', 'I.b.3', 0, 4, 0, 0),
('I.b.3.2', 'NNNN', '- Đạt giải cấp Trường', 0, '', 'I.b.3', 0, 4, 0, 0),
('I.b.3.3', 'AAAA', '- Đạt giải cấp cao hơn.', 0, '', 'I.b.3', 0, 7, 0, 0),
('I.b.3.3', 'NNNN', '- Đạt giải cấp cao hơn.', 0, '', 'I.b.3', 0, 7, 0, 0),
('I.c.1', 'AAAA', '- Không vi phạm quy chế về thi, kiểm tra (Mỗi lần vi phạm trừ 03 điểm)', 0, '', 'I.c', 6, 6, 0, 0),
('I.c.1', 'NNNN', '- Không vi phạm quy chế về thi, kiểm tra (Mỗi lần vi phạm trừ 03 điểm)', 0, '', 'I.c', 6, 6, 0, 0),
('I.d.1', 'AAAA', '- Có cố gắng, vượt khó trong học tập (có ĐTB học kỳ sau lớn hơn học kỳ trước đó; đối với SV năm thứ nhất, học kỳ I không có điểm dưới 4)', 0, '', 'I.d', 2, 2, 0, 0),
('I.d.1', 'NNNN', '- Có cố gắng, vượt khó trong học tập (có ĐTB học kỳ sau lớn hơn học kỳ trước đó; đối với SV năm thứ nhất, học kỳ I không có điểm dưới 4)', 0, '', 'I.d', 2, 2, 0, 0),
('I.e.1.1', 'AAAA', '- Điểm trung bình chung học kỳ (ĐTBCHK) đạt >= 3,60', 0, '', 'I.e.1', 0, 8, 0, 0),
('I.e.1.1', 'NNNN', '- Điểm trung bình chung học kỳ (ĐTBCHK) đạt >= 3,60', 0, '', 'I.e.1', 0, 8, 0, 0),
('I.e.1.2', 'AAAA', '- ĐTBCHK đạt từ 3,20 đến 3,59', 0, '', 'I.e.1', 6, 6, 0, 0),
('I.e.1.2', 'NNNN', '- ĐTBCHK đạt từ 3,20 đến 3,59', 0, '', 'I.e.1', 6, 6, 0, 0),
('I.e.1.3', 'AAAA', '- ĐTBCHK đạt từ 2,50 đến 3,19', 0, '', 'I.e.1', 0, 4, 0, 0),
('I.e.1.3', 'NNNN', '- ĐTBCHK đạt từ 2,50 đến 3,19', 0, '', 'I.e.1', 0, 4, 0, 0),
('I.e.1.4', 'AAAA', '- ĐTBCHK đạt từ 2,00 đến 2,49', 0, '', 'I.e.1', 0, 2, 0, 0),
('I.e.1.4', 'NNNN', '- ĐTBCHK đạt từ 2,00 đến 2,49', 0, '', 'I.e.1', 0, 2, 0, 0),
('II.a.1', 'AAAA', '- Không vi phạm và có ý thức tham gia thực hiện nghiêm túc các quy định của Lớp, nội quy, quy chế của trường, Khoa và các tổ chức trong nhà trường (Mỗi lần vắng trừ 03 điểm)', 0, '', 'II.a', 15, 15, 0, 0),
('II.a.1', 'NNNN', '- Không vi phạm và có ý thức tham gia thực hiện nghiêm túc các quy định của Lớp, nội quy, quy chế của trường, Khoa và các tổ chức trong nhà trường (Mỗi lần vắng trừ 03 điểm)', 0, '', 'II.a', 15, 15, 0, 0),
('II.b.1.1', 'AAAA', '- Giữ gìn an ninh, trật tự nơi công cộng có xác nhận của Đoàn khoa.', 0, '', 'II.b.1', 0, 10, 0, 0),
('II.b.1.1', 'NNNN', '- Giữ gìn an ninh, trật tự nơi công cộng có xác nhận của Đoàn khoa.', 0, '', 'II.b.1', 0, 10, 0, 0),
('II.b.1.2', 'AAAA', '- Giữ gìn vệ sinh, bảo vệ cảnh quan môi trường, nếp sống văn minh (có xác nhận của đoàn thể, Khoa, trường ...)', 0, '', 'II.b.1', 0, 10, 0, 0),
('II.b.1.2', 'NNNN', '- Giữ gìn vệ sinh, bảo vệ cảnh quan môi trường, nếp sống văn minh (có xác nhận của đoàn thể, Khoa, trường ...)', 0, '', 'II.b.1', 0, 10, 0, 0),
('III.a.1', 'AAAA', ' - Tham gia đầy đủ các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao các cấp từ Lớp, Chi hội, Chi đoàn trở lên tổ chức (Mỗi lần vắng trừ 02 điểm từ cấp đơn vị lớp trở lên).', 0, '', 'III.a', 12, 12, 0, 0),
('III.a.1', 'NNNN', ' - Tham gia đầy đủ các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao các cấp từ Lớp, Chi hội, Chi đoàn trở lên tổ chức (Mỗi lần vắng trừ 02 điểm từ cấp đơn vị lớp trở lên).', 0, '', 'III.a', 12, 12, 0, 0),
('III.a.2', 'AAAA', ' - Lực lượng nồng cốt của phong trào', 0, '', 'III.a', 0, 5, 0, 0),
('III.a.2', 'NNNN', ' - Lực lượng nồng cốt của phong trào', 0, '', 'III.a', 0, 5, 0, 0),
('III.b.1.1', 'AAAA', '- Cấp Bộ môn, Chi đoàn, Chi hội, Đội, Nhóm', 0, '', 'III.b.1', 0, 3, 0, 0),
('III.b.1.1', 'NNNN', '- Cấp Bộ môn, Chi đoàn, Chi hội, Đội, Nhóm', 0, '', 'III.b.1', 0, 3, 0, 0),
('III.b.1.2', 'AAAA', '- Cấp Khoa (và tương đương), trường.', 0, '', 'III.b.1', 0, 5, 0, 0),
('III.b.1.2', 'NNNN', '- Cấp Khoa (và tương đương), trường.', 0, '', 'III.b.1', 0, 5, 0, 0),
('III.c', 'AAAA', 'c. Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội.', 0, '', 'III', 0, 0, 0, 0),
('III.c', 'NNNN', 'c. Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội.', 0, '', 'III', 0, 0, 0, 0),
('III.c.1.1', 'AAAA', '- Quyết định khen thưởng của Đoàn Khoa (và tương đương)', 0, '', 'III.c.1', 0, 6, 0, 0),
('III.c.1.1', 'NNNN', '- Quyết định khen thưởng của Đoàn Khoa (và tương đương)', 0, '', 'III.c.1', 0, 6, 0, 0),
('III.c.1.2', 'AAAA', '- Giấy khen cấp Trường.', 0, '', 'III.c.1', 0, 8, 0, 0),
('III.c.1.2', 'NNNN', '- Giấy khen cấp Trường.', 0, '', 'III.c.1', 0, 8, 0, 0),
('III.c.1.3', 'AAAA', '- Giấy khen cấp cao hơn.', 0, '', 'III.c.1', 0, 10, 0, 0),
('III.c.1.3', 'NNNN', '- Giấy khen cấp cao hơn.', 0, '', 'III.c.1', 0, 10, 0, 0),
('IV.a.1', 'AAAA', '- Không vi phạm pháp luật của Nhà nước (Nếu vi phạm pháp luật sẽ bị điểm 00 (điểm không)).', 0, '', 'IV.a', 10, 10, 0, 0),
('IV.a.1', 'NNNN', '- Không vi phạm pháp luật của Nhà nước (Nếu vi phạm pháp luật sẽ bị điểm 00 (điểm không)).', 0, '', 'IV.a', 10, 10, 0, 0),
('IV.a.2', 'AAAA', '- Tích cực tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV.a', 5, 5, 0, 0),
('IV.a.2', 'NNNN', '- Tích cực tham gia tuyên truyền các chủ trương của Đảng, chính sách, pháp luật của Nhà nước trong cộng đồng.', 0, '', 'IV.a', 5, 5, 0, 0),
('IV.b.1', 'AAAA', '  - Tham gia đội nhóm sinh hoạt hướng đên lợi ích cộng đồng (tham gia công tác xã hội ở trường, nơi cư trú, địa phương). (Mỗi đợt tham gia được cộng 02 điểm).', 0, '', 'IV.b', 2, 10, 0, 0),
('IV.b.1', 'NNNN', '  - Tham gia đội nhóm sinh hoạt hướng đên lợi ích cộng đồng (tham gia công tác xã hội ở trường, nơi cư trú, địa phương). (Mỗi đợt tham gia được cộng 02 điểm).', 0, '', 'IV.b', 2, 10, 0, 0),
('IV.c.1', 'AAAA', '- Có tinh thần giúp đỡ bạn bè trong học tập, trong cuộc sống.', 0, '', 'IV.c', 5, 5, 0, 0),
('IV.c.1', 'NNNN', '- Có tinh thần giúp đỡ bạn bè trong học tập, trong cuộc sống.', 0, '', 'IV.c', 5, 5, 0, 0),
('V.a.1', 'AAAA', '- Lớp trưởng, Bí thư Chi đoàn, Ủy viên BCH đoàn thể cấp cao hơn Chi đoàn, BCH Hội sinh viên Trường, Liên Chi hội trưởng, Chi hội trưởng, Đội trưởng các Đội, Nhóm, Câu lạc bộ từ cấp khoa và tương đương.', 0, '', 'V.a', 10, 10, 0, 0),
('V.a.1', 'NNNN', '- Lớp trưởng, Bí thư Chi đoàn, Ủy viên BCH đoàn thể cấp cao hơn Chi đoàn, BCH Hội sinh viên Trường, Liên Chi hội trưởng, Chi hội trưởng, Đội trưởng các Đội, Nhóm, Câu lạc bộ từ cấp khoa và tương đương.', 0, '', 'V.a', 10, 10, 0, 0),
('V.b.1', 'AAAA', ' - Là thành viên của Ban Cán sự lớp, Ban Chấp hành chi đoàn, Ban chấp hành Liên Chi hội SV, Chi hội SV Trường (trừ các thành viên nêu mục trên), Đội SV an ninh xung kích (KTX), Hội đồng tự quản KTX (gồm Chủ tịch và các Trưởng nhóm chuyên môn), Hội đồng tự quản ngoại trú, Nhà trưởng KTX, Cụm trưởng khu nhà trọ đã hoàn thành nhiệm vụ được giao', 0, '', 'V.b', 0, 8, 0, 0),
('V.b.1', 'NNNN', ' - Là thành viên của Ban Cán sự lớp, Ban Chấp hành chi đoàn, Ban chấp hành Liên Chi hội SV, Chi hội SV Trường (trừ các thành viên nêu mục trên), Đội SV an ninh xung kích (KTX), Hội đồng tự quản KTX (gồm Chủ tịch và các Trưởng nhóm chuyên môn), Hội đồng tự quản ngoại trú, Nhà trưởng KTX, Cụm trưởng khu nhà trọ đã hoàn thành nhiệm vụ được giao', 0, '', 'V.b', 0, 8, 0, 0),
('V.b.2', 'AAAA', ' - Là thành viên của các Ban chuyên môn Đoàn, Hội sinh viên trường hoàn thành nhiệm vụ có xác nhận của Đoàn hoặc Hội sinh viên.', 0, '', 'V.b', 0, 8, 0, 0),
('V.b.2', 'NNNN', ' - Là thành viên của các Ban chuyên môn Đoàn, Hội sinh viên trường hoàn thành nhiệm vụ có xác nhận của Đoàn hoặc Hội sinh viên.', 0, '', 'V.b', 0, 8, 0, 0),
('V.c.1', 'AAAA', '  - Tích cực tham gia hỗ trợ các hoạt động, phong trào của cấp Khoa, sự kiện chung của nhà trường có xác nhận của đơn vị tổ chức sự kiện (Mỗi đợt tham gia được cộng 01 điểm).', 0, '', 'V.c', 0, 6, 0, 0),
('V.c.1', 'NNNN', '  - Tích cực tham gia hỗ trợ các hoạt động, phong trào của cấp Khoa, sự kiện chung của nhà trường có xác nhận của đơn vị tổ chức sự kiện (Mỗi đợt tham gia được cộng 01 điểm).', 0, '', 'V.c', 0, 6, 0, 0),
('V.d.1', 'AAAA', '- Được kết nạp Đảng, hoặc được công nhận Đoàn viên ưu tú.', 0, '', 'V.d', 0, 6, 0, 0),
('V.d.1', 'NNNN', '- Được kết nạp Đảng, hoặc được công nhận Đoàn viên ưu tú.', 0, '', 'V.d', 0, 6, 0, 0),
('V.d.2', 'AAAA', '- Đạt danh hiệu sinh viên 5 tốt cấp trường trở lên.', 0, '', 'V.d', 0, 6, 0, 0),
('V.d.2', 'NNNN', '- Đạt danh hiệu sinh viên 5 tốt cấp trường trở lên.', 0, '', 'V.d', 0, 6, 0, 0),
('V.d.3', 'AAAA', '- Phân loại Đảng viên được xếp loại mức 2', 0, '', 'V.d', 0, 5, 0, 0),
('V.d.3', 'NNNN', '- Phân loại Đảng viên được xếp loại mức 2', 0, '', 'V.d', 0, 5, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `years_semester`
--

CREATE TABLE `years_semester` (
  `semester` varchar(2) NOT NULL,
  `years` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `academy`
--
ALTER TABLE `academy`
  ADD PRIMARY KEY (`idAcademy`);

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`idAccount`),
  ADD KEY `fk_Account_Permission1_idx` (`Permission_position`);

--
-- Chỉ mục cho bảng `account_has_academy`
--
ALTER TABLE `account_has_academy`
  ADD PRIMARY KEY (`Account_idAccount`,`Academy_idAcademy`),
  ADD KEY `fk_Account_has_Academy_Academy1_idx` (`Academy_idAcademy`),
  ADD KEY `fk_Account_has_Academy_Account1_idx` (`Account_idAccount`);

--
-- Chỉ mục cho bảng `account_has_branch`
--
ALTER TABLE `account_has_branch`
  ADD PRIMARY KEY (`Account_idAccount`,`Branch_idBranch`),
  ADD KEY `fk_Account_has_Branch_Branch1_idx` (`Branch_idBranch`),
  ADD KEY `fk_Account_has_Branch_Account1_idx` (`Account_idAccount`);

--
-- Chỉ mục cho bảng `account_has_class`
--
ALTER TABLE `account_has_class`
  ADD PRIMARY KEY (`Account_idAccount`,`Class_idClass`),
  ADD KEY `fk_Account_has_Class_Class1_idx` (`Class_idClass`),
  ADD KEY `fk_Account_has_Class_Account1_idx` (`Account_idAccount`);

--
-- Chỉ mục cho bảng `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`idBranch`);

--
-- Chỉ mục cho bảng `calendarscoring`
--
ALTER TABLE `calendarscoring`
  ADD PRIMARY KEY (`Permission_position`,`openDate`,`closeDate`),
  ADD KEY `fk_CalendarScoring_Permission1_idx` (`Permission_position`);

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`idClass`),
  ADD KEY `fk_Class_Academy1_idx` (`Academy_idAcademy`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Image`,`Account_idAccount`),
  ADD KEY `fk_Image_Account1_idx` (`Account_idAccount`),
  ADD KEY `fk_Image_Transcript1_idx` (`Transcript_idItem`);

--
-- Chỉ mục cho bảng `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`position`,`power`);

--
-- Chỉ mục cho bảng `practisescores`
--
ALTER TABLE `practisescores`
  ADD PRIMARY KEY (`Account_idAccount`,`semester`,`years`),
  ADD KEY `fk_PractiseScores_Account1_idx` (`Account_idAccount`);

--
-- Chỉ mục cho bảng `scoresadd`
--
ALTER TABLE `scoresadd`
  ADD PRIMARY KEY (`idScore`),
  ADD KEY `fk_ScoresAdd_Transcript1_idx` (`Transcript_idItem`);

--
-- Chỉ mục cho bảng `scoresadd_has_account`
--
ALTER TABLE `scoresadd_has_account`
  ADD PRIMARY KEY (`ScoresAdd_idScore`,`Account_idAccount`),
  ADD KEY `fk_ScoresAdd_has_Account_Account1_idx` (`Account_idAccount`),
  ADD KEY `fk_ScoresAdd_has_Account_ScoresAdd1_idx` (`ScoresAdd_idScore`);

--
-- Chỉ mục cho bảng `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`idItem`);

--
-- Chỉ mục cho bảng `transcript`
--
ALTER TABLE `transcript`
  ADD PRIMARY KEY (`idItem`,`Account_idAccount`),
  ADD KEY `fk_Transcript_has_Account_Account1_idx` (`Account_idAccount`);

--
-- Chỉ mục cho bảng `years_semester`
--
ALTER TABLE `years_semester`
  ADD PRIMARY KEY (`semester`,`years`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_Account_Permission1` FOREIGN KEY (`Permission_position`) REFERENCES `permission` (`position`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `account_has_academy`
--
ALTER TABLE `account_has_academy`
  ADD CONSTRAINT `fk_Account_has_Academy_Academy1` FOREIGN KEY (`Academy_idAcademy`) REFERENCES `academy` (`idAcademy`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Account_has_Academy_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `account_has_branch`
--
ALTER TABLE `account_has_branch`
  ADD CONSTRAINT `fk_Account_has_Branch_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Account_has_Branch_Branch1` FOREIGN KEY (`Branch_idBranch`) REFERENCES `branch` (`idBranch`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `account_has_class`
--
ALTER TABLE `account_has_class`
  ADD CONSTRAINT `fk_Account_has_Class_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Account_has_Class_Class1` FOREIGN KEY (`Class_idClass`) REFERENCES `class` (`idClass`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `calendarscoring`
--
ALTER TABLE `calendarscoring`
  ADD CONSTRAINT `fk_CalendarScoring_Permission1` FOREIGN KEY (`Permission_position`) REFERENCES `permission` (`position`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `fk_Class_Academy1` FOREIGN KEY (`Academy_idAcademy`) REFERENCES `academy` (`idAcademy`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_Image_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Image_Transcript1` FOREIGN KEY (`Transcript_idItem`) REFERENCES `transcript` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `practisescores`
--
ALTER TABLE `practisescores`
  ADD CONSTRAINT `fk_PractiseScores_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `scoresadd`
--
ALTER TABLE `scoresadd`
  ADD CONSTRAINT `fk_ScoresAdd_Transcript1` FOREIGN KEY (`Transcript_idItem`) REFERENCES `transcript` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `scoresadd_has_account`
--
ALTER TABLE `scoresadd_has_account`
  ADD CONSTRAINT `fk_ScoresAdd_has_Account_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ScoresAdd_has_Account_ScoresAdd1` FOREIGN KEY (`ScoresAdd_idScore`) REFERENCES `scoresadd` (`idScore`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `transcript`
--
ALTER TABLE `transcript`
  ADD CONSTRAINT `fk_Transcript_has_Account_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
