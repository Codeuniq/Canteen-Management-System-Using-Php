-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 12, 2020 at 01:38 PM
-- Server version: 5.7.28
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `Item_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Name` varchar(50) NOT NULL,
  `Item_Price` float(10,2) NOT NULL,
  `Item_Stock` int(11) NOT NULL,
  PRIMARY KEY (`Item_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Item_Id`, `Item_Name`, `Item_Price`, `Item_Stock`) VALUES
(1, 'Tea', 8.00, 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Order_Id` varchar(50) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Time` varchar(30) NOT NULL,
  `User_Id` varchar(30) NOT NULL,
  `Item_Name` varchar(30) NOT NULL,
  `Item_Price` float(10,2) NOT NULL,
  `Item_Count` int(11) NOT NULL,
  `Total` float(10,2) NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT 'Processing',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `noti_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Id` varchar(30) NOT NULL,
  `Notification` varchar(500) NOT NULL,
  PRIMARY KEY (`noti_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_Id` varchar(30) NOT NULL,
  `User_Id` varchar(30) NOT NULL,
  `trans_Date` varchar(30) NOT NULL,
  `trans_Time` varchar(30) NOT NULL,
  `Details` varchar(150) NOT NULL,
  `Amount` float(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_Id` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Dob` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Wallet` float(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `First_Name`, `Last_Name`, `Dob`, `Password`, `Phone`, `Mail`, `Wallet`) VALUES
('Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 0.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
