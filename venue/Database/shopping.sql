-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 02:58 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE IF NOT EXISTS `admin_master` (
  `AdminId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`AdminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`AdminId`, `UserName`, `Password`, `name`, `contact`, `email`, `address`) VALUES
(1, 'admin', 'admin', 'Ahmad', '123456', 'admin@gmail.com', 'lhr'),
(3, 'Owner01', '123456', 'ali ahmad', '123456', 'ali@gmail.com', 'lahore');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE IF NOT EXISTS `category_master` (
  `CategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(20) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`CategoryId`, `CategoryName`, `Description`, `Image`) VALUES
(8, 'Spacial Food', 'New Venues', 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE IF NOT EXISTS `customer_registration` (
  `CustomerId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` text NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`CustomerId`, `CustomerName`, `Address`, `City`, `Email`, `Mobile`, `Gender`, `BirthDate`, `UserName`, `Password`) VALUES
(2, 'Ahmad01', 'ABCc', 'FSD', 'k@gmail.com', '123456789', 'male', '2017-03-11', 'ahmad', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE IF NOT EXISTS `feedback_master` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` text NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`FeedbackId`, `CustomerId`, `Feedback`, `Date`) VALUES
(8, '11', 'i want to discuss something about this software ', '2020-04-06'),
(9, '11', 'thanks sir for your support ', '2020-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_masterad`
--

CREATE TABLE IF NOT EXISTS `feedback_masterad` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` text NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `feedback_masterad`
--

INSERT INTO `feedback_masterad` (`FeedbackId`, `adminname`, `Feedback`, `Date`) VALUES
(1, 'Ahmad', 'contact us if you need any contact us if you  ', '2014-03-19'),
(12, 'Ahmad', 'you can also contact', '2020-04-06'),
(13, 'Ahmad', 'you can also contact', '2020-04-06'),
(14, 'Ahmad', 'you can also contact', '2020-04-06'),
(15, 'Akbar', 'yes you are right', '2020-04-07'),
(16, 'Akbar', 'yes you are right', '2020-04-07'),
(17, 'Akbar', 'yes you are right', '2020-04-07'),
(18, 'Akbar', 'yes you are right', '2020-04-07'),
(19, 'Akbar', 'yes you are right', '2020-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `item_master`
--

CREATE TABLE IF NOT EXISTS `item_master` (
  `ItemId` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(11) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `soft` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Discount` float NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `item_master`
--

INSERT INTO `item_master` (`ItemId`, `CategoryId`, `ItemName`, `Description`, `Size`, `Image`, `soft`, `Price`, `Discount`, `Total`) VALUES
(1, 8, 'Lahore Venue', 'player', '123', 'a.jpg', '', 123, 23, 100),
(11, 8, 'Karachi Venue', 'aa', '11', 'download.jpg', '123.jpg', 11, 11, 11),
(12, 8, 'Islamabad ', 'lhr', '12', '123.jpg', 'pexels-photo-170811.jpeg', 100, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `offer_master`
--

CREATE TABLE IF NOT EXISTS `offer_master` (
  `OfferId` int(11) NOT NULL AUTO_INCREMENT,
  `Offer` varchar(50) NOT NULL,
  `Detail` varchar(200) NOT NULL,
  `Valid` date NOT NULL,
  PRIMARY KEY (`OfferId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `CartId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Total` int(11) NOT NULL,
  `Price` float NOT NULL,
  `OrderDate` date NOT NULL,
  PRIMARY KEY (`CartId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_final`
--

CREATE TABLE IF NOT EXISTS `shopping_cart_final` (
  `CartId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Total` float NOT NULL,
  `OrderDate` date NOT NULL,
  `Request` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL DEFAULT 'Pending-Request',
  PRIMARY KEY (`CartId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `shopping_cart_final`
--

INSERT INTO `shopping_cart_final` (`CartId`, `CustomerId`, `ItemName`, `Quantity`, `Price`, `Total`, `OrderDate`, `Request`) VALUES
(12, 1, 'Lahore Venue', 1, 100, 100, '0000-00-00', 'Confirm'),
(13, 1, 'Lahore Venue', 1, 100, 100, '0000-00-00', 'Pending-Request'),
(14, 1, 'Lahore Venue', 1, 100, 100, '0000-00-00', 'Pending-Request');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
