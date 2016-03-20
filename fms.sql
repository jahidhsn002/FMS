-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2016 at 05:59 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `get_drug`
--

CREATE TABLE `get_drug` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `group` varchar(150) NOT NULL,
  `power` varchar(30) NOT NULL,
  `retail_price` varchar(20) NOT NULL,
  `sale_price` varchar(20) NOT NULL,
  `invoice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_drug`
--

INSERT INTO `get_drug` (`id`, `name`, `group`, `power`, `retail_price`, `sale_price`, `invoice`) VALUES
(2, 'cipro', 'khaa', '500', '13', '15', '111');

-- --------------------------------------------------------

--
-- Table structure for table `get_stock`
--

CREATE TABLE `get_stock` (
  `id` varchar(15) NOT NULL,
  `drug_name` varchar(50) NOT NULL,
  `quantity` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_stock`
--

INSERT INTO `get_stock` (`id`, `drug_name`, `quantity`) VALUES
('2', 'cipro', '50');

-- --------------------------------------------------------

--
-- Table structure for table `get_supplier`
--

CREATE TABLE `get_supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_supplier`
--

INSERT INTO `get_supplier` (`id`, `invoice`, `name`, `company`, `phone`, `email`, `address`) VALUES
(0, '', 'sdsds', 'dsfd', '444666', '', ''),
(1, '', 'sdsad', '', '2234', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `get_drug`
--
ALTER TABLE `get_drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_supplier`
--
ALTER TABLE `get_supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `get_drug`
--
ALTER TABLE `get_drug`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `get_supplier`
--
ALTER TABLE `get_supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
