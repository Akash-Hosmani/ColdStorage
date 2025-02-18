-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2024 at 12:53 PM
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
-- Database: `cold_storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `allout_freezer`
--

CREATE TABLE `allout_freezer` (
  `Allout_id` int(11) NOT NULL,
  `Freezer_id` int(11) NOT NULL,
  `Former_id` int(11) NOT NULL,
  `Item_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Allout_start_date` date NOT NULL,
  `Allout_end_date` date NOT NULL,
  `Allouted_date` date NOT NULL,
  `Allouted_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allout_freezer`
--

INSERT INTO `allout_freezer` (`Allout_id`, `Freezer_id`, `Former_id`, `Item_id`, `Quantity`, `Allout_start_date`, `Allout_end_date`, `Allouted_date`, `Allouted_status`) VALUES
(2, 1, 1, 3, 500, '2024-09-05', '2024-09-26', '2024-09-05', 'ALLOTED');

-- --------------------------------------------------------

--
-- Table structure for table `former_details`
--

CREATE TABLE `former_details` (
  `Former_id` int(11) NOT NULL,
  `Former_name` varchar(20) NOT NULL,
  `Former_code` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Contact` text NOT NULL,
  `Email-id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `former_details`
--

INSERT INTO `former_details` (`Former_id`, `Former_name`, `Former_code`, `address`, `Age`, `Gender`, `Contact`, `Email-id`) VALUES
(1, 'jagadish', 'FCODE1', 'appandoddi tq|dist| Raichur.585225.', 28, 'male', '9009911900', 'akashosmani99@gmail.com'),
(3, 'sharamma', 'FCODE2', 'abbetumkur, tq,dist,yadgir 585201', 25, 'female', '9900990099', 'sharanamma@gmail.coom'),
(4, 'shankragouda', 'FCODE4', 'hosmani Thangadagi tq,shahapur, dist,yadgir 585223', 40, 'male', '9845409664', 'shankragoudahosmani99@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `former_request`
--

CREATE TABLE `former_request` (
  `Former_req_id` int(11) NOT NULL,
  `Former_id` int(11) NOT NULL,
  `Freezer_id` int(11) NOT NULL,
  `Item_id` int(11) NOT NULL,
  `req_quantity` int(11) NOT NULL,
  `Request_date` date NOT NULL,
  `request_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `former_request`
--

INSERT INTO `former_request` (`Former_req_id`, `Former_id`, `Freezer_id`, `Item_id`, `req_quantity`, `Request_date`, `request_status`) VALUES
(1, 1, 1, 3, 500, '2024-09-03', 'ALLOTED'),
(2, 1, 1, 4, 200, '2024-09-04', 'REJECTED'),
(3, 1, 14, 0, 200, '2024-09-04', 'PENDING'),
(4, 1, 14, 4, 200, '2024-09-04', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `freezer_details`
--

CREATE TABLE `freezer_details` (
  `Freezer_id` int(11) NOT NULL,
  `Storage_details_id` int(11) NOT NULL,
  `Freezer_no` varchar(11) NOT NULL,
  `Capacity` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `freezer_details`
--

INSERT INTO `freezer_details` (`Freezer_id`, `Storage_details_id`, `Freezer_no`, `Capacity`) VALUES
(1, 1, 'Govt1', 2000),
(2, 2, 'OHM1', 5000),
(3, 1, 'Govt2', 200),
(4, 1, 'Govt3', 200),
(5, 1, 'Govt4', 250),
(6, 1, 'Govt5', 300),
(7, 2, 'OHM2', 100),
(8, 2, 'OHM3', 200),
(9, 2, 'OHM4', 250),
(10, 2, 'OHM5', 300),
(12, 4, 'P02', 1000),
(13, 5, 'K1', 500),
(14, 5, 'K2', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  `Type` text NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_id`, `Name`, `Image`, `Type`, `rate`) VALUES
(1, 'chilli', 'AdobeStock_905726905_Preview.jpeg', 'vegetable', 10),
(2, 'Ladies Finger', 'AdobeStock_426985799_Preview.jpeg', 'vegetable', 6),
(3, 'Jeera', 'AdobeStock_765666005_Preview.jpeg', 'masala Item', 8),
(4, 'Banana', 'AdobeStock_775361137_Preview.jpeg', 'Fruits', 8),
(5, 'Seetafall', 'AdobeStock_244422258_Preview.jpeg', 'Fruits', 10),
(6, 'CaulliFlower', 'AdobeStock_710361610_Preview.jpeg', 'vegetable', 12);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Hint_question` text NOT NULL,
  `Hint_answer` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `User_Name`, `Password`, `Type`, `Hint_question`, `Hint_answer`, `Status`) VALUES
(1, 'admin', '123456', 'admin', 'who i am', 'admin', 'Active'),
(5, 'FCODE1', '123123', 'former', 'Enter Your Email ID', 'jagadish909@gmail.com', 'Active'),
(6, 'FCODE2', '123123', 'former', 'Enter Your Email ID', 'sharanamma@gmail.coom', 'Active'),
(7, 'FCODE4', '123123', 'former', 'Enter Your Email ID', 'shankragoudahosmani99@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `storage_details`
--

CREATE TABLE `storage_details` (
  `Storage_details_id` int(11) NOT NULL,
  `Storage_name` varchar(20) NOT NULL,
  `Storage_no` int(11) NOT NULL,
  `Storage_capacity` bigint(20) NOT NULL,
  `Images` varchar(1000) NOT NULL,
  `Location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `storage_details`
--

INSERT INTO `storage_details` (`Storage_details_id`, `Storage_name`, `Storage_no`, `Storage_capacity`, `Images`, `Location`) VALUES
(1, 'Govt ColdStorage', 1, 2000, 'StockCake-Warehouse Work Shift_1724486860.jpg', 'yadgir'),
(2, 'OhmShakthi Freezers ', 2, 5000, 'StockCake-Misty Warehouse Interior_1724486847.jpg', 'Shahapur'),
(4, 'pappu  Storages', 3, 10000, 'cold storage1.jfif', 'raichur'),
(5, 'Shri Krishna Ltd', 4, 8000, 'cold storage3.jfif', 'Gangavathi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allout_freezer`
--
ALTER TABLE `allout_freezer`
  ADD PRIMARY KEY (`Allout_id`);

--
-- Indexes for table `former_details`
--
ALTER TABLE `former_details`
  ADD PRIMARY KEY (`Former_id`);

--
-- Indexes for table `former_request`
--
ALTER TABLE `former_request`
  ADD PRIMARY KEY (`Former_req_id`);

--
-- Indexes for table `freezer_details`
--
ALTER TABLE `freezer_details`
  ADD PRIMARY KEY (`Freezer_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `storage_details`
--
ALTER TABLE `storage_details`
  ADD PRIMARY KEY (`Storage_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allout_freezer`
--
ALTER TABLE `allout_freezer`
  MODIFY `Allout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `former_details`
--
ALTER TABLE `former_details`
  MODIFY `Former_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `former_request`
--
ALTER TABLE `former_request`
  MODIFY `Former_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `freezer_details`
--
ALTER TABLE `freezer_details`
  MODIFY `Freezer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `storage_details`
--
ALTER TABLE `storage_details`
  MODIFY `Storage_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
