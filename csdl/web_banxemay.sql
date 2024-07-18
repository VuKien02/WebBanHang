-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 12:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_banxemay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `id` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sodienthoai` varchar(20) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id`, `tenkhachhang`, `email`, `sodienthoai`, `diachi`, `matkhau`) VALUES
(15, 'Nguyễn Văn A', 'a@gmail.com', '0987654321', 'Cự khối, Long Biên, Hà Nội', '123456'),
(16, 'Vũ Thành Kiên', 'kien@gmail.com', '0982603381', 'Cự khối, Long Biên, Hà Nội', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `ten`, `thutu`) VALUES
(24, 'Honda', 1),
(25, 'Yamaha', 2),
(26, 'Suzuki', 3),
(28, 'Vinfast', 3),
(29, 'Ducati', 5);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `madonhang` varchar(10) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluongsp` int(11) NOT NULL,
  `mau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `madonhang`, `idsanpham`, `soluongsp`, `mau`) VALUES
(62, '326114', 40, 2, 'Đỏ'),
(63, '326114', 19, 1, 'Đen'),
(64, '326114', 34, 3, 'Đen'),
(65, '326114', 18, 4, 'Đỏ'),
(66, '27500', 40, 2, 'Đỏ'),
(67, '27500', 19, 1, 'Đen'),
(68, '27500', 34, 3, 'Đen'),
(69, '27500', 18, 4, 'Đỏ'),
(70, '27500', 39, 1, 'Xanh đen'),
(71, '201744', 40, 2, 'Đỏ'),
(72, '201744', 19, 1, 'Đen'),
(73, '201744', 34, 3, 'Đen'),
(74, '201744', 18, 4, 'Đỏ'),
(75, '201744', 39, 1, 'Xanh đen'),
(76, '201744', 31, 1, 'Trắng');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `madonhang` varchar(10) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `idkhachhang`, `madonhang`, `trangthai`) VALUES
(47, 16, '326114', 1),
(48, 16, '27500', 1),
(49, 16, '201744', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `sodienthoai`, `noidung`) VALUES
(2, 'Vũ Thành Kiên', 'kien@gmail.com', '0982603381', 'Tôi đã đặt mua các mẫu xe của cửa hàng của bạn. Chúng rất thuận tiện. Mong trang web sẽ tiếp tục phát triển'),
(4, 'Ngô Thế Thái', 'thai@gmail.com', '097814523', 'Thật là một trang web tiện lợi !');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `masanpham` varchar(200) NOT NULL,
  `tensanpham` varchar(200) NOT NULL,
  `nhasanxuat` varchar(200) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `mau` varchar(100) NOT NULL,
  `khoiluong` varchar(100) NOT NULL,
  `dungtich` varchar(100) NOT NULL,
  `dongco` varchar(100) NOT NULL,
  `congsuat` varchar(100) NOT NULL,
  `momen` varchar(100) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `masanpham`, `tensanpham`, `nhasanxuat`, `hinhanh`, `mau`, `khoiluong`, `dungtich`, `dongco`, `congsuat`, `momen`, `gia`, `trangthai`, `iddanhmuc`) VALUES
