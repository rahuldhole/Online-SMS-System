-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2014 at 05:20 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itsms`
--
CREATE DATABASE IF NOT EXISTS `itsms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `itsms`;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('kismat', '7'),
('kismat1', '7');

-- --------------------------------------------------------

--
-- Table structure for table `fy`
--

CREATE TABLE IF NOT EXISTS `fy` (
  `rollno` int(3) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `smobile` bigint(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pmobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syit`
--

CREATE TABLE IF NOT EXISTS `syit` (
  `rollno` int(3) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `smobile` bigint(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pmobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tyit`
--

CREATE TABLE IF NOT EXISTS `tyit` (
  `rollno` int(3) NOT NULL COMMENT 'Vishal Undre',
  `regno` varchar(10) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `smobile` bigint(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pmobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `auth` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `name`, `mail`, `auth`) VALUES
('rahuldhole', '7', 'Rahul Dhole', 'rdhole95@gmail.com', 'b'),
('rahuldhole1', '7', 'Rahul Dhole1', 'dholerahul@sggs.ac.in', 's'),
('rahuldhole0', '7', 'Rahul Dhole', 'rah@gmail.com', 'u');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
