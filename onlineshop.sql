-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 05:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `pass`) VALUES
(3, 'mr.quyen', 'quyenvxd00084@fpt.edu.vn', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'quyen1997', 'vuxuanquyen1997@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'hieu bin', 'axieyangb@iit.edu', 'a005ef5bb1f2e4205ee08373ed9b36cc'),
(6, 'mr.quyen', 'hieu12@gmail.com', 'fb0a844b06fb3c9debfc6e32fe0657e8'),
(7, 'hieu bin', 'hieu12@gamil.com', '25f9e794323b453885f5181f1b624d0b'),
(8, 'Thangshow', 'thangshow123@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `acc` varchar(100) NOT NULL,
  `idproduct` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `mphone` int(11) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `acc`, `idproduct`, `soluong`, `gia`, `ten`, `address`, `phone`, `mphone`, `note`) VALUES
(48, 'vuxuanquyen1997@gmail.com', 'SID51961', 1, 13, 'VŨ XUÂN QUYỆN', '121 KIM NGƯU HÀ NỘI', 1629908249, 4123456, 'ship hàng vào buổi sáng,buổi chiều tôi đi học'),
(49, 'vuxuanquyen1997@gmail.com', 'SID42460', 1, 23, 'VŨ XUÂN QUYỆN', '121 KIM NGƯU HÀ NỘI', 1629908249, 4123456, 'ship hàng vào buổi sáng,buổi chiều tôi đi học'),
(50, 'vuxuanquyen1997@gmail.com', 'SID31915', 1, 11, 'VŨ XUÂN QUYỆN', '121 KIM NGƯU HÀ NỘI', 1629908249, 4123456, 'ship hàng vào buổi sáng,buổi chiều tôi đi học'),
(51, 'vuxuanquyen1997@gmail.com', 'SID50020', 1, 9, 'VŨ XUÂN QUYỆN', '121 KIM NGƯU HÀ NỘI', 1629908249, 4123456, 'ship hàng vào buổi sáng,buổi chiều tôi đi học'),
(52, 'axieyangb@iit.edu', 'SID31915', 1, 11, 'vũ xuân quyện', '121 Kim ngưu,hà nội', 1629908249, 4123456, 'ship vào buổi chiều'),
(53, 'axieyangb@iit.edu', 'SID42460', 4, 92, 'vũ xuân quyện', '121 Kim ngưu,hà nội', 1629908249, 4123456, 'ship vào buổi chiều');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gio` time NOT NULL,
  `thang` date NOT NULL,
  `noidung` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idproduct` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `gio`, `thang`, `noidung`, `idproduct`) VALUES
(1, 'vuxuanquyen', '16:26:26', '2016-11-07', 'sản phẩm rất đẹp,rất hài lòng về sản phẩm', 'SID51961'),
(3, 'Gowther', '20:08:25', '2016-11-07', 'Chất liệu sản phẩm tốt,giao hàng nhanh hơn dự kiến,cảm ơn shop!!!', 'SID42460'),
(4, 'Trung hieu', '20:16:19', '2016-11-07', 'sản phẩm tốt,giao hàng nhanh,lần sau sẽ mua ở đây', 'SID51961'),
(5, 'Thanh huu', '20:22:42', '2016-11-07', 'áo rất đẹp,phù hợp với nhân viên công sở?', 'SID50020'),
(6, 'Thangshow', '16:44:58', '2016-11-09', 'good', 'SID51961');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `anh` varchar(100) NOT NULL,
  `gia` int(10) NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idproduct` varchar(100) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nhanhieu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anh1` varchar(100) NOT NULL,
  `anh2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `anh`, `gia`, `ten`, `idproduct`, `category`, `tinhtrang`, `nhanhieu`, `anh1`, `anh2`) VALUES
(0, 'images/new/1.jpg', 13, 'Áo sơ mi nam TIX lexu sang trọng ', 'SID51961', 'aosomi', 'New', 'TIX lesu', 'images/new/1.1.jpg', 'images/new/1.2.jpg'),
(1, 'images/new/2.jpg', 23, 'Áo khoác kaki nam nữ', 'SID42460', 'aokhoac', 'new', 'VNXK', 'images/new/2.1.jpg', 'images/new/2.2.jpg'),
(2, 'images/new/3.jpg', 10, 'Áo khoác nỉ nam phối màu newabm ', 'SID38948', 'aokhoac', 'new', 'VNXK', 'images/new/3.1.jpg', 'images/new/3.2.jpg'),
(3, 'images/new/4.jpg', 11, 'Áo khoác nam 2 dây kéo thời trang', 'SID31915', 'aokhoac', 'new', 'VNXK', 'images/new/4.1.jpg', 'images/new/4.2.jpg'),
(4, 'images/new/5.jpg', 9, 'Áo sơ mi nam kiểu dáng sang trọng ', 'SID50020', 'aosomi', 'new', 'VNXK', 'images/new/5.1.jpg', 'images/new/5.2.jpg'),
(5, 'images/new/6.jpg', 17, 'Quần Jean nam KUMAS cá tính', 'SID51994', 'quan jean ', 'new', 'KUMAS', 'images/new/6.1.jpg', 'images/new/6.2.jpg'),
(6, 'images/new/7.jpg', 14, 'Áo sơ mi nam mũi neo sành điệu', 'SID51988', 'men', 'sales', 'VNXK', 'images/new/7.1.jpg', 'images/new/7.2.jpg'),
(7, 'images/new/8.jpg', 14, 'Áo sơ mi nam TIX lexu sang trọng', 'SID51979', 'men', 'hot', 'TIX lexu', 'images/new/8.1.jpg', 'images/new/8.2.jpg'),
(8, 'images/new/9.jpg', 16, 'Áo sơ mi nam trẻ trung năng động', 'SID50025', 'men', 'hot', 'LV', 'images/new/9.1.jpg', 'images/new/9.2.jpg'),
(10, 'images/new/11.jpg', 18, 'Áo khoác kaki 2 lớp túi giả phối da ', 'SID6622', 'men', 'hot', 'VNXK', 'images/new/11.1.jpg', 'images/new/11.2.jpg'),
(11, 'images/new/12.jpg', 16, 'Đầm dự tiệc gắn hoa hồng tiểu thư ', 'SID31298', 'women', 'sales', 'VNXK', 'images/new/12.1.jpg', 'images/new/12.2.jpg'),
(12, 'images/new/13.jpg', 14, 'Áo khoác nữ xỏ ngón Basix', 'SID46632', 'women', 'sales', 'VNXK', 'images/new/13.jpg', 'images/new/13.jpg'),
(13, 'images/new/14.jpg', 34, 'áo khoác hàn quốc', 'SID31423', 'women', 'sales', 'LV', 'images/new/14.1.jpg', 'images/new/14.2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
