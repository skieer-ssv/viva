-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 03:18 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viva_ques`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipaddr`
--

CREATE TABLE `ipaddr` (
  `sr` int NOT NULL,
  `ip` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ipaddr`
--

INSERT INTO `ipaddr` (`sr`, `ip`, `time`) VALUES
(1, '::1', '2021-05-09 13:36:20'),
(2, '::1', '2021-05-09 13:39:02'),
(3, '::1', '2021-05-09 13:43:13'),
(4, '::1', '2021-05-10 13:07:40'),
(5, '::1', '2021-05-10 13:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `sr` int NOT NULL,
  `question` varchar(300) COLLATE utf8_bin NOT NULL,
  `subject` varchar(30) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`sr`, `question`, `subject`, `time`) VALUES
(3, 'hello', 'dwm', '2021-05-17 05:36:40'),
(4, 'yoyo', 'dwm', '2021-05-17 05:42:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipaddr`
--
ALTER TABLE `ipaddr`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipaddr`
--
ALTER TABLE `ipaddr`
  MODIFY `sr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `sr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
