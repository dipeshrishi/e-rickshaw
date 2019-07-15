-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2018 at 05:14 AM
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
-- Database: `rickshaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `q1front` int(11) NOT NULL,
  `q2front` int(11) NOT NULL,
  `q1end` int(11) NOT NULL,
  `q2end` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`q1front`, `q2front`, `q1end`, `q2end`, `number`) VALUES
(1, 8, 5, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `q1`
--

DROP TABLE IF EXISTS `q1`;
CREATE TABLE IF NOT EXISTS `q1` (
  `s_no` int(11) NOT NULL,
  `r_no` int(11) NOT NULL,
  PRIMARY KEY (`r_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q1`
--

INSERT INTO `q1` (`s_no`, `r_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `q2`
--

DROP TABLE IF EXISTS `q2`;
CREATE TABLE IF NOT EXISTS `q2` (
  `s_no` int(11) NOT NULL,
  `r_no` int(11) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q2`
--

INSERT INTO `q2` (`s_no`, `r_no`) VALUES
(1, 6),
(2, 7),
(3, 8),
(4, 9),
(5, 10),
(6, 6),
(9, 9),
(8, 8),
(7, 7),
(10, 10),
(11, 6),
(12, 7);

-- --------------------------------------------------------

--
-- Table structure for table `rickshaw`
--

DROP TABLE IF EXISTS `rickshaw`;
CREATE TABLE IF NOT EXISTS `rickshaw` (
  `no` int(3) NOT NULL,
  `name` varchar(40) NOT NULL,
  `contact_no` varchar(14) NOT NULL,
  `status` varchar(7) NOT NULL DEFAULT 'F',
  `c_pt.` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rickshaw`
--

INSERT INTO `rickshaw` (`no`, `name`, `contact_no`, `status`, `c_pt.`) VALUES
(1, 'dipesh', '+918284990439', 'F', 1),
(2, 'hey', '+918284990439', 'F', 1),
(3, 'rishi', '+918284990439', 'F', 1),
(4, 'hello', '+918284990439', 'F', 1),
(5, 'walia', '+918284990439', 'F', 1),
(6, 'singla', '+918284990439', 'F', 1),
(7, 'hell', '+918284990439', 'F', 1),
(8, 'yo', '+918284990439', 'F', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
