-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 07:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `task_id` int(11) NOT NULL,
  `task_sku` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `task_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `difficulty` tinyint(4) NOT NULL,
  `preference` tinyint(4) NOT NULL,
  `category` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_range` int(11) NOT NULL,
  `priority` tinyint(4) NOT NULL,
  `task_complete` tinyint(1) NOT NULL,
  `todo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_list`
--

INSERT INTO `task_list` (`task_id`, `task_sku`, `task_name`, `difficulty`, `preference`, `category`, `location`, `time_range`, `priority`, `task_complete`, `todo`) VALUES
(1, 'wipe_surfaces', 'Wipe Surfaces', 1, 1, 'Cleaning', 'Kitchen', 60, 5, 0, 0),
(2, 'dusting', 'Dusting', 1, 5, 'Cleaning', 'Everywhere', 600, 5, 0, 0),
(3, 'vacuum', 'Vacuum', 2, 3, 'Cleaning', 'Everywhere', 600, 3, 0, 0),
(4, 'mop_floor', 'Mop Floor', 5, 5, 'Cleaning', 'Kitchen, Bathroom, Hallway', 1200, 1, 0, 0),
(5, 'make_bed', 'Make Bed', 1, 1, 'Cleaning', 'Bedroom', 10, 1, 0, 0),
(6, 'water_plants', 'Water Plants', 1, 1, 'Maintenance', 'Everywhere', 30, 2, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task_list`
--
ALTER TABLE `task_list`
  ADD UNIQUE KEY `task_id` (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
