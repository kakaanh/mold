-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 21, 2023 lúc 07:13 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database_n22`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khsx`
--

CREATE TABLE `khsx` (
  `stt` int(11) NOT NULL,
  `product` text NOT NULL,
  `makeqty` int(11) NOT NULL,
  `ngay01` int(11) NOT NULL,
  `ngay02` int(11) NOT NULL,
  `ngay03` int(11) NOT NULL,
  `ngay04` int(11) NOT NULL,
  `ngay05` int(11) NOT NULL,
  `ngay06` int(11) NOT NULL,
  `ngay07` int(11) NOT NULL,
  `ngay08` int(11) NOT NULL,
  `ngay09` int(11) NOT NULL,
  `ngay10` int(11) NOT NULL,
  `ngay11` int(11) NOT NULL,
  `ngay12` int(11) NOT NULL,
  `ngay13` int(11) NOT NULL,
  `ngay14` int(11) NOT NULL,
  `ngay15` int(11) NOT NULL,
  `ngay16` int(11) NOT NULL,
  `ngay17` int(11) NOT NULL,
  `ngay18` int(11) NOT NULL,
  `ngay19` int(11) NOT NULL,
  `ngay20` int(11) NOT NULL,
  `ngay21` int(11) NOT NULL,
  `ngay22` int(11) NOT NULL,
  `ngay23` int(11) NOT NULL,
  `ngay24` int(11) NOT NULL,
  `ngay25` int(11) NOT NULL,
  `ngay26` int(11) NOT NULL,
  `ngay27` int(11) NOT NULL,
  `ngay28` int(11) NOT NULL,
  `ngay29` int(11) NOT NULL,
  `ngay30` int(11) NOT NULL,
  `ngay31` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khsx`
--

INSERT INTO `khsx` (`stt`, `product`, `makeqty`, `ngay01`, `ngay02`, `ngay03`, `ngay04`, `ngay05`, `ngay06`, `ngay07`, `ngay08`, `ngay09`, `ngay10`, `ngay11`, `ngay12`, `ngay13`, `ngay14`, `ngay15`, `ngay16`, `ngay17`, `ngay18`, `ngay19`, `ngay20`, `ngay21`, `ngay22`, `ngay23`, `ngay24`, `ngay25`, `ngay26`, `ngay27`, `ngay28`, `ngay29`, `ngay30`, `ngay31`) VALUES
('1','VX021S-1G-5-V1','68565','3000','6000','9000','0','12000','15000','18000','21000','24000','0','0','27000','30000','33000','36000','39000','42000','0','45000','48000','51000','54000','57000','0','0','60000','63000','66000','68565','0','0'),
('0','P202006072','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('2','VX021S-1DJ-5-V1','19387','1000','2000','3000','0','4000','5000','6000','7000','8000','0','0','9000','10000','11000','12000','13000','14000','0','15000','16000','17000','18000','19387','0','0','0','0','0','0','0','0'),
('0','P202006073','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('3','VX021S-1GR-J-V1','1671','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1671','0','0','0','0','0'),
('0','P202006074','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('4','VX021S-1GS-5-V1','4527','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','2500','4527','0','0','0'),
('0','P202006075','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('5','VX021S-1GR-4-V1','3645','2500','3645','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006076','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('6','VX021S-1DJ-4-V1','355','0','355','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006077','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('7','VX021S-1GR-1-V1','4491','0','0','2500','0','4491','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006078','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('8','VX021S-1G-6-V1','801','0','0','0','0','0','801','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006079','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('9','VX021S-1GR-2-V1','1315','0','0','0','0','0','0','1315','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006080','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('10','VX021S-1DJ-J-V1','478','0','0','0','0','0','0','0','478','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006081','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('11','VX022S-1G-5-V1','14069','0','0','0','0','0','0','0','0','2500','0','0','5000','7500','10000','12500','14069','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006082','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('12','VX022S-1GS-5-V1','770','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','770','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006083','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('13','VX022S-1DJ-5-V1','16867','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','2500','5000','7500','10000','12500','0','0','15000','16867','0','0','0','0'),
('0','P202006084','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('14','VX022S-1GR-4-V1','863','863','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006085','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('15','VX022S-1GR-1-V1','421','0','421','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006086','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('16','VX022S-1DJ-J-V1','434','0','0','434','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006087','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('17','VX022S-1DJ-4-V1','226','0','0','0','0','226','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006088','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('18','VX022S-1G-5-NO-V1','842','0','0','0','0','0','842','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006089','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('19','VX022S-1GRH-4-V1','200','0','0','0','0','0','0','200','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006090','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('20','VX023S-1G-5-V1','13471','0','0','0','0','0','0','0','3000','6000','0','0','9000','13471','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006091','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('21','VX023S-1GS-5-V1','2376','0','0','0','0','0','0','0','0','0','0','0','0','0','2376','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006092','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('22','VX023S-1DJ-5-V1','12521','1200','2400','3600','0','4800','6000','7200','8400','9600','0','0','10800','12521','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006093','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('23','VX023S-1GR-4-V1','407','0','0','0','0','0','0','0','0','0','0','0','0','0','407','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006094','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('24','VX023S-1DJ-6-V1','447','0','0','0','0','0','0','0','0','0','0','0','0','0','0','447','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006095','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('25','VX023S-1GRH-4-V1','168','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','168','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006096','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'),
('26','VX023S-1G-5-NO-V1','4158','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','3000','0','4158','0','0','0','0','0','0','0','0','0','0','0','0'),
('0','P202006097','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
