-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 12:46 AM
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
(11, 'isacc', 'sey', 'Donkoh', 'Male', '0205908801', '2020-06-11 15:52:41', 'j.c.k arthur street'),
(12, 'Doe', '', 'Kofi', 'Male', '0245112561', '2020-06-11 21:25:30', 'WS-3932558'),
(13, 'Kwamina', '', 'Mensah', 'Male', '0245112563', '2020-06-12 12:57:09', 'WS-3932558'),
(14, 'Tuffour', '', 'Emmanuel', 'Male', '0553603281', '2020-06-12 13:08:42', 'WS-3932558'),
(15, 'Ema', '', 'Sam', 'Female', '0245112568', '2020-06-12 13:10:25', 'WS-3932558'),
(16, 'Kojo', '', 'Kumi', 'Male', '0200661629', '2020-06-14 18:57:58', 'WS-3932558'),
(17, 'Esi', '', 'Atta', 'Female', '0200661698', '2020-06-14 19:00:28', 'WS-3932558'),
(18, 'Ama', '', 'Adwoa', 'Female', '0245112567', '2020-06-14 19:02:39', 'WS-3932558'),
(19, 'Manu', 'Kofi', 'Addae', 'Male', '0245112589', '2020-06-14 19:07:36', 'WS-3932558'),
(20, 'House', '', 'Adoye', 'Male', '0200778899', '2020-06-14 19:11:51', 'WS-3932558'),
(21, 'Williams', '', 'Duku', 'Male', '0245256248', '2020-06-14 22:26:27', 'WS-3932558');

-- --------------------------------------------------------

--
-- Table structure for table `qustion_tbl`
--

CREATE TABLE `qustion_tbl` (
  `qid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `history_dry_cough` varchar(5) NOT NULL,
  `fever` varchar(5) NOT NULL,
  `difficulty_breathing` varchar(5) NOT NULL,
  `travelled_outside_gh` varchar(5) NOT NULL,
  `country_visited` varchar(20) NOT NULL,
  `travelled_outside_town` varchar(5) NOT NULL,
  `specify_region` varchar(10) NOT NULL,
  `exposed_covid` varchar(5) NOT NULL,
  `friend_relative_fever` varchar(5) NOT NULL,
  `working_hospital` varchar(5) NOT NULL,
  `hospital_worked` varchar(20) NOT NULL,
  `flu` varchar(5) NOT NULL,
  `date_record` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qustion_tbl`
--

INSERT INTO `qustion_tbl` (`qid`, `uid`, `history_dry_cough`, `fever`, `difficulty_breathing`, `travelled_outside_gh`, `country_visited`, `travelled_outside_town`, `specify_region`, `exposed_covid`, `friend_relative_fever`, `working_hospital`, `hospital_worked`, `flu`, `date_record`) VALUES
(1, 20, 'No', 'No', 'No', 'No', '', 'No', '', 'No', 'No', 'No', '', 'No', '2020-06-14 22:08:51'),
(2, 21, 'No', 'No', 'No', 'No', '', 'No', '', 'No', 'No', 'No', '', 'No', '2020-06-14 22:26:47'),
(3, 21, 'No', 'No', 'No', 'No', '', 'No', '', 'No', 'No', 'No', '', 'No', '2020-06-14 22:31:10'),
(4, 21, 'No', 'No', 'No', 'No', '', 'No', '', 'No', 'No', 'No', '', 'No', '2020-06-14 22:31:39'),
(5, 21, 'No', 'No', 'No', 'No', '', 'No', '', 'No', 'No', 'No', '', 'No', '2020-06-14 22:36:22'),
(6, 3, 'No', 'No', 'No', 'No', '', 'No', '', 'No', 'No', 'No', '', 'No', '2020-06-14 22:41:11'),
(7, 3, 'No', 'No', 'No', 'No', '', 'No', '', 'No', 'No', 'No', '', 'No', '2020-06-14 22:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `temperature_tbl`
--

CREATE TABLE `temperature_tbl` (
  `tem_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `temperature` varchar(11) NOT NULL,
  `date_taken` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seat_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temperature_tbl`
--

INSERT INTO `temperature_tbl` (`tem_id`, `uid`, `temperature`, `date_taken`, `seat_number`) VALUES
(9, 3, '36.7', '2020-06-10 22:30:22', ''),
(13, 7, '36.2', '2020-06-10 23:39:22', ''),
(14, 8, '30.5', '2020-06-10 23:52:39', ''),
(15, 9, '36.4', '2020-06-10 23:57:45', ''),
(16, 10, '35.6', '2020-06-11 08:14:27', ''),
(17, 3, '36.7', '2020-06-11 08:48:26', ''),
(18, 8, '35.7', '2020-06-11 15:42:06', ''),
(19, 9, '36.1', '2020-06-11 15:43:44', ''),
(20, 11, '44.0', '2020-06-11 15:52:41', ''),
(21, 12, '36.7', '2020-06-11 21:25:30', ''),
(22, 13, '35.4', '2020-06-12 12:57:09', ''),
(23, 14, '30.5', '2020-06-12 13:08:42', ''),
(24, 15, '38.2', '2020-06-12 13:10:25', ''),
(25, 3, '36.7', '2020-06-13 08:48:22', ''),
(26, 7, '40.5', '2020-06-13 08:49:40', ''),
(135, 3, '36.5', '2020-06-14 18:34:59', '19'),
(136, 9, '36.8', '2020-06-14 18:35:12', '83'),
(137, 13, '36.7', '2020-06-14 18:35:25', '1'),
(138, 15, '35.7', '2020-06-14 18:35:38', '34'),
(139, 12, '36.9', '2020-06-14 18:35:54', '67'),
(140, 17, '36.9', '2020-06-14 19:00:46', '26'),
(141, 18, '36.7', '2020-06-14 19:03:01', '90'),
(142, 19, '36.8', '2020-06-14 19:10:07', '70'),
(143, 21, '36.8', '2020-06-14 22:26:34', '36'),
(144, 3, '36.8', '2020-06-14 22:40:50', '83');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members_registration`
--
ALTER TABLE `members_registration`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `qustion_tbl`
--
ALTER TABLE `qustion_tbl`
  ADD PRIMARY KEY (`qid`);

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
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `qustion_tbl`
--
ALTER TABLE `qustion_tbl`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `temperature_tbl`
--
ALTER TABLE `temperature_tbl`
  MODIFY `tem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
