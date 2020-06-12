-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 06:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `members_registration`
--

CREATE TABLE `members_registration` (
  `uid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_registration`
--

INSERT INTO `members_registration` (`uid`, `fname`, `mname`, `lname`, `gender`, `phone_number`, `reg_date`, `address`) VALUES
(3, 'Kwame', 'kofi', 'Frimpong', 'Male', '0245112561', '2020-06-10 22:30:22', 'WS-3932558'),
(7, 'Afia', 'Wood', 'Nyamekye', 'Male', '0245112561', '2020-06-10 23:39:22', 'WS-3932558'),
(8, 'Nana', '', 'Ama', 'Female', '0245112561', '2020-06-10 23:52:39', 'WS-3932558'),
(9, 'Samuel', '', 'Mensah', 'Male', '0245112561', '2020-06-10 23:57:45', 'WS-3932558'),
(10, 'Rachel', '', 'Wood', 'Male', '0200661625', '2020-06-11 08:14:27', 'ws-396245'),
(11, 'isacc', 'sey', 'Donkoh', 'Male', '0205908801', '2020-06-11 15:52:41', 'j.c.k arthur street');

-- --------------------------------------------------------

--
-- Table structure for table `temperature_tbl`
--

CREATE TABLE `temperature_tbl` (
  `tem_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `temperature` varchar(11) NOT NULL,
  `date_taken` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temperature_tbl`
--

INSERT INTO `temperature_tbl` (`tem_id`, `uid`, `temperature`, `date_taken`) VALUES
(9, 3, '36.8', '2020-06-10 22:30:22'),
(13, 7, '36.2', '2020-06-10 23:39:22'),
(14, 8, '', '2020-06-10 23:52:39'),
(15, 9, '36.4', '2020-06-10 23:57:45'),
(16, 10, '35.6', '2020-06-11 08:14:27'),
(17, 3, '36.8', '2020-06-11 08:48:26'),
(18, 8, '35.7', '2020-06-11 15:42:06'),
(19, 9, '36.1', '2020-06-11 15:43:44'),
(20, 11, '44.0', '2020-06-11 15:52:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members_registration`
--
ALTER TABLE `members_registration`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `temperature_tbl`
--
ALTER TABLE `temperature_tbl`
  ADD PRIMARY KEY (`tem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members_registration`
--
ALTER TABLE `members_registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `temperature_tbl`
--
ALTER TABLE `temperature_tbl`
  MODIFY `tem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
