-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2022 at 06:05 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalai`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `name`, `phone`, `password`, `dob`) VALUES
(1, 'kalaiee', '95416565d', 'jjjj01111', '2022-11-09'),
(4, 'anusya', '78885411', 'f78a4b44f2a1d65785f3501381849bf7', '2022-11-18'),
(5, 'html8', '  hgyhiop1', 'f78a4b44f2a1d65785f3501381849bf7', '2022-11-02'),
(6, 'edii', '48851', 'f78a4b44f2a1d65785f3501381849bf7', '2019-11-14'),
(7, 'jjjji', '988586551', 'f78a4b44f2a1d65785f3501381849bf7', '2022-11-08'),
(8, 'dsfgsdf', '5521', 'f78a4b44f2a1d65785f3501381849bf7', '2022-11-17'),
(9, 'ws', 'wswsz', 'f78a4b44f2a1d65785f3501381849bf7', '2022-11-16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
