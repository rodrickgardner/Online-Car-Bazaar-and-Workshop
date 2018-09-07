-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2014 at 11:17 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_detail`
--

CREATE TABLE `car_detail` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `size` varchar(20) NOT NULL,
  `number` int(10) NOT NULL,
  `cost` int(100) NOT NULL,
  `car_Code` varchar(30) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `condition` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `car_detail`
--

INSERT INTO `car_detail` (`id`, `name`, `Description`, `color`, `size`, `number`, `cost`, `car_Code`, `Brand`, `photo`, `condition`) VALUES
(2, 'Mercedez E200', 'Sleek and pocket friendly', 'Silver', '4 Seater', 3, 1000000, 'Product 1', 'Mercedez', 'themes/images/ladies/2.jpg', ''),
(3, 'Limo', 'Limousine', 'red', '6 seater', 2, 1200000, 'Product 3', 'Mercedez', 'themes/images/ladies/3.jpg', ''),
(13, 'Veyron', 'black colored two seater car', 'Black', '2 Seater', 1, 50000000, 'B7', 'Bugatti', 'themes/images/bbbb.png', ''),
(14, 'Corrola', 'Smart and comfortable', 'dark blue ', '4 seater', 5, 2000000, 'T1', 'Toyota', 'themes/images/open.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `material_t`
--

CREATE TABLE `material_t` (
  `id` int(10) NOT NULL auto_increment,
  `sub_total` int(100) NOT NULL,
  `eco_tax` int(100) NOT NULL,
  `VAT` int(100) NOT NULL,
  `payable` int(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `material_t`
--

INSERT INTO `material_t` (`id`, `sub_total`, `eco_tax`, `VAT`, `payable`, `session`) VALUES
(1, 6000000, 120000, 1050000, 7170000, '025f524a4c5803c3fc60d98264770099'),
(2, 1200000, 24000, 210000, 1434000, '17e2bcb8a35475b95d328a4d57176872'),
(3, 1600, 32, 280, 1912, 'b1eafeb060e2c160b7ce63a7b68f17c7'),
(4, 800, 16, 140, 956, 'be1f3c17e9c923e2889ee7af0c04b1e1'),
(5, 200, 4, 35, 239, 'df3e489ec19d35f1851d3ac34054ad5e'),
(6, 5000000, 100000, 875000, 5975000, 'c3f0728ec81da41a2943ca6732935421');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `payable` int(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `modeofpay` varchar(100) NOT NULL,
  `qnty` int(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `Fname`, `Sname`, `email`, `session`, `phone`, `city`, `country`, `payable`, `product_id`, `comments`, `modeofpay`, `qnty`, `state`) VALUES
(5, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'b1eafeb060e2c160b7ce63a7b68f17c7', '254721309140', 'Afghanistan', 'Afghanistan', 1434000, '2', 'Please tell me wen you can deliver', 'M-PESA', 1, ''),
(6, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'b1eafeb060e2c160b7ce63a7b68f17c7', '254721309140', 'Afghanistan', 'Afghanistan', 1195000, '2', 'Her', 'M-PESA', 1, ''),
(7, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'b1eafeb060e2c160b7ce63a7b68f17c7', '254721309140', 'Afghanistan', 'Afghanistan', 5000, 'S15', 'Kenya', 'M-PESA', 1, ''),
(8, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'b1eafeb060e2c160b7ce63a7b68f17c7', '254721309140', 'Afghanistan', 'Afghanistan', 1912, '1', 'Good', 'M-PESA', 8, ''),
(9, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'b1eafeb060e2c160b7ce63a7b68f17c7', '254721309140', 'Afghanistan', 'Afghanistan', 250, 'S16', 'hh', 'M-PESA', 1, ''),
(10, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'be1f3c17e9c923e2889ee7af0c04b1e1', '254721309140', 'Afghanistan', 'Afghanistan', 5000, 'S15', 'Kenya', 'M-PESA', 1, ''),
(11, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'be1f3c17e9c923e2889ee7af0c04b1e1', '254721309140', 'Afghanistan', 'Afghanistan', 7170000, '2', 'Dedan', 'M-PESA', 6, ''),
(12, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'be1f3c17e9c923e2889ee7af0c04b1e1', '254721309140', 'Afghanistan', 'Afghanistan', 167300, '9', 'Yes', 'M-PESA', 1, ''),
(13, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'be1f3c17e9c923e2889ee7af0c04b1e1', '254721309140', 'Afghanistan', 'Afghanistan', 5000, 'S15', 'I want done', 'M-PESA', 1, ''),
(14, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'df3e489ec19d35f1851d3ac34054ad5e', '254721309140', 'Afghanistan', 'Afghanistan', 1434000, '', 'Yes', 'M-PESA', 0, ''),
(15, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'df3e489ec19d35f1851d3ac34054ad5e', '254721309140', 'Afghanistan', 'Afghanistan', 1434000, '3', 'Yes', 'M-PESA', 1, ''),
(16, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'df3e489ec19d35f1851d3ac34054ad5e', '254721309140', 'Afghanistan', 'Afghanistan', 250, 'S16', 'Tommorow', 'M-PESA', 1, ''),
(17, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'df3e489ec19d35f1851d3ac34054ad5e', '254721309140', 'Afghanistan', 'Afghanistan', 1434000, '', 'Home', 'M-PESA', 0, ''),
(18, 'Mamba', 'Mamba', 'R.', 'mamba.dedan@gmail.com', 'c3f0728ec81da41a2943ca6732935421', '254721309140', 'Afghanistan', 'Afghanistan', 59750000, '13', 'Good deal', 'M-PESA', 1, ''),
(19, 'Rodick', 'Mamba', 'R.', 'rodrick@gmail.com', 'c3f0728ec81da41a2943ca6732935421', '254721309140', 'Kisumu', 'Kenya', 2390000, '14', 'Good', 'ONDELIVERY', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` int(11) NOT NULL auto_increment,
  `session` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `item_id` varchar(10) NOT NULL,
  `cost` int(100) NOT NULL,
  `date` datetime NOT NULL,
  `total_cost` int(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `session`, `quantity`, `item_id`, `cost`, `date`, `total_cost`) VALUES