(11, '001', 'MIO CLASSICO 2010', 'Yamaha', '1700211605_yamaha 1.jpg', 'Vàng / Đen / Trắng', '91 kg', '4.1 lít', '4 kỳ, 2 van, SOHC, 1 xi-lanh', '20.8 hp / 8000 rpm', '7.5 Nm / 6500 rpm', '23050300', 1, 25),
(12, '002', 'FZ1 2016', 'Yamaha', '1700211618_yamaha 2.jpg', 'Đỏ / Đen', '221 kg', '18.17 lít', 'Động cơ 4 thì, 4 xi lanh DOHC 5 van', '150 hp/11,000 rpm', '106 N.m/ 8,000 rpm', '44598000', 1, 25),
(13, '003', 'JUPITER I 2005', 'Yamaha', '1700211638_yamaha 3.jpg', 'Trắng', '104 kg', '4.5 lít', '4 thì, 1 xylanh, SOHC, 2 van', '6.6 hp / 8.000 rpm', '9.0 Nm / 7.000 rpm', '21000000', 1, 25),
(14, '004', 'NOUVO 3 2013', 'Yamaha', '1700208662_yamaha 4.jpg', 'Đỏ', '111 kg', '4.3 lít', '4 kỳ, 2 van, SOHC', '11.8 hp / 8000 rpm', '10.47 Nm / 8000 rpm', '19990000', 1, 25),
(15, '005', 'SIRIUS 2008', 'Yamaha', '1700208751_yamaha 5.jpg', 'Xanh dương / Đen', '96 kg', '4.2 lít', '4 thì, xylanh đơn, 2 van, SOHC', '6,60hp/8.000 rpm', '9,0Nm /5.000 rpm', '23199000', 1, 25),
(16, '006', 'EXCITER 135 GP 2016', 'Yamaha', '1700216019_yamaha 6.jpg', 'Trắng, xanh da trời / Đen', '111 kg', '5 lít', '4 kỳ, 4 van, SOHC, 1 xi-lanh', '12.1 hp / 8500 rpm', '11.8 nm / 5500 rpm', '25300099', 1, 25),
(17, '007', 'ADV 150 ABS', 'Honda', '1700209775_honda 1.png', 'Trắng / Đen', '117 kg', '8 lít', '4 thì, SOHC, eSP', '14,5 mã lực tại 8,500 vòng/phút', '13,8 Nm tại 6.500 vòng/phút', '32400000', 1, 24),
(18, '008', 'WINNER X 2020', 'Honda', '1700209863_honda 2.jpg', 'Đỏ', '122 kg', '4.5 lít', '4 kỳ, DOHC, xy-lanh đơn', '11.5 kW / 9000 rpm', '13.5 Nm / 6500 rpm', '27900000', 1, 24),
(19, '009', 'Airblade 125 2014', 'Honda', '1700209956_honda 3.jpg', 'Đỏ / Đen', '111 kg', '4,4 lít', 'Xăng, 4 kỳ, 1 xy lanh', '8,4kW/8.500 vòng/phút', '11,68 N.m/5.000 vòng/phút', '33987300', 1, 24),
(20, '010', 'STEED 400 2011', 'Honda', '1700210104_honda 4.jpg', 'Đen', '215 kg', '11 lít', 'Động cơ V 4 thì 2 xi-lanh, làm mát bằng nước, OHC, 3 van', '31 Hp tại 7.500 rpm', '33 nm tại 6.000 rpm', '120130000', 1, 24),
(21, '011', 'CB250 NIGHTHAWK 2008', 'Honda', '1700210264_honda 5.jpg', 'Đen', '132 kg', '16 lít', 'Động cơ hai xi-lanh', '19hp/8000rpm', '18 Nm/6500rpm', '109000000', 1, 24),
(22, '012', 'AIRBLADE 150 2020', 'Honda', '1700210398_honda 6.jpg', 'Trắng / Đỏ / Đen', '113 kg', '4.4 lít', '4 thì 1 xy lanh', '9,6kW/8.500 vòng/phút', '13,3 N.m/5.000 vòng/phút', '55190000', 1, 24),
(23, '013', 'V-Strom 250SX', 'Suzuki', '1700211237_suzuki1.png', 'Vàng đen / Đen', '165 kg', '12 lít', '4 kỳ, xy lanh đơn, SOHC', '19.5 kW/9,300 rpm', '22.2 Nm/7,300 rpm', '132900000', 1, 26),
(24, '014', 'SATRIA F150', 'Suzuki', '1700211395_suzuki2.png', 'Đen / Trắng', '110 kg', '4 lít', '4 thì, làm mát bằng dung dịch', '13.6 kW / 10,000 vòng / phút', '13.8 Nm / 8,500 vòng / phút', '48490000', 1, 26),
(25, '015', 'RAIDER R150', 'Suzuki', '1700211551_suzuki3.png', 'Đen', '109 kg', '4 lít', '4 thì, làm mát bằng dung dịch', '13.6 kW / 10,000 vòng / phút', '13.8 Nm / 8,500 vòng / phút', '45990000', 1, 26),
(26, '016', 'GSX-R150', 'Suzuki', '1700211840_suzuki4.jpg', 'Đỏ / Đen', '131 kg', '11 lít', '4-thì, làm mát bằng dung dich', '14,1 kW / 10,500 vòng / phút', '14,0 Nm / 9,000 vòng / phút', '210890000', 1, 26),
(27, '017', 'GSX-S150', 'Suzuki', '1700212032_suzuki5.png', 'Đen', '130 kg', '11 lít', '4-thì, làm mát bằng dung dich, 1 xy - lanh, DOHC 4 - van', '14,1 kW / 10,500 vòng / phút', '14,0 Nm / 9,000 vòng / phút', '215900000', 1, 26),
(28, '018', 'Intruder 150', 'Suzuki', '1700212160_suzuki6.jpg', 'Đen', '151 kg', '11 lít', '4 thì, 1 xy-lanh, SOHC, 2 van, làm mát bằng không khí', '10,4kW/8.000RPM', '14Nm/6.000RPM', '190999000', 1, 26),
(29, '019', 'FELIZ S', 'Vinfast', '1700215756_vin1.jpg', 'Trắng / Đen / Vàng / Xanh dương', '110 kg', 'No', 'Inhub 1800W, 01 Pin LFP 3.5 kWh', 'No', 'No', '20250000', 1, 28),
(30, '020', 'SYM GALAXY 50CC', 'Vinfast', '1700216130_vin2.jpg', 'Đỏ / Đen', '97 kg', '4 lít', 'Xăng, 4 kỳ, 1 xi-lanh, làm mát bằng không khí', '12.1 hp / 8500 rpm', '13.8 Nm / 8,500 vòng / phút', '18480000', 1, 28),
(31, '021', 'Espero Classic Pro', 'Vinfast', '1700216275_vin3.jpg', 'Trắng / Xanh dương', '75 kg', '3.7 lít', 'Xăng, 4 kỳ, 1 xi-lanh, làm mát bằng không khí', '6,60hp/8.000 rpm', '9.0 Nm / 7.000 rpm', '22900000', 1, 28),
(32, '022', 'SYM Galaxy 2023', 'Vinfast', '1700216446_vin4.jpg', 'Xanh dương / Trắng / Đen', '98 kg', '4 lít', 'Xăng, 4 kỳ, 1 xi-lanh, làm mát bằng không khí', '12.1 hp / 8500 rpm', '13.8 Nm / 8,500 vòng / phút', '19500000', 1, 28),
(33, '023', 'Cub 50cc Espero Plus', 'Vinfast', '1700216557_vin5.jpg', 'Đen / Vàng / Xanh dương / Đỏ / Hồng nhạt', '87 kg', '4 lít', 'Xăng, 4 kỳ, 1 xi-lanh, làm mát bằng không khí', '6,60hp/8.000 rpm', '9.0 Nm / 7.000 rpm', '15500000', 1, 28),
(34, '024', 'SYM Husky Classic 125', 'Vinfast', '1700216719_vin6.jpg', 'Đen', '118.5 kg', '0,3 lít', 'Động cơ 4 thì, làm mát bằng không khí', '12.1 hp / 8500 rpm', '13.8 Nm / 8,500 vòng / phút', '33900000', 1, 28),
(35, '025', 'Ducati Hypermotard 950', 'Ducati', '1700217710_du1.jpg', 'Đỏ', '201 kg', '14 lít', 'Testastretta 11° L-Twin Cylinder, 16 Valves, Liquid Cooled Engine, 4 kỳ, 2 xylanh', '9000 rpm', '96 Nm', '460000000', 1, 29),
(36, '026', 'Scrambler Sixty2', 'Ducati', '1700217919_du2.jpg', 'Đỏ đen', '4-Stroke, DOHC Engine', '14 lít', '4-Stroke, DOHC Engine', '8750 rpm', '68 Nm', '661745000', 1, 29),
(37, '027', 'Ducati Monster', 'Ducati', '1700218148_du3.jpg', 'Vàng', '206 kg', '16.5 lít', 'L-Twin Cylinder, 4-Stroke ,Liquid Cooled Engine', '9250 rpm', '86 Nm', '873015000', 1, 29),
(38, '028', 'Ducati MultiStrada', 'Ducati', '1700218281_du4.jpg', 'Đỏ đen', '227 kg', '20 lít', 'Testastretta L-Twin Cylinder, 8 Valve, 4-Stroke, Liquid Cooled Engine', '9000 rpm', '96 Nm', '992063000', 1, 29),
(39, '029', 'Ducati Scrambler Cafe Racer', 'Ducati', '1700218393_du5.jpg', 'Xanh đen', '196 kg', '13.5 lít', 'L-Twin Cylinder,Desmodromic 2-Valves per Cylinder', '8250 rpm', '67 Nm', '649206000', 1, 29),
(40, '030', 'Ducati Hypermotard', 'Ducati', '1700218503_du6.jpg', 'Đỏ', '198 kg', '20 lít', '4-Stroke, DOHC Engine', '9000 RPM', '95 Nm', '818888000', 1, 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `madonhang` (`madonhang`),
  ADD KEY `idsanpham` (`idsanpham`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `madonhang` (`madonhang`),
  ADD KEY `idkhachhang` (`idkhachhang`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `danhmuc_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `sanpham` (`iddanhmuc`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`madonhang`) REFERENCES `giohang` (`madonhang`),
  ADD CONSTRAINT `donhang_ibfk_4` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`idkhachhang`) REFERENCES `dangky` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
