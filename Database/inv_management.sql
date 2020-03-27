-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 01:31 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inv_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoicedata`
--

CREATE TABLE `invoicedata` (
  `invoiceid` int(15) NOT NULL,
  `userid` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pid` int(15) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pprice` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(15) NOT NULL,
  `pname` varchar(15) NOT NULL,
  `pprice` int(15) NOT NULL,
  `pimage` varchar(80) NOT NULL,
  `pdate` date NOT NULL,
  `userid` int(15) NOT NULL,
  `pdetails` varchar(100) NOT NULL,
  `pquantity` int(10) NOT NULL,
  `prating` int(5) NOT NULL,
  `pcatagory` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `company` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `type`, `company`, `address`, `contact`) VALUES
(1, 'Palash Mitra', 'palash', 'admin', 'Blu Fashion Ltd.', 'Mohakhali, Dhaka - 1220.', 1726200207),
(2, 'Test', 'asd', 'user', 'N/A', 'N/A', 1700598073),
(3, 'acm', 'asd', 'user', 'teset', 'Bashundhara R/A', 1726200254),
(4, 'jamijoy.science', 'asd', 'user', 'teset', '', 1726900207),
(5, 'user', 'asd', 'user', 'teset', 'N/A', 1726245207);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
