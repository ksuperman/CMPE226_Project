-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2016 at 08:18 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ONLINESHOPPING`
--

-- --------------------------------------------------------

--
-- Table structure for table `USER_DETAILS`
--

CREATE TABLE `USER_DETAILS` (
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `USER_ID` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `GENDER` char(1) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `CONTACT_NUMBER` int(10) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `SUBSCRIPTION` varchar(3) NOT NULL DEFAULT 'NO',
  `CONTACT_MODE` varchar(5) NOT NULL DEFAULT 'TEXT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USER_DETAILS`
--

INSERT INTO `USER_DETAILS` (`FIRST_NAME`, `LAST_NAME`, `USER_ID`, `EMAIL`, `PASSWORD`, `GENDER`, `ADDRESS`, `CONTACT_NUMBER`, `DATE_OF_BIRTH`, `SUBSCRIPTION`, `CONTACT_MODE`) VALUES
('', '', '', '', '', '', '', 0, '0000-00-00', 'NO', 'TEXT'),
('Pooja', 'Y', 'pooja', 'p@gmail.com', '123', 'F', '123 k pkwy, san jose', 2147483647, '2016-09-01', 'NO', 'TEXT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `USER_DETAILS`
--
ALTER TABLE `USER_DETAILS`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
