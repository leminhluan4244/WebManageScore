-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2017 lúc 01:38 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('ID', 'Công nghệ thông tin'),
('MT', 'Môi trường'),
('TS', 'Thủy sản');

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
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `Permission_position` varchar(200) NOT NULL,
  `Academy_idAcademy` varchar(10) NOT NULL,
  `Class_idClass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`idAccount`, `accountName`, `birthday`, `address`, `sex`, `phone`, `email`, `password`, `Permission_position`, `Academy_idAcademy`, `Class_idClass`) VALUES
('B1400704', 'Lê Minh Luân', '1996-01-16', 'Cần Thơ', 'Nam', 964025424, 'luanb1400704@student.ctu.edu.vn', '123456789', 'Student', 'ID', 'DI1496A1'),
('B1400713', 'Đoàn Minh Nhựt', '1996-01-01', 'Cần Thơ', 'Nam', 123456789, 'nhutb1400713@student.ctu.edu.vn', '1263746127652', 'Student', 'ID', 'DI1496A1');

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
('B1400704', 'KS'),
('B1400713', 'CTHG');

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
('CTHG', 'Châu Thành - Hậu Giang', 'Hậu Giang'),
('CTST', 'Châu Thành - Sóc Trăng', 'Sóc Trăng'),
('KS', 'Kế Sách - Sóc Trăng', 'Sóc Trăng');

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
('2017-08-15', '2017-08-18', 'Cadre'),
('2017-08-09', '2017-08-08', 'Student');

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
('DI1495A1', 'Công nghệ thông tin 1', '40', 'ID'),
('DI1496A1', 'Kỹ thuật phần mềm 1', '40', 'ID'),
('DI1496A2', 'Kỹ thuật phần mềm 2', '40', 'ID');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `Image` int(11) NOT NULL,
  `Account_idAccount` varchar(10) NOT NULL,
  `Structure_idItem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

CREATE TABLE `permission` (
  `position` varchar(200) NOT NULL,
  `power` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `permission`
--

INSERT INTO `permission` (`position`, `power`) VALUES
('Cadre', '01'),
('Student', '01'),
('Student', '02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `practisescores`
--

CREATE TABLE `practisescores` (
  `scores` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `Account_idAccount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scoresadd`
--

CREATE TABLE `scoresadd` (
  `idScores` varchar(10) NOT NULL,
  `scores` int(11) DEFAULT NULL,
  `describe` varchar(512) DEFAULT NULL,
  `Account_idAccount` varchar(10) NOT NULL,
  `Structure_idItem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `structure`
--

CREATE TABLE `structure` (
  `idItem` varchar(10) NOT NULL,
  `itemName` varchar(512) DEFAULT NULL,
  `scores` int(11) DEFAULT NULL,
  `describe` varchar(512) DEFAULT NULL,
  `IDParent` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transcript`
--

CREATE TABLE `transcript` (
  `idItem` varchar(10) NOT NULL,
  `itemName` varchar(512) DEFAULT NULL,
  `scoresStudent` int(11) DEFAULT NULL,
  `scoresTeacher` int(11) DEFAULT NULL,
  `scores` int(11) DEFAULT NULL,
  `describe` varchar(512) DEFAULT NULL,
  `IDParent` varchar(10) DEFAULT NULL,
  `Account_idAccount` varchar(10) NOT NULL
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
  ADD KEY `fk_Account_Permission1_idx` (`Permission_position`),
  ADD KEY `fk_Account_Academy1_idx` (`Academy_idAcademy`),
  ADD KEY `fk_Account_Class1_idx` (`Class_idClass`);

--
-- Chỉ mục cho bảng `account_has_branch`
--
ALTER TABLE `account_has_branch`
  ADD PRIMARY KEY (`Account_idAccount`,`Branch_idBranch`),
  ADD KEY `fk_Account_has_Branch_Branch1_idx` (`Branch_idBranch`),
  ADD KEY `fk_Account_has_Branch_Account1_idx` (`Account_idAccount`);

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
  ADD PRIMARY KEY (`Image`),
  ADD KEY `fk_Image_Account1_idx` (`Account_idAccount`),
  ADD KEY `fk_Image_Structure1_idx` (`Structure_idItem`);

--
-- Chỉ mục cho bảng `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`position`,`power`);

--
-- Chỉ mục cho bảng `practisescores`
--
ALTER TABLE `practisescores`
  ADD PRIMARY KEY (`Account_idAccount`,`scores`,`semester`,`year`),
  ADD KEY `fk_PractiseScores_Account1_idx` (`Account_idAccount`);

--
-- Chỉ mục cho bảng `scoresadd`
--
ALTER TABLE `scoresadd`
  ADD PRIMARY KEY (`idScores`),
  ADD KEY `fk_ScoresAdd_Account1_idx` (`Account_idAccount`),
  ADD KEY `fk_ScoresAdd_Structure1_idx` (`Structure_idItem`);

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
  ADD KEY `fk_Transcript_Account1_idx` (`Account_idAccount`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_Account_Academy1` FOREIGN KEY (`Academy_idAcademy`) REFERENCES `academy` (`idAcademy`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Account_Class1` FOREIGN KEY (`Class_idClass`) REFERENCES `class` (`idClass`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Account_Permission1` FOREIGN KEY (`Permission_position`) REFERENCES `permission` (`position`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `account_has_branch`
--
ALTER TABLE `account_has_branch`
  ADD CONSTRAINT `fk_Account_has_Branch_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Account_has_Branch_Branch1` FOREIGN KEY (`Branch_idBranch`) REFERENCES `branch` (`idBranch`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_Image_Structure1` FOREIGN KEY (`Structure_idItem`) REFERENCES `structure` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `practisescores`
--
ALTER TABLE `practisescores`
  ADD CONSTRAINT `fk_PractiseScores_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `scoresadd`
--
ALTER TABLE `scoresadd`
  ADD CONSTRAINT `fk_ScoresAdd_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ScoresAdd_Structure1` FOREIGN KEY (`Structure_idItem`) REFERENCES `structure` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `transcript`
--
ALTER TABLE `transcript`
  ADD CONSTRAINT `fk_Transcript_Account1` FOREIGN KEY (`Account_idAccount`) REFERENCES `account` (`idAccount`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
