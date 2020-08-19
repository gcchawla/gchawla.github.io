-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 07:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_availability`
--

CREATE TABLE `agent_availability` (
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_availablefrom` date NOT NULL,
  `agent_availableto` date NOT NULL,
  `agent_created` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_availability`
--

INSERT INTO `agent_availability` (`agent_id`, `agent_name`, `agent_availablefrom`, `agent_availableto`, `agent_created`) VALUES
(1, 'Agent1', '2020-09-01', '2020-09-05', '2020-08-18 12:01:55.000000'),
(2, 'Agent1', '2020-09-09', '2020-09-13', '2020-08-18 12:02:35.000000'),
(3, 'Agent1', '2020-09-16', '2020-09-20', '2020-08-18 12:03:02.000000'),
(4, 'Agent1', '2020-09-24', '2020-09-25', '2020-08-18 12:03:36.000000'),
(5, 'Agent1', '2020-09-27', '2020-09-28', '2020-08-18 12:03:57.000000'),
(6, 'Agent2', '2020-09-01', '2020-09-05', '2020-08-18 12:05:06.000000'),
(7, 'Agent2', '2020-09-09', '2020-09-13', '2020-08-18 12:05:23.000000'),
(8, 'Agent2', '2020-09-16', '2020-09-22', '2020-08-18 12:05:46.000000'),
(9, 'Agent2', '2020-09-24', '2020-09-24', '2020-08-18 12:06:11.000000'),
(10, 'Agent3', '2020-09-04', '2020-09-09', '2020-08-18 12:07:03.000000'),
(11, 'Agent3', '2020-09-14', '2020-09-16', '2020-08-18 12:07:28.000000'),
(12, 'Agent3', '2020-09-21', '2020-09-22', '2020-08-18 12:07:52.000000'),
(13, 'Agent3', '2020-09-24', '2020-09-25', '2020-08-18 12:08:09.000000'),
(14, 'Agent3', '2020-09-30', '2020-09-30', '2020-08-18 12:08:27.000000'),
(15, 'Agent4', '2020-09-10', '2020-09-10', '2020-08-18 12:09:25.000000'),
(16, 'Agent4', '2020-09-28', '2020-09-30', '2020-08-18 12:09:54.000000'),
(17, 'Agent5', '2020-09-11', '2020-09-11', '2020-08-18 12:10:24.000000'),
(18, 'Agent5', '2020-09-28', '2020-09-30', '2020-08-18 12:10:50.000000'),
(19, 'Agent6', '2020-09-14', '2020-09-14', '2020-08-18 12:11:16.000000'),
(20, 'Agent6', '2020-09-18', '2020-09-22', '2020-08-18 12:11:54.000000'),
(21, 'Agent6', '2020-09-28', '2020-09-29', '2020-08-18 12:12:15.000000'),
(22, 'Agent7', '2020-09-27', '2020-09-29', '2020-08-18 12:12:42.000000'),
(23, 'Agent8', '2020-09-02', '2020-09-07', '2020-08-18 12:13:11.000000'),
(24, 'Agent9', '2020-09-06', '2020-09-18', '2020-08-18 12:13:57.000000'),
(25, 'Agent9', '2020-09-22', '2020-09-22', '2020-08-18 12:14:28.000000'),
(26, 'Agent9', '2020-09-27', '2020-09-27', '2020-08-18 12:14:55.000000'),
(27, 'Agent10', '2020-09-01', '2020-09-04', '2020-08-18 12:15:24.000000'),
(28, 'Agent10', '2020-09-11', '2020-09-16', '2020-08-18 12:16:14.000000'),
(29, 'Agent10', '2020-09-19', '2020-09-21', '2020-08-18 12:17:10.000000'),
(30, 'Agent10', '2020-09-30', '2020-09-30', '2020-08-18 12:17:31.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_availability`
--
ALTER TABLE `agent_availability`
  ADD PRIMARY KEY (`agent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_availability`
--
ALTER TABLE `agent_availability`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
