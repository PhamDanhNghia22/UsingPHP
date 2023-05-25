-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 11:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `fulllname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fulllname`, `username`, `email`, `pass`, `role`) VALUES
(27, 'Phạm Danh Nghia', 'Admin', 'admin@gmail.com', '0938386458', 1),
(28, 'PhamDanhnghia', 'danhnghia', 'danhnghia@gmail.com', '2345', 0),
(29, 'Vo Van H', 'H vo', 'hvo@gmail.com', '23456', 0),
(30, 'Vo Van H', 'H vo', 'hvo@gmail.com', '23456', 0),
(31, 'Vo Thi My Dung', 'DungVo', 'dungvo@gmail.com', '23456789', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `prodID` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 0,
  `dongia` float NOT NULL DEFAULT 0,
  `name_prod` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `orderID`, `prodID`, `soluong`, `dongia`, `name_prod`, `img`) VALUES
(16, 16, 36, 1, 1800000, 'xe dap dia hinh 13', 'bicicleta2.png'),
(17, 16, 35, 1, 1500000, 'xe dap dia hinh 15', 'bicicleta1.png'),
(18, 17, 36, 1, 1800000, 'xe dap dia hinh 13', 'bicicleta2.png'),
(19, 17, 37, 2, 1500000, 'Xe đạp thể thao 16', 'bicicleta1.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 4,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `parent_id`) VALUES
(6, 'Xe đạp', 0, 0),
(7, 'Xe đạp thể thao', 0, 6),
(8, 'Điện thoại ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_prod` int(11) NOT NULL,
  `name_prod` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status_prod` tinyint(4) NOT NULL DEFAULT 4,
  `noibat` tinyint(4) NOT NULL DEFAULT 4,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_prod`, `name_prod`, `price`, `img`, `description`, `status_prod`, `noibat`, `cate_id`) VALUES
(35, 'xe dap dia hinh 15', 1500000, 'bicicleta1.png', '<ul>\r\n	<li>Xe đạp thể thao</li>\r\n</ul>\r\n', 0, 0, 7),
(36, 'xe dap dia hinh 13', 1800000, 'bicicleta2.png', '<ul>\r\n	<li>Xe đạp thể thao</li>\r\n</ul>\r\n', 0, 0, 7),
(37, 'Xe đạp thể thao 16', 1500000, 'bicicleta1.png', '<ul>\r\n	<li>Xe đạp thể thao</li>\r\n</ul>\r\n', 0, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `madh` varchar(200) NOT NULL,
  `tongdonhang` float NOT NULL,
  `pttt` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `madh`, `tongdonhang`, `pttt`, `name`, `email`, `tel`, `address`) VALUES
(16, '513079', 3300000, 0, 'pham danh nghia', 'danhnghiaphampdn@gmail.com', '0938386458', '1234abc'),
(17, '936465', 4800000, 0, 'pham van a', 'pdn22112002@gmail.com', '0938386458', '1234abc');

-- --------------------------------------------------------

--
-- Table structure for table `__efmigrationshistory`
--

CREATE TABLE `__efmigrationshistory` (
  `MigrationId` varchar(150) NOT NULL,
  `ProductVersion` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `__efmigrationshistory`
--

INSERT INTO `__efmigrationshistory` (`MigrationId`, `ProductVersion`) VALUES
('20230326170707_MyFristMigration', '7.0.4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodID` (`prodID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `__efmigrationshistory`
--
ALTER TABLE `__efmigrationshistory`
  ADD PRIMARY KEY (`MigrationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`prodID`) REFERENCES `products` (`id_prod`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