(1, '', 2, '2', 1000000, '0000-00-00 00:00:00', 2000000),
(2, '025f524a4c5803c3fc60d98264770099', 6, '2', 1000000, '0000-00-00 00:00:00', 6000000),
(3, '025f524a4c5803c3fc60d98264770099', 7, '3', 1200000, '0000-00-00 00:00:00', 8400000),
(4, 'adf3675631fe207714812617e82ab2cf', 1, '3', 1200000, '0000-00-00 00:00:00', 1200000),
(5, '17e2bcb8a35475b95d328a4d57176872', 1, '3', 1200000, '0000-00-00 00:00:00', 1200000),
(6, 'b1eafeb060e2c160b7ce63a7b68f17c7', 1, '3', 1200000, '0000-00-00 00:00:00', 1200000),
(7, 'b1eafeb060e2c160b7ce63a7b68f17c7', 1, '2', 1000000, '0000-00-00 00:00:00', 1000000),
(8, 'b1eafeb060e2c160b7ce63a7b68f17c7', 8, '1', 200, '0000-00-00 00:00:00', 1600),
(9, 'be1f3c17e9c923e2889ee7af0c04b1e1', 1, '2', 1000000, '0000-00-00 00:00:00', 1000000),
(10, 'be1f3c17e9c923e2889ee7af0c04b1e1', 1, '9', 140000, '0000-00-00 00:00:00', 140000),
(11, 'be1f3c17e9c923e2889ee7af0c04b1e1', 1, '3', 1200000, '0000-00-00 00:00:00', 1200000),
(12, 'be1f3c17e9c923e2889ee7af0c04b1e1', 0, '', 0, '0000-00-00 00:00:00', 0),
(13, 'be1f3c17e9c923e2889ee7af0c04b1e1', 4, '1', 200, '0000-00-00 00:00:00', 800),
(14, 'df3e489ec19d35f1851d3ac34054ad5e', 1, '3', 1200000, '0000-00-00 00:00:00', 1200000),
(15, 'df3e489ec19d35f1851d3ac34054ad5e', 1, '2', 1000000, '0000-00-00 00:00:00', 1000000),
(16, 'df3e489ec19d35f1851d3ac34054ad5e', 1, '1', 200, '0000-00-00 00:00:00', 200),
(17, 'c3f0728ec81da41a2943ca6732935421', 1, '13', 50000000, '0000-00-00 00:00:00', 50000000),
(18, 'c3f0728ec81da41a2943ca6732935421', 1, '14', 2000000, '0000-00-00 00:00:00', 2000000),
(19, 'c3f0728ec81da41a2943ca6732935421', 5, '2', 1000000, '0000-00-00 00:00:00', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL auto_increment,
  `service` varchar(255) NOT NULL,
  `cost` float NOT NULL,
  `product_id` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `cost`, `product_id`) VALUES
