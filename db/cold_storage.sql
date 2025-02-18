-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 12:33 PM
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
  `Quantity` text NOT NULL,
  `Allout_start_date` date NOT NULL,
  `Allout_end_date` date NOT NULL,
  `Allouted_date` date NOT NULL,
  `Allouted_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `former_details`
--

CREATE TABLE `former_details` (
  `Former_id` int(11) NOT NULL,
  `Former_name` varchar(20) NOT NULL,
  `Former_code` int(11) NOT NULL,
  `address` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Contact` text NOT NULL,
  `Email-id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `former_request`
--

CREATE TABLE `former_request` (
  `Former_id` int(11) NOT NULL,
  `Storage_id` int(11) NOT NULL,
  `Item_id` int(11) NOT NULL,
  `Request_date` date NOT NULL,
  `request_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freezer_details`
--

CREATE TABLE `freezer_details` (
  `Storage_details_id` int(11) NOT NULL,
  `Freezer_no` int(11) NOT NULL,
  `Capacity` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `storage_details`
--

CREATE TABLE `storage_details` (
  `Storage_details_id` int(11) NOT NULL,
  `Storage_name` varchar(20) NOT NULL,
  `Storage_no` int(11) NOT NULL,
  `Storage_capacity` bigint(20) NOT NULL,
  `Images` int(11) NOT NULL,
  `Location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allout_freezer`
--
ALTER TABLE `allout_freezer`
  ADD PRIMARY KEY (`Allout_id`,`Freezer_id`,`Former_id`,`Item_id`);

--
-- Indexes for table `former_details`
--
ALTER TABLE `former_details`
  ADD PRIMARY KEY (`Former_id`);

--
-- Indexes for table `former_request`
--
ALTER TABLE `former_request`
  ADD PRIMARY KEY (`Former_id`,`Storage_id`,`Item_id`);

--
-- Indexes for table `freezer_details`
--
ALTER TABLE `freezer_details`
  ADD PRIMARY KEY (`Storage_details_id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
