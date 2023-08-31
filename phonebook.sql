-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2019 at 08:12 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE IF NOT EXISTS `contactdetails` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `contact_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`contact_id`, `contact_name`, `designation`, `phone`, `address`) VALUES
(29, 'edit', '', 2147483647, ''),
(27, 'edit', '', 2147483647, ''),
(28, 'edit', '', 2147483647, ''),
(21, 'edit', 'Doctor', 2147483647, 'yy'),
(23, 'edit', '', 2147483647, ''),
(24, 'edit', '', 2147483647, ''),
(26, 'edit', '', 2147483647, ''),
(30, 'edit', '', 2147483647, ''),
(31, 'edit', '', 2147483647, ''),
(33, 'edit', '', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`contact_id`, `name`, `username`, `email`, `password`) VALUES
(1, 'edit', 'KKK', 'bakhtiarwazir@gmail.com', 'dd'),
(2, 'edit', 'KKK', 'bakhtiarwazir@gmail.com', 'dd'),
(3, 'kafeel  wazir', 'khan', 'bakhtiarwazir@gmail.com', 'asd'),
(4, 'masroor wazir', 'kafeel', 'mass@gmail.com', 'as'),
(5, 'noor', 'khan', 'bakhtiar.wazir1@gmail.com', '123'),
(6, 'edit', 'kafeel', 'bakhtiar.wazir1@gmail.com', 'as'),
(7, '', '', '', ''),
(8, 'kafeel', 'kafeel', 'bakhtiar.wazir1@gmail.com', '125');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
