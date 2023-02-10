-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 10:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lougeh`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_number` int(4) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `del_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_number`, `name`, `contact_number`, `address`, `created_at`, `del_status`) VALUES
(0004, 'Customer 1', '09256536985', 'Address Test', '2023-02-10 15:34:33', ''),
(0005, 'Customer 2 New', '09652636987', 'Address 2 New', '2023-02-10 17:37:59', ''),
(0006, 'Customer 3', '09569875741', 'Customer 3 Address', '2023-02-10 17:40:03', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_number` int(4) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(100) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `brand` varchar(225) NOT NULL,
  `selling_price` double NOT NULL,
  `revenue` double NOT NULL,
  `del_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_number`, `name`, `barcode`, `details`, `quantity`, `price`, `brand`, `selling_price`, `revenue`, `del_status`) VALUES
(0015, 'TUF Gaming VG258QM', '', '24.5-inch Full HD (1920 X 1080) Gaming Monitor With Ultrafast 280*Hz Refresh Rate Designed For Professional Gamers And Immersive Gameplay\r\nEnables A 0.5ms Response Time (GTG) For Sharp Gaming Visuals With High Frame Rates\r\nG-SYNC Compatible Ready, Deliver', '12', 10000, 'Asus', 11000, 12000, ''),
(0016, 'Asus Tuf Mouse', '', 'Test Mouse', '100', 850, 'Asus', 1000, 15000, '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_transaction`
--

CREATE TABLE `purchase_transaction` (
  `transaction_no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `supplier_code` varchar(100) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` double NOT NULL,
  `total_cost` double NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `del_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_transaction`
--

INSERT INTO `purchase_transaction` (`transaction_no`, `supplier_code`, `item_name`, `brand`, `details`, `quantity`, `price`, `total_cost`, `date`, `created_at`, `del_status`) VALUES
(0016, '0003', '', 'Asus', 'Deliever Asap', 100, 850, 85000, '2023-02-11', '2023-02-10 15:16:07', 'deleted'),
(0017, '0003', 'Asus Mouse', 'Asus', 'Deliever Asap', 100, 850, 85000, '2023-02-11', '2023-02-10 15:16:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `sale_transaction`
--

CREATE TABLE `sale_transaction` (
  `transaction_no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `sold_by` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale_transaction`
--

INSERT INTO `sale_transaction` (`transaction_no`, `customer_name`, `item_name`, `quantity`, `price`, `total`, `created_at`, `sold_by`) VALUES
(0005, 'Customer', 'TUF Gaming VG258QM', 2, 11000, 22000, '2023-02-10 17:25:14', ''),
(0006, 'Customer', 'Asus Tuf Mouse', 2, 1000, 2000, '2023-02-10 17:29:53', 'Admin'),
(0007, 'Customer 3', 'Asus Tuf Mouse', 2, 1000, 2000, '2023-02-10 17:40:03', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_code` int(4) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(100) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `del_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_code`, `name`, `company_name`, `contact_number`, `address`, `created_at`, `del_status`) VALUES
(0003, 'Asus', 'Asus Tech', '09658554236', 'KCC Gensan', '2023-02-10 13:52:20', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(225) NOT NULL,
  `role` varchar(55) NOT NULL,
  `del_status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullName`, `role`, `del_status`) VALUES
(1, 'admin', 'admin', 'SuperAdmin', 'Admin', ''),
(3, 'Troy1234', '1234', 'Troy Michael Garidos', 'Staff', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_number`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_number`);

--
-- Indexes for table `purchase_transaction`
--
ALTER TABLE `purchase_transaction`
  ADD PRIMARY KEY (`transaction_no`);

--
-- Indexes for table `sale_transaction`
--
ALTER TABLE `sale_transaction`
  ADD PRIMARY KEY (`transaction_no`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_number` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_number` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `purchase_transaction`
--
ALTER TABLE `purchase_transaction`
  MODIFY `transaction_no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sale_transaction`
--
ALTER TABLE `sale_transaction`
  MODIFY `transaction_no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_code` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
