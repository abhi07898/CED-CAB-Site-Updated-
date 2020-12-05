-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2020 at 02:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(155) NOT NULL,
  `name` varchar(255) NOT NULL,
  `distance` int(255) NOT NULL,
  `isavailable` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `name`, `distance`, `isavailable`) VALUES
(10, 'CHARBAGH', 0, 0),
(11, 'BBD', 30, 0),
(12, 'BARABANKI', 60, 0),
(13, 'FAIZABAD', 100, 0),
(14, 'BASTI', 150, 0),
(15, 'GORAKHPUR', 210, 0),
(20, 'INDRANAGAR', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ride`
--

CREATE TABLE `ride` (
  `ride_id` int(155) NOT NULL,
  `ride_date` varchar(255) NOT NULL,
  `loc_from` varchar(255) NOT NULL,
  `loc_to` varchar(255) NOT NULL,
  `total_distance` int(255) NOT NULL,
  `luggage` varchar(255) NOT NULL,
  `total_fare` int(255) NOT NULL,
  `status` int(155) NOT NULL DEFAULT 1,
  `cab_type` varchar(155) NOT NULL,
  `cust_id` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ride`
--

INSERT INTO `ride` (`ride_id`, `ride_date`, `loc_from`, `loc_to`, `total_distance`, `luggage`, `total_fare`, `status`, `cab_type`, `cust_id`) VALUES
(51, '2020-11-25 16:19:35', 'BARABANKI', 'BBD', 30, '', 555, 2, 'CedRoyal', 11),
(53, '2020-11-25 17:00:39', 'FAIZABAD', 'BARABANKI', 40, '', 775, 2, 'CedMin', 11),
(59, '2020-11-27 08:46:33', 'BBD', 'FAIZABAD', 70, '', 887, 2, 'CedRoyal', 11),
(77, '2020-11-27 09:09:24', 'BBD', 'FAIZABAD', 70, '', 887, 2, 'CedRoyal', 11),
(185, '2020-11-30 18:35:19', 'INDRANAGAR', 'CHARBAGH', 10, '', 295, 3, 'CedMicro', 11),
(199, '2020-12-01 16:45:14', 'BBD', 'KANPUR', 15, '', 245, 3, 'CedRoyal', 11),
(207, '2020-12-01 19:16:23', 'INDRANAGAR', 'BARABANKI', 50, '', 915, 2, 'CedRoyal', 11),
(209, '2020-12-01 19:28:38', 'INDRANAGAR', 'BBD', 20, '', 565, 2, 'CedSUV', 11),
(215, '2020-12-02 13:28:43', 'BARABANKI', 'FAIZABAD', 40, '12', 785, 3, 'CedMini', 12),
(227, '2020-12-02 17:13:45', 'BARABANKI', 'GORAKHPUR', 150, '456', 2153, 1, 'CedMini', 12),
(228, '2020-12-02 17:15:52', 'INDRANAGAR', 'GORAKHPUR', 200, '12', 2145, 1, 'CedMicro', 12),
(229, '2020-12-02 18:22:16', 'BARABANKI', 'FAIZABAD', 40, '', 775, 1, 'CedRoyal', 12),
(231, '2020-12-02 19:32:28', 'BARABANKI', 'BASTI', 90, '', 1421, 1, 'CedRoyal', 11),
(232, '2020-12-02 19:34:37', 'INDRANAGAR', 'KANPUR', 35, '', 790, 1, 'CedSUV', 11),
(233, '2020-12-02 19:35:06', 'BARABANKI', 'BASTI', 90, '', 1091, 1, 'CedMicro', 11),
(234, '2020-12-03 12:12:25', 'INDRANAGAR', 'FAIZABAD', 90, '', 1091, 1, 'CedMicro', 11),
(235, '2020-12-03 13:08:20', 'BBD', 'KANPUR', 15, '', 490, 2, 'CedSUV', 11),
(236, '2020-12-03 14:58:52', 'INDRANAGAR', 'GORAKHPUR', 200, '123', 2895, 1, 'CedRoyal', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(155) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_signup` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `isblock` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `user_name`, `name`, `date_of_signup`, `mobile`, `isblock`, `password`, `isadmin`) VALUES
(5, 'adfsasd', 'aadfsg', '2020-11-24 16:14:49', '43667', 1, '81dc9bdb52d04dc20036dbd8313ed055', 0),
(7, 'sdafcsd', 'aaasdfasdf', '2020-11-24 16:48:23', '123456789', 1, '', 0),
(9, 'sadf', 'aae', '2020-11-24 17:52:33', '12345', 1, '81dc9bdb52d04dc20036dbd8313ed055', 0),
(11, 'abhi07898', 'qeeddd', '2020-11-24 18:26:33', '7654677688', 1, '827ccb0eea8a706c4c34a16891f84e7b', 0),
(12, 'admin', 'ABHISHEK', '2020-11-27 15:11:00', '1234', 1, '827ccb0eea8a706c4c34a16891f84e7b', 1),
(13, 'user', 'user', '2020-11-30 15:32:14', '1234567890', 1, '81dc9bdb52d04dc20036dbd8313ed055', 0),
(22, 'usrer', 'qwert', '2020-12-01 10:30:49', '1234567890', 1, '202cb962ac59075b964b07152d234b70', 0),
(26, '                abhi07898    ', 'Sagar', '2020-12-03 16:08:35', '8888888888', 0, '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `ride`
--
ALTER TABLE `ride`
  ADD PRIMARY KEY (`ride_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ride`
--
ALTER TABLE `ride`
  MODIFY `ride_id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ride`
--
ALTER TABLE `ride`
  ADD CONSTRAINT `ride_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
