-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 01:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speedworkshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `gender`, `phone`, `address`, `created`, `updated`) VALUES
(2, 'Putra', 'L', '08192389231', 'Jakarta', '2024-04-16 16:37:38', '2024-04-27 06:18:24'),
(3, 'Putri', 'P', '0812382137', 'Bekasi', '2024-04-16 16:44:11', '2024-04-16 11:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `p_category`
--

CREATE TABLE `p_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_category`
--

INSERT INTO `p_category` (`category_id`, `name`, `created`, `updated`) VALUES
(1, 'CrankCase', '2024-04-16 17:26:31', '2024-04-26 04:22:22'),
(3, 'Cylinder Block', '2024-04-18 14:27:56', '2024-04-18 09:31:51'),
(4, 'Standard Motor', '2024-04-18 14:28:31', NULL),
(31, 'dfasfasf', '2024-04-26 09:23:05', NULL),
(32, 'fasfas', '2024-04-26 09:23:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_item`
--

CREATE TABLE `p_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `stock` int(10) DEFAULT 0,
  `image` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_item`
--

INSERT INTO `p_item` (`item_id`, `barcode`, `name`, `category_id`, `unit_id`, `price`, `stock`, `image`, `created`, `updated`) VALUES
(1, 'A001', 'Crankcase K60', 1, 1, 200000, 400, 'item-240419-a340dcc0ba.jpeg', '2024-04-18 14:51:19', '2024-05-13 12:27:22'),
(5, 'A002', 'Cylinder Block K60', 3, 1, 200000, 220, 'item-240425-a47ca677e8.png', '2024-04-18 15:29:33', '2024-04-25 19:38:39'),
(9, 'A003', 'fsadfasd', 3, 5, 123123, 150, 'item-240419-075d6a9429.png', '2024-04-19 12:55:24', '2024-04-19 08:13:53'),
(13, 'A004', 'Kunci', 31, 3, 150000, 200, 'item-240428-f8bae867f2.png', '2024-04-28 06:01:43', NULL),
(14, 'A005', 'Helm', 3, 4, 100000, 200, 'item-240428-1c445940e8.png', '2024-04-28 06:02:13', NULL),
(15, 'A006', 'Makanan', 4, 3, 200000, 220, 'item-240428-6041726564.jpg', '2024-04-28 06:02:54', NULL),
(16, 'A007', 'Minuman', 1, 4, 20000, 200, 'item-240428-c2bb0ec270.png', '2024-04-28 06:03:23', NULL),
(17, 'A008', 'Bambu', 32, 1, 20000, 50, 'item-240430-7319a43d4d.png', '2024-04-30 12:05:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_unit`
--

CREATE TABLE `p_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_unit`
--

INSERT INTO `p_unit` (`unit_id`, `name`, `created`, `updated`) VALUES
(1, 'Honda', '2024-04-16 17:26:31', '2024-04-17 07:07:30'),
(3, 'Yamaha', '2024-04-17 12:07:44', NULL),
(4, 'Suzuki', '2024-04-17 12:07:49', NULL),
(5, 'Kawasaki', '2024-04-17 12:07:54', '2024-04-26 04:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `phone`, `address`, `description`, `created`, `updated`) VALUES
(1, 'Thailook Shop', '08127382137', 'Bekasi', 'Ada banyak aksessoris thailook style', '2024-04-16 09:09:03', '2024-04-26 08:12:56'),
(2, 'Varian Shop', '08123236742', 'Jakarta', 'Ada berbagai macam varian aksessoris', '2024-04-16 09:09:03', NULL),
(10, 'Shop Ajaib', '08129381293', 'Jawa Timur', 'Toko Ajaib', '2024-04-24 07:19:08', NULL),
(13, 'dasdas', '321e1', 'das', 'dasf', '2024-04-26 10:33:40', NULL),
(14, 'sadasd', '12312312', 'dasd', 'das', '2024-04-26 10:35:36', NULL),
(15, 'asdas', '213123', 'dasd', 'dasdas', '2024-04-26 10:37:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_cart`
--

CREATE TABLE `t_cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `discount_item` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_sale`
--

CREATE TABLE `t_sale` (
  `sale_id` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `final_price` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `uang_kembalian` int(11) NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_sale`
--

INSERT INTO `t_sale` (`sale_id`, `invoice`, `customer_id`, `total_price`, `discount`, `final_price`, `cash`, `uang_kembalian`, `note`, `date`, `user_id`, `created`) VALUES
(2, 'MP2404240001', NULL, 200000, 100000, 100000, 300000, 200000, '', '2024-04-24', 1, '2024-04-24 16:20:04'),
(3, 'MP2404250001', NULL, 400000, 100000, 300000, 500000, 200000, '', '2024-04-25', 1, '2024-04-25 08:47:23'),
(4, 'MP2404250002', NULL, 200000, 0, 200000, 500000, 300000, '', '2024-04-25', 1, '2024-04-25 10:09:32'),
(5, 'MP2404250003', NULL, 200000, 0, 200000, 500000, 300000, '', '2024-04-25', 1, '2024-04-25 10:40:45'),
(6, 'MP2404250004', NULL, 200000, 0, 200000, 500000, 300000, '', '2024-04-25', 1, '2024-04-25 10:41:13'),
(7, 'MP2404250005', NULL, 200000, 0, 200000, 500000, 300000, '', '2024-04-25', 1, '2024-04-25 10:46:01'),
(8, 'MP2404250006', NULL, 200000, 0, 200000, 600000, 400000, '', '2024-04-25', 1, '2024-04-25 11:35:15'),
(9, 'MP2404250007', NULL, 200000, 0, 200000, 300000, 100000, '', '2024-04-25', 1, '2024-04-25 11:53:55'),
(10, 'MP2404250008', 2, 180000, 0, 180000, 200000, 20000, 'TEST', '2024-04-25', 1, '2024-04-25 11:56:32'),
(11, 'MP2404250009', 3, 150000, 0, 150000, 200000, 50000, 'Apa aja', '2024-04-25', 1, '2024-04-25 11:58:22'),
(12, 'MP2404250010', 3, 200000, 20000, 180000, 300000, 120000, 'test', '2024-04-25', 1, '2024-04-25 17:56:02'),
(13, 'MP2404260001', NULL, 200000, 0, 200000, 400000, 200000, '', '2024-04-26', 1, '2024-04-26 10:11:35'),
(14, 'MP2404260002', NULL, 200000, 0, 200000, 500000, 300000, '', '2024-04-26', 1, '2024-04-26 10:17:41'),
(15, 'MP2404260003', 3, 273123, 0, 273123, 300000, 26877, 'Ini test alert', '2024-04-26', 1, '2024-04-26 10:18:45'),
(16, 'MP2404260004', NULL, 523123, 0, 523123, 1000000, 476877, '', '2024-04-26', 1, '2024-04-26 10:27:25'),
(17, 'MP2404260005', NULL, 200000, 0, 200000, 300000, 100000, '', '2024-04-26', 1, '2024-04-26 13:23:17'),
(18, 'MP2404260006', NULL, 150000, 0, 150000, 200000, 50000, 'asas', '2024-04-26', 1, '2024-04-26 13:23:51'),
(19, 'MP2404260007', NULL, 123123, 0, 123123, 200000, 76877, '', '2024-04-26', 1, '2024-04-26 13:24:48'),
(20, 'MP2404260008', 3, 200000, 0, 200000, 300000, 100000, '', '2024-04-26', 1, '2024-04-26 13:27:23'),
(21, 'MP2404260009', NULL, 200000, 0, 200000, 300000, 100000, '', '2024-04-26', 1, '2024-04-26 13:30:16'),
(22, 'MP2404280001', NULL, 150000, 0, 150000, 200000, 50000, '', '2024-04-28', 1, '2024-04-28 06:05:35'),
(23, 'MP2404280002', NULL, 100000, 0, 100000, 200000, 100000, '', '2024-04-28', 1, '2024-04-28 06:05:48'),
(24, 'MP2404280003', NULL, 200000, 0, 200000, 200000, 0, '', '2024-04-28', 1, '2024-04-28 06:06:05'),
(25, 'MP2404280004', NULL, 20000, 0, 20000, 20000, 0, '', '2024-04-28', 1, '2024-04-28 06:06:16'),
(26, 'MP2404280005', NULL, 4600000, 0, 4600000, 5000000, 400000, '', '2024-04-28', 1, '2024-04-28 06:07:32'),
(27, 'MP2404280006', NULL, 7000000, 0, 7000000, 8000000, 1000000, '', '2024-04-28', 1, '2024-04-28 06:08:06'),
(28, 'MP2404280007', NULL, 4801797, 0, 4801797, 5000000, 198203, '', '2024-04-28', 1, '2024-04-28 06:08:53'),
(29, 'MP2404280008', NULL, 2850000, 0, 2850000, 3000000, 150000, '', '2024-04-28', 1, '2024-04-28 06:09:18'),
(30, 'MP2404280009', NULL, 8500000, 0, 8500000, 9000000, 500000, '', '2024-04-28', 1, '2024-04-28 06:10:07'),
(31, 'MP2404280010', NULL, 5200000, 0, 5200000, 6000000, 800000, '', '2024-04-28', 1, '2024-04-28 06:10:41'),
(32, 'MP2404280011', NULL, 1800000, 0, 1800000, 2000000, 200000, '', '2024-04-28', 1, '2024-04-28 06:11:05'),
(33, 'MP2404300001', NULL, 200000, 0, 200000, 300000, 100000, '', '2024-04-30', 1, '2024-04-30 12:12:44'),
(34, 'MP2405300001', NULL, 200000, 0, 200000, 200000, 0, '', '2024-05-30', 1, '2024-05-30 17:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `t_sale_detail`
--

CREATE TABLE `t_sale_detail` (
  `sale_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `discount_item` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_sale_detail`
--

INSERT INTO `t_sale_detail` (`sale_id`, `item_id`, `price`, `qty`, `discount_item`, `total`) VALUES
(2, 1, 200000, 1, 0, 200000),
(3, 5, 200000, 2, 0, 400000),
(4, 1, 200000, 1, 0, 200000),
(5, 1, 200000, 1, 0, 200000),
(6, 1, 200000, 1, 0, 200000),
(7, 5, 200000, 1, 0, 200000),
(8, 1, 200000, 1, 0, 200000),
(9, 1, 200000, 1, 50000, 200000),
(10, 1, 200000, 1, 20000, 180000),
(11, 5, 200000, 1, 50000, 150000),
(12, 1, 200000, 1, 50000, 200000),
(13, 1, 200000, 1, 0, 200000),
(14, 1, 200000, 1, 0, 200000),
(17, 1, 200000, 1, 0, 200000),
(18, 1, 200000, 1, 50000, 150000),
(19, 9, 123123, 1, 0, 123123),
(20, 1, 200000, 1, 0, 200000),
(21, 5, 200000, 1, 0, 200000),
(22, 13, 150000, 1, 0, 150000),
(23, 14, 100000, 1, 0, 100000),
(24, 15, 200000, 1, 0, 200000),
(25, 16, 20000, 1, 0, 20000),
(26, 5, 200000, 23, 0, 4600000),
(27, 1, 200000, 35, 0, 7000000),
(28, 9, 123123, 39, 0, 4801797),
(29, 13, 150000, 19, 0, 2850000),
(30, 14, 100000, 85, 0, 8500000),
(31, 15, 200000, 26, 0, 5200000),
(32, 16, 20000, 90, 0, 1800000),
(33, 17, 20000, 10, 0, 200000),
(34, 5, 200000, 1, 0, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `t_stock`
--

CREATE TABLE `t_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` varchar(200) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_stock`
--

INSERT INTO `t_stock` (`stock_id`, `item_id`, `type`, `detail`, `supplier_id`, `qty`, `date`, `created`, `user_id`) VALUES
(16, 5, 'in', 'Tambahan', 10, 20, '2024-04-24', '2024-04-24 08:01:52', 1),
(17, 1, 'in', 'Kulakan', 1, 200, '2024-04-24', '2024-04-24 08:02:01', 1),
(18, 9, 'in', 'Kulakan', 2, 160, '2024-04-24', '2024-04-24 08:02:17', 1),
(23, 9, 'out', 'Sudah dibeli', 2, 10, '2024-04-24', '2024-04-24 08:40:24', 1),
(24, 1, 'in', 'Tambahan', 2, 50, '2024-04-25', '2024-04-25 11:51:07', 1),
(25, 1, 'out', 'Sudah dibeli', 1, 50, '2024-04-25', '2024-04-25 11:52:59', 1),
(26, 1, 'in', 'Tambahan', 10, 50, '2024-04-25', '2024-04-25 17:57:03', 1),
(27, 1, 'out', 'Sudah dibeli', 2, 20, '2024-04-25', '2024-04-25 17:57:24', 1),
(30, 13, 'in', 'Tambahan', 10, 200, '2024-04-28', '2024-04-28 06:03:39', 1),
(31, 14, 'in', 'Tambahan', 2, 200, '2024-04-28', '2024-04-28 06:03:50', 1),
(32, 15, 'in', 'Tambahan', 10, 200, '2024-04-28', '2024-04-28 06:04:02', 1),
(33, 16, 'in', 'Kulakan', 1, 200, '2024-04-28', '2024-04-28 06:04:15', 1),
(34, 5, 'in', 'Tambahan', 1, 200, '2024-04-28', '2024-04-28 06:07:16', 1),
(35, 15, 'in', 'Tambahan', 1, 20, '2024-04-30', '2024-04-30 11:58:43', 1),
(36, 1, 'in', 'Tambahan', 1, 170, '2024-04-30', '2024-04-30 12:03:14', 1),
(37, 17, 'in', 'Tambahan', 2, 50, '2024-04-30', '2024-04-30 12:06:31', 1),
(38, 17, 'in', 'Tambahan', 1, 200, '2024-04-30', '2024-04-30 12:11:31', 1),
(39, 17, 'out', 'Sudah dibeli', 1, 200, '2024-04-30', '2024-04-30 12:11:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:kasir'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Muhammad Helmi Assura', 'Bekasi', 1),
(2, 'kasir1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'thomas', 'Jakarta', 2),
(6, 'zyonvitle', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ZyonVitle', 'Tambun', 1),
(10, '17200800', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'lerkud', 'dasdas', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `p_category`
--
ALTER TABLE `p_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `p_item`
--
ALTER TABLE `p_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `p_unit`
--
ALTER TABLE `p_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `t_cart`
--
ALTER TABLE `t_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `t_cart_ibfk_1` (`item_id`),
  ADD KEY `t_cart_ibfk_2` (`user_id`);

--
-- Indexes for table `t_sale`
--
ALTER TABLE `t_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `t_stock_ibfk_1` (`item_id`),
  ADD KEY `t_stock_ibfk_3` (`user_id`),
  ADD KEY `supplier_id` (`supplier_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `p_category`
--
ALTER TABLE `p_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `p_item`
--
ALTER TABLE `p_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `p_unit`
--
ALTER TABLE `p_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_cart`
--
ALTER TABLE `t_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_sale`
--
ALTER TABLE `t_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `t_stock`
--
ALTER TABLE `t_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p_item`
--
ALTER TABLE `p_item`
  ADD CONSTRAINT `p_item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `p_category` (`category_id`),
  ADD CONSTRAINT `p_item_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `p_unit` (`unit_id`);

--
-- Constraints for table `t_cart`
--
ALTER TABLE `t_cart`
  ADD CONSTRAINT `t_cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  ADD CONSTRAINT `t_sale_detail_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `t_sale` (`sale_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD CONSTRAINT `t_stock_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_stock_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stock_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