(13, 'Wheel Balancing', 12000, 'S12'),
(14, 'Wheel Balancing', 12000, 'S12'),
(15, 'Wheel Balancing', 12000, 'S12'),
(16, 'Wheel Balancing', 12000, 'S12'),
(17, 'Wheel Balancing', 12000, 'S12'),
(18, 'Wheel Balancing', 12000, 'S12'),
(19, 'Wheel Balancing', 12000, 'S12'),
(20, 'Wheel Balancing', 12000, 'S12'),
(21, 'Wheel Balancing', 12000, 'S12'),
(22, 'Wheel Balancing', 12000, 'S12');

-- --------------------------------------------------------

--
-- Table structure for table `service_transact`
--

CREATE TABLE `service_transact` (
  `id` int(15) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `problem` varchar(350) NOT NULL,
  `date` date NOT NULL,
  `state` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `service_transact`
--


-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(100) NOT NULL auto_increment,
  `session` varchar(100) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session`, `product_id`) VALUES
(1, 'c3f0728ec81da41a2943ca6732935421', '2'),
(2, 'c3f0728ec81da41a2943ca6732935421', '2'),
(3, 'c3f0728ec81da41a2943ca6732935421', '2'),
(4, 'c3f0728ec81da41a2943ca6732935421', '2'),
(5, 'c3f0728ec81da41a2943ca6732935421', '2'),
(6, 'c3f0728ec81da41a2943ca6732935421', '2'),
(7, 'c3f0728ec81da41a2943ca6732935421', '2'),
(8, 'c3f0728ec81da41a2943ca6732935421', '2'),
(9, 'c3f0728ec81da41a2943ca6732935421', '2'),
(10, 'c3f0728ec81da41a2943ca6732935421', '2'),
(11, 'c3f0728ec81da41a2943ca6732935421', '2'),
(12, 'c3f0728ec81da41a2943ca6732935421', '2'),
(13, 'c3f0728ec81da41a2943ca6732935421', '2'),
(14, 'c3f0728ec81da41a2943ca6732935421', '2'),
(15, 'c3f0728ec81da41a2943ca6732935421', '2'),
(16, 'c3f0728ec81da41a2943ca6732935421', '2'),
(17, 'c3f0728ec81da41a2943ca6732935421', '2'),
(18, 'c3f0728ec81da41a2943ca6732935421', '2'),
(19, 'c3f0728ec81da41a2943ca6732935421', '2'),
(20, 'c3f0728ec81da41a2943ca6732935421', '2'),
(21, 'c3f0728ec81da41a2943ca6732935421', '2'),
(22, 'c3f0728ec81da41a2943ca6732935421', '2'),
(23, 'c3f0728ec81da41a2943ca6732935421', '2'),
(24, 'c3f0728ec81da41a2943ca6732935421', '2'),
(25, 'c3f0728ec81da41a2943ca6732935421', '2'),
(26, 'c3f0728ec81da41a2943ca6732935421', '2'),
(27, 'c3f0728ec81da41a2943ca6732935421', '2'),
(28, 'c3f0728ec81da41a2943ca6732935421', '2'),
(29, 'c3f0728ec81da41a2943ca6732935421', '2'),
(30, 'c3f0728ec81da41a2943ca6732935421', '2'),
(31, 'c3f0728ec81da41a2943ca6732935421', '2'),
(32, 'c3f0728ec81da41a2943ca6732935421', '2'),
(33, 'c3f0728ec81da41a2943ca6732935421', '2'),
(34, 'c3f0728ec81da41a2943ca6732935421', '2'),
(35, 'c3f0728ec81da41a2943ca6732935421', '2'),
(36, 'c3f0728ec81da41a2943ca6732935421', '2');

-- --------------------------------------------------------

--
-- Table structure for table `spares`
--

CREATE TABLE `spares` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `condition` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `size` varchar(20) NOT NULL,
  `number` int(10) NOT NULL,
  `cost` int(100) NOT NULL,
  `car_Code` varchar(30) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `spares`
--

INSERT INTO `spares` (`id`, `name`, `condition`, `Description`, `color`, `size`, `number`, `cost`, `car_Code`, `Brand`, `photo`) VALUES
(40, 'Sedan', 'In perfect condition', 'So nice and elegant car', 'Black', '4 seater', 13, 200, 'Product 2', 'Toyota', 'themes/images/ladies/spare1.jpg'),
(41, 'Mercedez E200', 'New', 'Sleek and pocket friendly', 'Silver', '4 Seater', 3, 1000000, 'Product 1', 'Mercedez', 'themes/images/ladies/spare2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Mamba', 'mamba.dedan@gmail.com', 'VFZSSmVnPT0='),
(2, 'Rodick', 'rodrick@gmail.com', 'VFZSSmVnPT0=');
