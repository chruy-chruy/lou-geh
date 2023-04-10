-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 07:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `del_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_number`, `name`, `barcode`, `details`, `quantity`, `price`, `brand`, `selling_price`, `revenue`, `created_at`, `del_status`) VALUES
(0015, 'Saging', '', 'Test', '12', 10000, 'Asus', 11000, 12000, '2023-02-13 09:26:57', ''),
(0016, 'Bugas', '', 'Test', '89', 850, 'Asus', 1000, 15000, '2023-02-13 09:26:57', ''),
(0017, 'Egg Tray', '', 'Test Eggg', '188', 200, '123', 230, 6000, '2023-04-09 00:12:52', '');

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `pos_id` int(11) NOT NULL,
  `item_number` varchar(255) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` double NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sale`
--

CREATE TABLE `product_sale` (
  `product_sale_number` int(11) NOT NULL,
  `transaction_number` int(4) UNSIGNED ZEROFILL NOT NULL,
  `item_number` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` double NOT NULL,
  `total_price` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `del_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_sale`
--

INSERT INTO `product_sale` (`product_sale_number`, `transaction_number`, `item_number`, `product_name`, `quantity`, `price`, `total_price`, `created_at`, `del_status`) VALUES
(1, 0021, '0016', ' Bugas', 3, 1000, 3000, '2023-04-10 19:29:52', 0),
(2, 0021, '0016', ' Bugas', 2, 1000, 2000, '2023-04-10 19:29:52', 0),
(3, 0022, '0017', ' Egg Tray', 2, 230, 460, '2023-04-10 19:30:46', 0),
(4, 0022, '0016', ' Bugas', 2, 1000, 2000, '2023-04-10 19:30:46', 0),
(5, 0024, '0017', ' Egg Tray', 2, 230, 460, '2023-04-10 23:59:13', 0),
(6, 0025, '0017', ' Egg Tray', 4, 230, 920, '2023-04-11 00:01:52', 0),
(7, 0026, '0016', 'Bugas', 4, 1000, 4000, '2023-04-11 00:05:30', 0),
(8, 0027, '0017', ' Egg Tray', 4, 230, 920, '2023-04-11 01:11:20', 0);

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
  `date_delivered` varchar(15) NOT NULL,
  `status` varchar(55) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `del_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_transaction`
--

INSERT INTO `purchase_transaction` (`transaction_no`, `supplier_code`, `item_name`, `brand`, `details`, `quantity`, `price`, `total_cost`, `date`, `date_delivered`, `status`, `created_at`, `del_status`) VALUES
(0016, '0003', '', 'Asus', 'Deliever Asap', 100, 850, 85000, '2023-02-11', '2023-02-14', '', '2023-02-10 15:16:07', 'deleted'),
(0017, '0003', 'Asus Mouse', 'Asus', 'Deliever Asap', 100, 850, 85000, '2023-02-11', '', 'Cancelled', '2023-02-10 15:16:37', ''),
(0019, '0003', 'Asus Tuf Mouse', 'Asus', 'Sad', 20, 750, 15000, '2023-02-15', '', 'Pending', '2023-02-14 10:32:10', ''),
(0020, '0003', 'Test', 'Test', 'Wqeqe', 2, 3, 6, '2023-02-14', '2023-02-15', 'Received', '2023-02-14 14:34:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `sale_transaction`
--

CREATE TABLE `sale_transaction` (
  `transaction_no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `change` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `sold_by` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale_transaction`
--

INSERT INTO `sale_transaction` (`transaction_no`, `customer_name`, `item_name`, `quantity`, `amount`, `total`, `change`, `created_at`, `sold_by`) VALUES
(0011, '', '', 0, 5000, 5000, 0, '2023-04-10 18:56:33', 'SuperAdmin (Admin) '),
(0012, 'Godlen State', '', 0, 5200, 5000, 200, '2023-04-10 18:57:30', 'SuperAdmin (Admin) '),
(0013, '$customer', '', 0, 0, 0, 0, '2023-04-10 19:03:10', '$sold_by'),
(0014, '$customer', '', 0, 0, 0, 0, '2023-04-10 19:03:24', '$sold_by'),
(0015, '$customer', '', 0, 0, 0, 0, '2023-04-10 19:04:42', '$sold_by'),
(0016, '$customer', '', 0, 0, 0, 0, '2023-04-10 19:05:24', '$sold_by'),
(0017, '$customer', '', 0, 0, 0, 0, '2023-04-10 19:11:34', '$sold_by'),
(0018, 'Godlen State', '', 0, 5200, 5000, 200, '2023-04-10 19:20:49', 'SuperAdmin (Admin) '),
(0019, 'Godlen State', '', 0, 5200, 5000, 200, '2023-04-10 19:21:24', 'SuperAdmin (Admin) '),
(0020, 'Troy', '', 0, 5000, 5000, 0, '2023-04-10 19:29:32', 'SuperAdmin (Admin) '),
(0021, 'Troy', '', 0, 5000, 5000, 0, '2023-04-10 19:29:52', 'SuperAdmin (Admin) '),
(0022, 'Troy', '', 0, 3000, 2460, 540, '2023-04-10 19:30:46', 'SuperAdmin (Admin) '),
(0023, '', '', 0, 0, 0, 0, '2023-04-10 21:51:42', 'SuperAdmin (Admin) '),
(0024, 'Troy', '', 0, 500, 460, 40, '2023-04-10 23:59:13', 'SuperAdmin (Admin) '),
(0025, 'Troy', '', 0, 1000, 920, 80, '2023-04-11 00:01:52', 'SuperAdmin (Admin) '),
(0026, 'Troy', '', 0, 4000, 4000, 0, '2023-04-11 00:05:30', 'SuperAdmin (Admin) '),
(0027, 'Troy', '', 0, 1000, 920, 80, '2023-04-11 01:11:20', 'SuperAdmin (Admin) ');

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
(3, 'admin', 'admin', 'Troy Michael Garidos', 'Sales Staff', ''),
(6, 'admin', 'admin', 'Test', 'Inventory Staff', '');

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
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `product_sale`
--
ALTER TABLE `product_sale`
  ADD PRIMARY KEY (`product_sale_number`);

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
  MODIFY `item_number` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `pos_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sale`
--
ALTER TABLE `product_sale`
  MODIFY `product_sale_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchase_transaction`
--
ALTER TABLE `purchase_transaction`
  MODIFY `transaction_no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sale_transaction`
--
ALTER TABLE `sale_transaction`
  MODIFY `transaction_no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_code` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
