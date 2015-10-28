-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2015 at 06:38 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mapit`
--

-- --------------------------------------------------------

--
-- Table structure for table `maped`
--
CREATE TABLE IF NOT EXISTS `Users` (
  `UID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Fuid` varchar(100) NOT NULL,
  `Ffname` varchar(60) NOT NULL,
  `Femail` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`UID`)
);

CREATE TABLE IF NOT EXISTS `maped` (
  `userid` int(11) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maped`
--

INSERT INTO `maped` (`userid`, `lat`, `lon`, `date`) VALUES
(1, '', '', '2015-10-30'),
(1, '51.4895', '-0.0481', '2015-10-30'),
(1, '51.5087', '-0.0906', '2015-10-30'),
(1, '51.4681', '0.0350', '2015-10-30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
