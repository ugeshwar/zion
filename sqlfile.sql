-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2018 at 01:06 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `mnumber` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `education` varchar(15) NOT NULL,
  `percentage` bigint(11) NOT NULL,
  `yop` year(4) NOT NULL,
  `exp` bigint(11) NOT NULL,
  `ps` varchar(300) DEFAULT NULL,
  `ss` varchar(300) DEFAULT NULL,
  `cctc` bigint(11) NOT NULL,
  `ectc` bigint(11) NOT NULL,
  `rfc` varchar(300) DEFAULT NULL,
  `np` bigint(11) NOT NULL,
  `nperiod` varchar(10) NOT NULL,
  `offers` varchar(100) DEFAULT NULL,
  `cl` varchar(50) NOT NULL,
  `pl` varchar(50) NOT NULL,
  `appc` varchar(15) NOT NULL,
  `aadhar` bigint(20) DEFAULT NULL,
  `pan` varchar(15) DEFAULT NULL,
  `passport` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `dob`, `gender`, `mnumber`, `email`, `password`, `education`, `percentage`, `yop`, `exp`, `ps`, `ss`, `cctc`, `ectc`, `rfc`, `np`, `nperiod`, `offers`, `cl`, `pl`, `appc`, `aadhar`, `pan`, `passport`) VALUES
('Kishor', 'Kumar', '1998-04-20', 'male', '91-9585-09-4799', 'kishortheboss98@gmail.com', 'Kishor98', 'ug', 79, 2019, 5, 'C\r\nC++\r\nJava\r\nHTML\r\nCSS\r\nPHP', 'iusdiufiush', 300000, 500000, 'Increment', 150, 'yes', 'yes', 'chennai', 'Bangalore', 'aadhar', 124356123651, '', ''),
('Ugeshwar', 'S S', '1997-12-01', 'male', '91-8072-16-9839', 'somalingaugeshwar@gmail.com', 'Supersaiyan4', 'ug', 79, 2019, 4, 'Android Development\r\nWeb Development\r\nAnimation', 'Volley Ball', 300000, 500000, 'Increment', 150, 'yes', 'Yes', 'Chennai', 'Banglore', 'aadhar', 123456781234, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
