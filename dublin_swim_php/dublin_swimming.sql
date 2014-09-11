-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2014 at 10:48 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dublin_swimming`
--
CREATE DATABASE IF NOT EXISTS `dublin_swimming` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dublin_swimming`;

-- --------------------------------------------------------

--
-- Table structure for table `bather_test`
--

CREATE TABLE IF NOT EXISTS `bather_test` (
  `Site` varchar(10) NOT NULL,
  `Side` varchar(10) NOT NULL,
  `BestTransport` varchar(12) NOT NULL,
  `BestSwimming` varchar(15) NOT NULL,
  PRIMARY KEY (`Site`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bather_test`
--

INSERT INTO `bather_test` (`Site`, `Side`, `BestTransport`, `BestSwimming`) VALUES
('Forty Foot', 'Southside', 'DART', 'High & Low Tide'),
('Portmarnoc', 'Northside', 'Bus', 'High Tide'),
('Seapoint', 'Southside', 'DART', 'High Tide'),
('Springers', 'Northside', 'Train & Bus', 'High Tide'),
('Vico Road', 'Southside', 'DART', 'High & Low Tide');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
