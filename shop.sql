-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 03:49 AM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(11) NOT NULL COMMENT 'รหัสสินค้า',
  `Product_Name` varchar(50) DEFAULT NULL COMMENT 'ชื่อสินต้า',
  `Product_Picture` varchar(100) NOT NULL COMMENT 'รูปภาพสินค้า',
  `Product_Category` varchar(50) NOT NULL COMMENT 'ประเภทสินค้า',
  `Product_Description` varchar(250) NOT NULL COMMENT 'รายละเอียดสินค้า',
  `Product_Price` int(9) DEFAULT NULL COMMENT 'ราคาสินค้า',
  `Quantity_Stock` int(10) DEFAULT NULL COMMENT 'จำนวนสินค้า',
  `Create_Date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'สร้างวันที่',
  `Update_Date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'อัพเดทวันที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
