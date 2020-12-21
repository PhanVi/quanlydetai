-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 05:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydetai`
--

-- --------------------------------------------------------

--
-- Table structure for table `detai`
--

CREATE TABLE `detai` (
  `MaDeTai` varchar(12) NOT NULL,
  `TenDeTai` varchar(250) NOT NULL,
  `NguoiHD` varchar(50) NOT NULL,
  `ThoiGianDK` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detai`
--

INSERT INTO `detai` (`MaDeTai`, `TenDeTai`, `NguoiHD`, `ThoiGianDK`) VALUES
('001', 'Khai thác loại hình “du lịch chậm” nhằm đáp ứng nhu cầu cho người cao tuổi tại quận 1, tp.HCM', 'Nguyen Van A', '2020-12-01'),
('002', 'Vấn đề ô nhiễm môi trường đô thị và một số giải pháp ở khu đô thị mới', 'Nguyen Van A', '2020-12-01'),
('003', 'Trang phục sức thời Lý- Trần qua tư liệu khảo cổ học', 'Nguyen Van B', '2020-12-02'),
('004', 'Triết học về lòng biết ơn trong đạo lý “uống nước nhớ nguồn', 'Nguyen Van C', '2020-12-02'),
('005', 'Đánh giá tác động của dịch bệnh Covid-19 đến sự tăng trưởng nền kinh tế Việt Nam', 'Nguyen Van C', '2020-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(12) NOT NULL,
  `MaKhoa` varchar(12) NOT NULL,
  `TenGV` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `ChuyenNganh` varchar(50) NOT NULL,
  `TenTK` varchar(50) NOT NULL,
  `MatKhau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `MaKhoa`, `TenGV`, `NgaySinh`, `GioiTinh`, `DiaChi`, `SDT`, `Email`, `ChuyenNganh`, `TenTK`, `MatKhau`) VALUES
('GV001', 'MK001', 'Nguyen Van A', '1977-02-05', 1, 'Ba Tháng Hai, Xuân Khánh, Ninh Kiều, Cần Thơ.', '031115424', 'nguyenvana@gmail.com', 'Quản trị kinh doanh', 'TK001', 'TK01'),
('GV002', 'MK001', 'Nguyen Van B', '1983-02-08', 1, 'Số 3 Lê Đình Lý, Thạc Gián, Thanh Khê, Đà Nẵng.', '0368825648', 'nguyenvanb@gmail.com', 'Kinh Tế Luật', 'TK002', 'TK02'),
('GV003', 'MK002', 'Nguyen Van C', '1980-09-18', 1, 'Số 8 Tôn Thất Thuyết, Mỹ Đình, Nam Từ Liêm, Hà Nội', '0355215684', 'nguyenvanc@gmail.com', 'Kỹ thuật phần mềm', 'TK003', 'TK03');

-- --------------------------------------------------------

--
-- Table structure for table `gvdk`
--

CREATE TABLE `gvdk` (
  `MaGV` varchar(12) NOT NULL,
  `MaDeTai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(20) NOT NULL,
  `TenKhoa` varchar(50) NOT NULL,
  `TruongKhoa` varchar(25) NOT NULL,
  `SoDTKhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `TruongKhoa`, `SoDTKhoa`) VALUES
('MK001', 'Quản trị kinh doanh', 'Trưởng khoa a', '028886656'),
('MK002', 'Kinh tế luật', 'Trưởng khoa b', '025685585'),
('MK003', 'Kỹ thuật phần mềm', 'Trưởng khoa c', '023636465');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(12) NOT NULL,
  `TenLop` varchar(50) NOT NULL,
  `MaKhoa` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoa`) VALUES
('ML001', 'Tên lớp 001', 'MK001'),
('ML002', 'Tên lớp 002', 'MK002');

-- --------------------------------------------------------

--
-- Table structure for table `nghiemthu`
--

CREATE TABLE `nghiemthu` (
  `MaNT` varchar(12) NOT NULL,
  `ThoiGianNT` date NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `KinhPhi` decimal(10,0) NOT NULL,
  `KetLuan` varchar(50) NOT NULL,
  `MaDeTai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nghiemthu`
--

INSERT INTO `nghiemthu` (`MaNT`, `ThoiGianNT`, `NgayBatDau`, `NgayKetThuc`, `KinhPhi`, `KetLuan`, `MaDeTai`) VALUES
('NT001', '2020-12-17', '2020-12-17', '2020-12-31', '6000000', '', '001'),
('NT002', '2020-12-10', '2020-12-10', '2020-12-24', '5500000', '', '002');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(12) NOT NULL,
  `TenSV` varchar(50) NOT NULL,
  `MaLop` varchar(12) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TenTK` varchar(50) NOT NULL,
  `MatKhau` varchar(20) NOT NULL,
  `DanToc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `TenSV`, `MaLop`, `NgaySinh`, `GioiTinh`, `DiaChi`, `SDT`, `Email`, `TenTK`, `MatKhau`, `DanToc`) VALUES
('SV001', 'Sinh Viên A', 'ML001', '1999-02-05', 1, 'Ba Tháng Hai, Xuân Khánh, Ninh Kiều, Cần Thơ.', '0322266232', 'sinhviena@gmail.com', 'TK010', 'TK010', 'Kinh'),
('SV002', 'Sinh Viên B', 'ML002', '1997-01-01', 0, '09 Bạch Đằng phường 2 Tân Bình Tp. HCM', '0365525110', 'sinhvienb@gmail.com', 'TK011', 'TK011', 'Kinh');

-- --------------------------------------------------------

--
-- Table structure for table `svdk`
--

CREATE TABLE `svdk` (
  `MaSV` varchar(12) NOT NULL,
  `MaDeTai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `svdk`
--

INSERT INTO `svdk` (`MaSV`, `MaDeTai`) VALUES
('SV001', '001'),
('SV002', '002');

-- --------------------------------------------------------

--
-- Table structure for table `tiendo`
--

CREATE TABLE `tiendo` (
  `MaBaoCao` varchar(12) NOT NULL,
  `ThoiGianBC` date NOT NULL,
  `TienDo` varchar(50) NOT NULL,
  `NguoiBC` varchar(50) NOT NULL,
  `GhiChu` varchar(50) DEFAULT NULL,
  `MaDeTai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiendo`
--

INSERT INTO `tiendo` (`MaBaoCao`, `ThoiGianBC`, `TienDo`, `NguoiBC`, `GhiChu`, `MaDeTai`) VALUES
('BC001', '2020-12-24', '', 'Sinh Viên A', NULL, '001'),
('BC002', '2020-12-25', '', 'Sinh Viên B', NULL, '002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`MaDeTai`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`);

--
-- Indexes for table `gvdk`
--
ALTER TABLE `gvdk`
  ADD PRIMARY KEY (`MaGV`,`MaDeTai`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`);

--
-- Indexes for table `nghiemthu`
--
ALTER TABLE `nghiemthu`
  ADD PRIMARY KEY (`MaNT`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`);

--
-- Indexes for table `svdk`
--
ALTER TABLE `svdk`
  ADD PRIMARY KEY (`MaSV`,`MaDeTai`);

--
-- Indexes for table `tiendo`
--
ALTER TABLE `tiendo`
  ADD PRIMARY KEY (`MaBaoCao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
