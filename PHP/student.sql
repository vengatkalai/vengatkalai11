-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 28, 2022 at 08:32 AM
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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`) VALUES
(1, 'fdsd', 'sdfsd', '84d9cfc2f395ce883a41d7ffc1bbcf4e'),
(2, 'gold', 'king', '84d9cfc2f395ce883a41d7ffc1bbcf4e'),
(3, 'kalaaoi', 'sdf', 'c7b904c76d64eae332d14b7c9afdaff9'),
(4, 'ranjith', 'sharmi@hsdds96*', 'a284df1155ec3e67286080500df36a9a'),
(5, 'ranjith', 'sharmi@hsdds96*', 'a284df1155ec3e67286080500df36a9a'),
(6, 'ranjith', 'sharmi@hsdds96*', 'a284df1155ec3e67286080500df36a9a'),
(7, 'gjjjj', 'jhg', '4e3b63885a0f78a1b471d52750d0cc79'),
(8, 'hg', 'ghjgh', 'ea7d201d1cdd240f3798b2dc51d6adcb'),
(9, 'gggg', 'hketrewf', '121312'),
(10, 'fgg', 'gfds', '7c6cb0a7307ae9023320466392fdabb2'),
(23, 'kalaisee', 'werew', '34454'),
(13, 'gdxffgv', 'xcvxc', 'eec4b18a2119311c994e73e575e2d200'),
(14, 'vxzv', 'zxcvxz', '5fa72358f0b4fb4f2c5d7de8c9a41846'),
(15, 'hdfg', 'dfgfd', 'a8d0555c213aa52d3c968d60cd6731dd'),
(16, 'hdfg', 'dfgfd', '202cb962ac59075b964b07152d234b70'),
(17, 'kalai', 'ka12@gmail.com', '8cc1151e8c561285e6c8c3bb308ecb7d'),
(18, 'hhhh', 'vncv', 'ed21313bf4ae38bf4c6c94e5be43908c'),
(19, 'dsfds', 'sdfsd', '84d9cfc2f395ce883a41d7ffc1bbcf4e'),
(20, 'zsdfzs', 'zsf', 'b9d314a7a591d2c4e9e4f87e5492c32a'),
(21, 'kalai', 'kalai@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(22, 'arivu', 'kala@gmail.com', '12345'),
(25, 'ooor', 'ggg@gm', '13456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
