-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 27, 2025 at 08:07 PM
-- Server version: 8.3.0
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_details`
--

DROP TABLE IF EXISTS `department_details`;
CREATE TABLE IF NOT EXISTS `department_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programme_details`
--

DROP TABLE IF EXISTS `programme_details`;
CREATE TABLE IF NOT EXISTS `programme_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `code` varchar(50) NOT NULL,
  `no_of_sem` int NOT NULL,
  `graduation_level` varchar(50) NOT NULL,
  `technical_level` varchar(50) NOT NULL,
  `department_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `programme_details`
--

INSERT INTO `programme_details` (`id`, `title`, `code`, `no_of_sem`, `graduation_level`, `technical_level`, `department_id`) VALUES
(1, 'Test department', 'Test Code', 0, '', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
