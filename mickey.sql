-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2020 at 04:33 PM
-- Server version: 8.0.20
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `gwer_report`
--

CREATE TABLE `gwer_report` (
  `Volume_id` int NOT NULL,
  `Report_id` int NOT NULL,
  `Report_title` varchar(255) NOT NULL,
  `Report_summary` longtext,
  `Report_highlights` longtext,
  `Report_this_issue` longtext,
  `Report_date` varchar(255) DEFAULT NULL,
  `Report_description` longtext,
  `Report_authors` longtext,
  `Report_addition_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Report_modify_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gwer_volume`
--

CREATE TABLE `gwer_volume` (
  `Volume_id` int NOT NULL,
  `Volume_title` varchar(255) NOT NULL,
  `Volume_year` varchar(4) DEFAULT NULL,
  `Volume_description` longtext,
  `Volume_addition_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Volume_modify_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gwer_report`
--
ALTER TABLE `gwer_report`
  ADD PRIMARY KEY (`Report_id`);

--
-- Indexes for table `gwer_volume`
--
ALTER TABLE `gwer_volume`
  ADD PRIMARY KEY (`Volume_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gwer_report`
--
ALTER TABLE `gwer_report`
  MODIFY `Report_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gwer_volume`
--
ALTER TABLE `gwer_volume`
  MODIFY `Volume_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
