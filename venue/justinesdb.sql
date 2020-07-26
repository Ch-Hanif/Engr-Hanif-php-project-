-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 02:35 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `justinesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE IF NOT EXISTS `amenities` (
  `amen_id` int(100) NOT NULL AUTO_INCREMENT,
  `amen_name` varchar(100) NOT NULL,
  `amen_desp` varchar(100) NOT NULL,
  `amen_image` varchar(100) NOT NULL,
  PRIMARY KEY (`amen_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`amen_id`, `amen_name`, `amen_desp`, `amen_image`) VALUES
(8, 'The Kitchen', 'Spacious and for cooking all types of meals', 'pics/IMG_1566.JPG'),
(9, 'The bathrooms', 'with hot water showers', 'pics/IMG_1576.JPG'),
(10, 'TheBalcony', '                 spacious           dddddd      ', 'pics/20140122_150404.jpg'),
(11, 'TheLounge', '                 ssssssGood                 ', 'pics/IMG_1559.JPG'),
(17, 'sdfsdfsdg', '                 sdfsdfsdsdf', 'pics/family.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `firstname`, `lastname`, `email`, `comment`) VALUES
(1, 'Gina', 'Bulgado', 'gina@yahoo.com', '    gina comment            '),
(2, 'Gina', 'Bulgado', 'gina@yahoo.com', '    gina comment            '),
(3, 'Gina', 'Bulgado', 'gina@yahoo.com', '      fbgfbgbgfbfgbgb          '),
(4, 'Allan', 'Cayateno', 'allan@yahoo.com', '   from allan             '),
(5, 'Allan', 'Cayateno', 'allan@yahoo.com', '   from allan             '),
(6, 'Allan', 'Cayateno', 'allan@yahoo.com', '   from allan             '),
(7, 'Allan', 'Cayateno', 'allan@yahoo.com', '                '),
(8, 'Allan', 'Cayateno', 'allan@yahoo.com', '                '),
(9, 'vel', 'gauma', 'vel@yahoo.com', '                ATEH OKE AHH'),
(10, 'Erick Jason', 'Batuto', 'ejbatuto@hotmail.com', 'Extra bed for 2'),
(11, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                '),
(12, 'HATCH', 'VILLANUEVA', 'hatchvillanueva16@gmail.com', '                '),
(13, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                '),
(14, 'Erick Jason', 'Batuto', 'ejbatuto@hotmail.com', '                '),
(15, 'sdfsdfsd', 'dsfds', 'sddf', '                '),
(16, 'Kevi', 'Gargar', 'fg', '                '),
(17, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                '),
(18, 'Jesyl', 'Gozon', 'jhasyl@yahoo.com', '                '),
(19, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                '),
(20, 'steve', 'flores', 'kevinflores_23@yahoo.com', '                '),
(21, 'aaa', 'aaa', '123@123.com', '                please submit it '),
(22, 'aaa', 'aaa', '123@123.com', '                i need this one');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `guest_id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`guest_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `lastname`, `country`, `city`, `address`, `zip`, `phone`, `email`, `password`) VALUES
(40, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '123', '123', '123@123.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `ozekimessagein`
--

CREATE TABLE IF NOT EXISTS `ozekimessagein` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT '+254714812921',
  `msg` varchar(160) DEFAULT NULL,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT NULL,
  `operator` varchar(100) DEFAULT NULL,
  `msgtype` varchar(160) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ozekimessagein`
--

INSERT INTO `ozekimessagein` (`id`, `sender`, `receiver`, `msg`, `senttime`, `receivedtime`, `operator`, `msgtype`, `reference`) VALUES
(1, '3D0B93C2F4F8FDD6', '+254714812921', 'ozeki message server trial - www.ozeki.hu', '2012-03-29 09:54:40', '2012-03-29 09:54:36', 'Safaricom', 'SMS:TEXT', '7394143'),
(2, '3D0B93C2F4F8FDD6', '+254714812921', 'Sorry,your account balance is not sufficient to complete this request.Please top up and try again.', '2012-03-29 09:54:58', '2012-03-29 09:54:54', 'Safaricom', 'SMS:TEXT', '7916704'),
(3, '3D0B93C2F4F8FDD6', '+254714812921', 'Sorry,your account balance is not sufficient to complete this request.Please top up and try again.', '2012-03-29 09:54:45', '2012-03-29 09:54:57', 'Safaricom', 'SMS:TEXT', '4474671'),
(4, '3D0B93C2F4F8FDD6', '+254714812921', 'ozeki message server trial - www.ozeki.hu', '2012-03-29 09:55:12', '2012-03-29 09:55:10', 'Safaricom', 'SMS:TEXT', '8415351');

-- --------------------------------------------------------

--
-- Table structure for table `ozekimessageout`
--

CREATE TABLE IF NOT EXISTS `ozekimessageout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) DEFAULT '+254714812921',
  `receiver` varchar(30) DEFAULT NULL,
  `msg` varchar(160) DEFAULT NULL,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'send',
  `msgtype` varchar(160) DEFAULT 'SMS:TEXT',
  `operator` varchar(100) DEFAULT 'Safaricom',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `ozekimessageout`
--

INSERT INTO `ozekimessageout` (`id`, `sender`, `receiver`, `msg`, `senttime`, `receivedtime`, `reference`, `status`, `msgtype`, `operator`) VALUES
(1, '+254714812921', '+254726667000', 'Thank You Jacob for making your reservation\n You are expected to pay sum of KES 300 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(2, '+254714812921', '+254726667000', 'Thank You Jacob for making your reservation\n You are expected to pay sum of KES 200 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(3, '+254714812921', '+254726667000', 'Thank You Jacob for making your reservation\n You are expected to pay sum of KES 300 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(4, '+254714812921', '+254720108418', 'Thank You juma for making your reservation\n You are expected to pay sum of KES 100 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(5, '+254714812921', '+254726667000', 'Thank You peterson  for making your reservation\n You are expected to pay sum of KES 400 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(6, '+254714812921', '+254712345678', 'Thank You Juma for making your reservation\n You are expected to pay sum of KES 1200 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(7, '+254714812921', '+254712345678', 'Thank You Juma for making your reservation\n You are expected to pay sum of KES 200 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(8, '+254714812921', '+254724789345', 'Thank You Njagi for making your reservation\n You are expected to pay sum of KES 300 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(9, '+254714812921', '+254712345678', 'Thank You Njagi for making your reservation\n You are expected to pay sum of KES 2200 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(10, '+254714812921', '+254724789345', 'Thank You Njagi for making your reservation\n You are expected to pay sum of KES 1500 for confirmation of reservation}', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(11, '+254714812921', '+254714812921', 'Thank You Simon  for making your reservation\n You are expected to pay sum of KES 600 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(12, '+254714812921', '+25471567892', 'Thank You Simon  for making your reservation\n You are expected to pay sum of KES 300 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(13, '+254714812921', '+254729475691', 'Thank You Peter for making your reservation\n You are expected to pay sum of KES 400 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(14, '+254714812921', '+254729475691', 'Thank You Peter for making your reservation\n You are expected to pay sum of KES 200 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(15, '+254714812921', '+254720108481', 'Thank You Felix for making your reservation\n You are expected to pay sum of KES 2100 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(16, '+254714812921', '+254727389289', 'Thank You Thuo for making your reservation\n You are expected to pay sum of KES 2200 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(17, '+254714812921', '+254729475691', 'Thank You Peter for making your reservation\n You are expected to pay sum of KES 2100 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(18, '+254714812921', '+254729475691', 'Thank You Peter for making your reservation\n You are expected to pay sum of KES 600 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(19, '+254714812921', '+254723455489', 'Thank You Israel for making your reservation\n You are expected to pay sum of KES 1800 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(20, '+254714812921', '+254729475691', 'Thank You Peter for making your reservation\n You are expected to pay sum of KES 1200 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(21, '+254714812921', '+254734567890', 'Thank You Jerop for making your reservation\n You are expected to pay sum of KES 2100 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(22, '+254714812921', '+254721241288', 'Thank You obote for making your reservation\n You are expected to pay sum of KES 1400 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(23, '+254714812921', '+254734567892', 'Thank You victor for making your reservation\n You are expected to pay sum of KES 1200 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(24, '+254714812921', '+254720108481', 'Thank You Felix for making your reservation\n You are expected to pay sum of KES 600 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(25, '+254714812921', '+254932898932', 'Thank You ken7832 for making your reservation\n You are expected to pay sum of KES 200 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(26, '+254714812921', '+254932898932', 'Thank You ken7832 for making your reservation\n You are expected to pay sum of KES 300 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(27, '+254714812921', '+254789123432', 'Thank You Wengi for making your reservation\n You are expected to pay sum of KES 1800 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(28, '+254714812921', '+254726667000', 'Thank You Jacob for making your reservation\n You are expected to pay sum of KES 100 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(29, '+254714812921', '+254714812921', 'Thank You simon for making your reservation\n You are expected to pay sum of KES 8400 for confirmation of reservation', NULL, NULL, NULL, 'sent', 'SMS:TEXT', 'Safaricom'),
(30, '+254714812921', '+254714812921', 'Thank You Simon for making your reservation\n You are expected to pay sum of KES 8000 for confirmation of reservation', NULL, NULL, NULL, 'send', 'SMS:TEXT', 'Safaricom'),
(31, '+254714812921', '+254714812234', 'Thank You Jacob for making your reservation\n You are expected to pay sum of KES 8400 for confirmation of reservation', NULL, NULL, NULL, 'send', 'SMS:TEXT', 'Safaricom'),
(32, '+254714812921', '+254720108418', 'Thank You Juma for making your reservation\n You are expected to pay sum of KES 24500 for confirmation of reservation', NULL, NULL, NULL, 'send', 'SMS:TEXT', 'Safaricom'),
(33, '+254714812921', '+254729475691', 'Thank You Peterson for making your reservation\n You are expected to pay sum of KES 27300 for confirmation of reservation', NULL, NULL, NULL, 'send', 'SMS:TEXT', 'Safaricom'),
(34, '+254714812921', '+254324324324', 'Thank You HATCH for making your reservation\n You are expected to pay sum of KES 0 for confirmation of reservation', NULL, NULL, NULL, 'send', 'SMS:TEXT', 'Safaricom'),
(35, '+254714812921', '+2543234234', 'Thank You HATCH for making your reservation\n You are expected to pay sum of KES 1500 for confirmation of reservation', NULL, NULL, NULL, 'send', 'SMS:TEXT', 'Safaricom'),
(36, '+254714812921', '+254323234234', 'Thank You HATCH for making your reservation\n You are expected to pay sum of KES 1500 for confirmation of reservation', NULL, NULL, NULL, 'send', 'SMS:TEXT', 'Safaricom');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `roomNo` int(50) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `adults` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `payable` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `booked` date NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `roomNo`, `guest_id`, `arrival`, `departure`, `adults`, `child`, `payable`, `status`, `booked`, `confirmation`) VALUES
(22, 3, 40, '2020-04-04', '2020-04-05', 1, 0, 1800, 'pending', '0000-00-00', 'y4xcdspj'),
(21, 2, 40, '2020-04-03', '2020-04-04', 1, 0, 1500, 'Confirmed', '0000-00-00', 'cefvmxhx');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `roomNo` int(50) NOT NULL AUTO_INCREMENT,
  `typeID` int(50) NOT NULL,
  `roomName` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Children` int(10) NOT NULL,
  `roomImage` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`roomNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomNo`, `typeID`, `roomName`, `price`, `Adults`, `Children`, `roomImage`) VALUES
(2, 83, 'Lion', '1500', 4, 1, 'rooms/del1.jpg'),
(3, 82, 'apartment', '1800', 4, 2, 'rooms/Stan1.JPG'),
(5, 83, 'Zion', '1750', 2, 1, 'rooms/102_4648.jpg'),
(8, 83, 'jason roomss', '1300', 1, 1, 'rooms/dsc03102.jpg'),
(9, 83, 'sdfjsdfndsfkj', '2300', 2, 1, 'rooms/DSC08665.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE IF NOT EXISTS `roomtype` (
  `typeID` int(50) NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) NOT NULL,
  `Desp` text NOT NULL,
  PRIMARY KEY (`typeID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`typeID`, `typename`, `Desp`) VALUES
(82, 'Deluxe', 'The place fo nobles'),
(83, 'Luxury Suite', 'The place of Comfort and Restasdasdasdasdjasndkjasndkjasndkjasnkjasnkdasndkjnsadkjs das dasd asdoas duashd saud isad usad iuashd iashdiu ashi sadiu sauhd'),
(92, 'ererer', 'ererer');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE IF NOT EXISTS `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  PRIMARY KEY (`ACCOUNT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`) VALUES
(3, 'Joken Villanueva', 'joken@yahoo.com', 'password', 'Administrator'),
(4, 'Ahmadd', 'hatchvillanueva16@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Administrator');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
