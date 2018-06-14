-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 08:53 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(30) NOT NULL,
  `pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pwd`) VALUES
('admin@mycart', 'secretpwd1'),
('admin', 'admin'),
('kunal', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`product_id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `brand_type` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=568 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `product_name`, `city_name`, `product_type`, `brand_type`, `image`, `product_desc`, `cost`) VALUES
(125, 'ceos700d', 'MUMBAI', 'Electronics', 'Canon', 'ceos700d.jpg', 'CANON CAMERA', 12000),
(126, 'ceos800d', 'PUNE', 'Electronics', 'Canon', 'ceos800d.jpg', 'Canon best camera', 15000),
(127, 'ceos1300d', 'MUMBAI', 'Electronics', 'Canon', 'ceos1300d.jpg', 'Canon flagship camera', 15000),
(131, 'nd5500', 'NASHIK', 'Electronics', 'Nikon', 'nd5500.jpg', 'FLAGSHIP PRODUCT', 60000),
(133, 'nd7200', 'NASHIK', 'Electronics', 'Nikon', 'nd7200.jpg', 'Vlogging camera', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE IF NOT EXISTS `mycart` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `brand_type` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`product_id`, `product_name`, `city_name`, `product_type`, `brand_type`, `image`, `product_desc`, `cost`) VALUES
(125, 'ceos700d', 'MUMBAI', 'Electronics', 'brand_type', 'ceos700d.jpg', 'CANON CAMERA', 12000),
(126, 'ceos800d', 'PUNE', 'Electronics', 'brand_type', 'ceos800d.jpg', 'Canon best camera', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
`product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `brand_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=847 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`product_id`, `product_name`, `city_name`, `product_type`, `brand_type`, `image`, `product_desc`, `cost`) VALUES
(10, 'Iphone7', 'Alaska', 'Mobiles', 'Apple', 'iphone7.jpg', 'Ut at ex erat. Donec risus urna, pellentesque eu fringilla et, volutpat ut leo. Integer nec tempus metus, nec luctus eros. Donec eget aliquet ', 75000),
(145, 'Moto G5', 'Mumbai', 'Mobiles', 'Moto', 'galaxys8.jpg', 'Ut at ex erat. Donec risus urna, pellentesque eu fringilla et,', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`) VALUES
('Paul', 'vampire'),
('kunal', '123456'),
('user', 'user'),
('james', 'bond'),
('new', '123456'),
('mrunal', '123456'),
('', ''),
('wtl', 'wtl'),
('admin', 'admin'),
('mru', 'abc'),
('ty', '123'),
('new', 'user'),
('neww', 'ty'),
('', ''),
('abc', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
 ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=568;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=847;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
