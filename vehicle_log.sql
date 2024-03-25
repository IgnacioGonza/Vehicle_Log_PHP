-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2018 at 09:10 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehicle_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE IF NOT EXISTS `fuel` (
  `fuel_id` int(12) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(12) NOT NULL,
  `fuel_source` varchar(100) NOT NULL,
  `fuel_gallons` int(12) NOT NULL,
  `fuel_cost` decimal(10,2) NOT NULL,
  `fuel_mileage` decimal(10,1) NOT NULL,
  `fuel_date` datetime NOT NULL,
  `fuel_date_modified` datetime NOT NULL,
  PRIMARY KEY (`fuel_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`fuel_id`, `vehicle_id`, `fuel_source`, `fuel_gallons`, `fuel_cost`, `fuel_mileage`, `fuel_date`, `fuel_date_modified`) VALUES
(1, 1, '7 Eleven - Gas', 20, '2.10', '18.0', '2018-03-04 00:00:00', '2018-04-30 16:41:01'),
(3, 1, 'QuickTrip - Gas', 20, '2.25', '19.0', '0000-00-00 00:00:00', '2018-04-30 16:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `maintenance_id` int(12) NOT NULL AUTO_INCREMENT,
  `maintenance_type_id` int(12) NOT NULL,
  `vehicle_id` int(12) NOT NULL,
  `maintenance_vendor` varchar(100) NOT NULL,
  `maintenance_description` varchar(255) NOT NULL,
  `maintenance_vendor_address` varchar(255) NOT NULL,
  `maintenance_cost` decimal(10,2) NOT NULL,
  `maintenance_mileage` decimal(10,1) NOT NULL,
  `maintenance_date` datetime NOT NULL,
  `maintenance_date_modified` datetime NOT NULL,
  PRIMARY KEY (`maintenance_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`maintenance_id`, `maintenance_type_id`, `vehicle_id`, `maintenance_vendor`, `maintenance_description`, `maintenance_vendor_address`, `maintenance_cost`, `maintenance_mileage`, `maintenance_date`, `maintenance_date_modified`) VALUES
(1, 2, 1, 'Autoparts', 'Complete maintenance', 'Greenville', '200.00', '116000.0', '2018-04-02 00:00:00', '2018-04-30 20:54:11'),
(3, 1, 1, 'Wallmart', 'Oil change', 'Simpsonville', '60.00', '120000.0', '0000-00-00 00:00:00', '2018-04-30 13:04:50'),
(4, 1, 3, 'Wallmart', 'Oil change', 'Piedmont', '40.00', '125000.0', '0000-00-00 00:00:00', '2018-04-30 21:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_type`
--

CREATE TABLE IF NOT EXISTS `maintenance_type` (
  `maintenance_type_id` int(12) NOT NULL AUTO_INCREMENT,
  `maintenance_type` varchar(255) NOT NULL,
  PRIMARY KEY (`maintenance_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `maintenance_type`
--

INSERT INTO `maintenance_type` (`maintenance_type_id`, `maintenance_type`) VALUES
(1, 'Oil change'),
(3, 'Tire change');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(12) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `user_role` varchar(26) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_lastlogin` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_password`, `email`, `user_role`, `date_created`, `date_lastlogin`, `date_modified`) VALUES
(1, 'Tom', 'Smith', 'Pass124', 'SmithT@gmail.com', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-04-30 16:26:14'),
(2, 'Bob', 'Young-180226', '1234Pass', 'YoungB@gmail.com', 'user', '2018-02-25 18:19:18', '0000-00-00 00:00:00', '2018-04-30 16:27:21'),
(3, 'Dylan', 'Collins', 'Pass1234', 'DCollins@gmail.com', 'user', '2018-03-04 14:38:04', '0000-00-00 00:00:00', '2018-04-30 16:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `vehicle_id` int(12) NOT NULL AUTO_INCREMENT,
  `vehicle_type` varchar(100) NOT NULL,
  `vehicle_model` varchar(100) NOT NULL,
  `vehicle_year` int(4) NOT NULL,
  `vehicle_year_purchased` int(4) NOT NULL,
  `vehicle_color` varchar(50) NOT NULL,
  `vehicle_VIN` varchar(30) NOT NULL,
  `vehicle_license_tag` varchar(100) NOT NULL,
  `vehicle_license_state` varchar(50) NOT NULL,
  `vehicle_purchase_price` decimal(10,2) NOT NULL,
  `vehicle_purchase_mileage` decimal(10,1) NOT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `vehicle_type`, `vehicle_model`, `vehicle_year`, `vehicle_year_purchased`, `vehicle_color`, `vehicle_VIN`, `vehicle_license_tag`, `vehicle_license_state`, `vehicle_purchase_price`, `vehicle_purchase_mileage`) VALUES
(1, 'Car', 'Nissan 350z', 2009, 2011, 'White', '18A728HYT89', 'TY3JK1', 'NC', '5000.00', '100000.0'),
(3, 'truck', 'toyota 4runner', 2015, 2016, 'Black', '1234567890', 'ABC-123', 'SC', '12995.00', '123654.9'),
(4, 'car', 'BMW i135', 2007, 2017, 'White', 'TY1289YUIO1', 'ATY803', 'NC', '10000.00', '15000.0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
