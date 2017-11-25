-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 01:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `username`, `password`, `created_at`) VALUES
(1, 'Ramesh', 'Raj', 'Adhikari', 'ramesh@gmail.com', 'admin', 'admin', '2017-11-18 11:19:00'),
(2, 'Gopal', 'Prasad', 'Sharma', 'gopal@gmail.com', 'staff', 'staff', '2017-11-20 22:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_info`
--

CREATE TABLE `tbl_std_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address_permanent` varchar(100) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `guardian_phone` varchar(10) NOT NULL,
  `hostel_joined_date` date NOT NULL,
  `room_no` int(11) NOT NULL,
  `monthly_fee` int(11) NOT NULL,
  `payment_cleared_till` date NOT NULL,
  `unique_id_thumb` varchar(100) NOT NULL,
  `unique_id_large` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_std_info`
--

INSERT INTO `tbl_std_info` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `phone`, `address_permanent`, `guardian_name`, `guardian_phone`, `hostel_joined_date`, `room_no`, `monthly_fee`, `payment_cleared_till`, `unique_id_thumb`, `unique_id_large`, `created_at`) VALUES
(1, 'Suraj', '', 'Thapa', '1995-11-23', '9841009988', 'Kalanki', 'Gaurab Thapa', '9841115500', '2016-11-06', 101, 11000, '2017-10-02', '', '', '2017-11-18 21:05:35'),
(2, 'Amir', '', 'Prajapati', '2017-11-18', '9841229090', 'Lalitpur', 'Raman Prajapati', '9841567567', '2017-11-18', 101, 12000, '2017-11-18', '', '', '2017-11-18 17:15:07'),
(3, 'Suman', 'Raj ', 'Bhandari', '1999-11-18', '9841209890', 'Lamjung', 'Ramesh Bhandari', '9841229970', '2015-11-18', 102, 12000, '2017-08-18', '', '', '2017-11-18 17:22:45'),
(4, 'Hari', 'Bahadur', 'Thapa', '1995-11-19', '2147483647', 'kaski', 'Ram Bahadur Thapa', '2147483647', '2016-11-19', 211, 12000, '2017-10-19', '', '', '2017-11-19 08:44:42'),
(7, 'Rajib', '', 'Basnet', '1992-11-21', '9841887700', 'Gongabu', 'Gopal Basnet', '9841009900', '2014-11-21', 211, 12000, '2017-10-21', '', '', '2017-11-21 13:15:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_std_info`
--
ALTER TABLE `tbl_std_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_std_info`
--
ALTER TABLE `tbl_std_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
