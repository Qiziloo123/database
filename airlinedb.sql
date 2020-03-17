-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 04:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlinedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines_tb`
--

CREATE TABLE `airlines_tb` (
  `Cate_ID` int(11) NOT NULL,
  `Airline_ID` int(11) NOT NULL,
  `Airline_Name` varchar(50) NOT NULL,
  `Airline_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airlines_tb`
--

INSERT INTO `airlines_tb` (`Cate_ID`, `Airline_ID`, `Airline_Name`, `Airline_image`) VALUES
(0, 0, 'american airlines', 'american airline picture1'),
(0, 1, 'British airlines', 'B_airline_picture1'),
(0, 2, 'Qatar Airlines', 'qatar airlines image'),
(0, 3, 'Philippine Airlines', 'Philippine Airlines image');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cate_ID` int(11) NOT NULL,
  `Cate_Name` varchar(50) NOT NULL,
  `Pictures` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cate_ID`, `Cate_Name`, `Pictures`) VALUES
(0, 'international', 'international airlines pictures'),
(1, 'Budget', 'picture1'),
(2, 'Premium', 'premium_picture'),
(3, 'Regional', 'regional_flight_picture');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_tb`
--

CREATE TABLE `reviews_tb` (
  `Reviews_ID` int(50) NOT NULL,
  `Airline_ID` int(50) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Customer_email` varchar(50) NOT NULL,
  `Cate_Name` varchar(50) NOT NULL,
  `Review1` text NOT NULL,
  `Review2` text NOT NULL,
  `Review3` text NOT NULL,
  `Review4` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews_tb`
--

INSERT INTO `reviews_tb` (`Reviews_ID`, `Airline_ID`, `Customer_Name`, `Customer_email`, `Cate_Name`, `Review1`, `Review2`, `Review3`, `Review4`, `Description`) VALUES
(1, 0, 'shoaib khan', 'shaoib.hunzai14@gmail.com', 'international', '3', '4', '5', '5', 'nice experience'),
(3, 0, '', '', '', '73', '83', '89', '98', ''),
(4, 0, '', '', '', '72', '92', '90', '85', ''),
(5, 0, '', '', '', '70', '85', '94', '100', ''),
(6, 0, '', '', '', '71', '84', '94', '100', ''),
(7, 0, '', '', '', '70', '85', '94', '100', ''),
(8, 0, '', '', '', '65', '79', '89', '100', ''),
(9, 0, '', '', '', '73', '83', '89', '98', ''),
(10, 0, '', '', '', '73', '83', '89', '98', ''),
(11, 0, '', '', '', '73', '83', '89', '98', ''),
(12, 0, '', '', '', '73', '83', '89', '98', ''),
(13, 0, '', '', '', '67', '83', '28', '32', ''),
(14, 0, '', '', '', '67', '83', '28', '32', ''),
(15, 0, '', '', '', '65', '79', '89', '100', ''),
(16, 0, '', '', '', '65', '79', '89', '100', ''),
(17, 0, '', '', '', '67', '83', '28', '32', 'negotiable'),
(18, 0, '', '', '', '67', '83', '28', '32', 'negotiable'),
(19, 0, '', '', '', '67', '83', '28', '32', 'negotiable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines_tb`
--
ALTER TABLE `airlines_tb`
  ADD PRIMARY KEY (`Airline_ID`),
  ADD KEY `Cate_ID` (`Cate_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cate_ID`);

--
-- Indexes for table `reviews_tb`
--
ALTER TABLE `reviews_tb`
  ADD PRIMARY KEY (`Reviews_ID`),
  ADD KEY `Airline_ID` (`Airline_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews_tb`
--
ALTER TABLE `reviews_tb`
  MODIFY `Reviews_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `airlines_tb`
--
ALTER TABLE `airlines_tb`
  ADD CONSTRAINT `airlines_tb_ibfk_1` FOREIGN KEY (`Cate_ID`) REFERENCES `category` (`Cate_ID`);

--
-- Constraints for table `reviews_tb`
--
ALTER TABLE `reviews_tb`
  ADD CONSTRAINT `reviews_tb_ibfk_1` FOREIGN KEY (`Airline_ID`) REFERENCES `airlines_tb` (`Airline_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
