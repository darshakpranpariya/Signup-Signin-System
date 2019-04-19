-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2019 at 08:59 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppractice`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first`, `last`, `email`, `username`, `password`) VALUES
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('0', '0', '0', '0', '0'),
('darshak', 'ranpariya', 'thiren@gmail.com', 'darshak', 'ddddd'),
('darshak', 'ranpariya', 'thiren@gmail.com', 'darshak', 'ddddd'),
('thiren', 'godhani', 'thiren@gmail.com', 'thiren', 'thiren');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
