-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 03:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v-aesthetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `firstname`, `lastname`, `phno`, `email`, `password`) VALUES
(1, 'Admin', 'V-aesthetic', '9999999999', 'admin@vaesthetic.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `expences_info`
--

CREATE TABLE `expences_info` (
  `id` int(11) NOT NULL,
  `amount` varchar(55) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date` varchar(55) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `expence_person` varchar(55) NOT NULL,
  `user_uid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expences_info`
--

INSERT INTO `expences_info` (`id`, `amount`, `purpose`, `date`, `remarks`, `expence_person`, `user_uid`) VALUES
(1, '1050', 'Current Bill', '2022-06-14', 'test1', 'Admin V-aesthetic', 0),
(2, '5001', 'test2', '2022-06-14', 'test2', 'Admin V-aesthetic', 0),
(3, '4000', 'massage', '2022-06-14', 'test', 'user1@vaesthetic', 1),
(4, '6000', 'face massage', '2022-06-13', 'test1', 'user1@vaesthetic', 1),
(5, '6000', 'face massage', '2022-06-14', 'test1', 'user2@vaesthetic', 2),
(6, '8000', 'Current Bill', '2022-06-13', 'test2\r\n', 'user2@vaesthetic', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lead_info`
--

CREATE TABLE `lead_info` (
  `id` int(11) NOT NULL,
  `classid` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reference` varchar(55) NOT NULL,
  `location` varchar(55) NOT NULL,
  `uid_card_type` varchar(55) NOT NULL,
  `uid_card_no` varchar(55) NOT NULL,
  `lead_person` varchar(55) NOT NULL,
  `user_uid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lead_info`
--

INSERT INTO `lead_info` (`id`, `classid`, `name`, `email`, `phno`, `address`, `reference`, `location`, `uid_card_type`, `uid_card_no`, `lead_person`, `user_uid`) VALUES
(2, 'aquibjawad_9554092856', 'Aquib Jawad', 'aquib@gmail.com', '9554092856', 'Ranchi', 'Tirtha da', 'ranchi', 'PAN Card', 'BA529O1D4', 'Admin V-aesthetic', 0),
(4, 'tuhinpaul_9345676897', 'Tuhin  Paul', 'tuhin@gmail.com', '9345676897', 'Howrah', 'test', 'kolkata', 'PAN Card', 'DIV678989', 'Admin V-aesthetic', 0),
(5, 'sirajkhan_9932035384', 'Siraj Khan', 'siraj@gmail.com', '9932035384', 'Jhargram', 'test1', 'jhargram', 'Driving License', 'EAKPPO09', 'Admin V-aesthetic', 0),
(6, 'tirthasen_9932035384', 'Tirtha Sen', 'tirtha@gmail.com', '9932035384', 'Jhargram', 'test2', 'jhargram', 'Adhar Card', '678988999888', 'Admin V-aesthetic', 0),
(7, 'rohandas_7906547879', 'Rohan Das', 'rohan@gmail.com', '7906547879', 'Ranchi', 'test3', 'ranchi', 'PAN Card', 'EAKPP098QW', 'Admin V-aesthetic', 0),
(8, 'rahuldas_7906547879', 'Rahul Das', 'rahul@gmail.com', '7906547879', 'Jhargram', 'test4', 'jhargram', 'Voter ID', 'DIV678989', 'Admin V-aesthetic', 0),
(10, 'abhishekporiya_9932035383', 'abhishek Poriya', 'abhi@gmail.com', '9932035383', 'Kolkata', 'test4', 'kolkata', 'PAN Card', 'EAKPP098Q', 'Admin V-aesthetic', 0),
(11, 'rijudas_7906547879', 'Riju Das', 'riju@gmail.com', '7906547879', 'Howrah', 'test5', 'howrah', 'Driving License', 'DIV45667Q', 'Admin V-aesthetic', 0),
(12, 'dhirajroy_9932035384', 'Dhiraj Roy', 'dhiraj@gmail.com', '9932035384', 'Ranchi', 'test6', 'ranchi', 'PAN Card', 'EAKPPO06', 'Admin V-aesthetic', 0),
(13, 'sujoydas_8876789909', 'Sujoy Das', 'sujoy@gmail.com', '8876789909', 'Mumbai', 'test6', 'mumbai', 'PAN Card', 'EAKPP098T', 'Admin V-aesthetic', 0),
(14, 'sujoydey_9932035367', 'Sujoy Dey', 'sujoy@gmail.com', '9932035367', 'Bihar', 'test7', 'bihar', 'Driving License', 'Div233455', 'Admin V-aesthetic', 0),
(16, 'aquibjawad_9932035383', 'Aquib Jawad', 'aquib@gmail.com', '9932035383', 'Mumbai', 'test', 'mumbai', 'PAN Card', 'EAKPP098Q', 'user1@vaesthetic', 1),
(17, 'rohandas_9932035382', 'Rohan Das', 'rohan@gmail.com', '9932035382', 'Delhi', 'test', 'delhi', 'PAN Card', 'EAKPPO09', 'user1@vaesthetic', 1),
(18, 'dhirajdas_7906547879', 'Dhiraj Das', 'dhiraj@gmail.com', '7906547879', 'Mumbai', 'test1', 'mumbai', 'PAN Card', 'EAKPPO06', 'user2@vaesthetic', 2),
(19, 'rohanroy_9932035383', 'Rohan Roy', 'rohan@gmail.com', '9932035383', 'Jhargram', 'test2', 'jhargram', 'Voter ID', '56678889999', 'user2@vaesthetic', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales_info`
--

CREATE TABLE `sales_info` (
  `id` int(11) NOT NULL,
  `serial_no` varchar(55) NOT NULL,
  `customer_name` varchar(55) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `service` varchar(55) NOT NULL,
  `total_amount` varchar(55) NOT NULL,
  `adv_amount` varchar(55) NOT NULL,
  `due_amount` varchar(55) NOT NULL,
  `date` varchar(55) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `sales_person` varchar(55) NOT NULL,
  `lead_by` varchar(55) NOT NULL,
  `user_uid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_info`
--

INSERT INTO `sales_info` (`id`, `serial_no`, `customer_name`, `phoneno`, `service`, `total_amount`, `adv_amount`, `due_amount`, `date`, `remarks`, `sales_person`, `lead_by`, `user_uid`) VALUES
(1, 'aquibjawad_9932035383', 'Aquib Jawad', '9932035383', 'Business', '4000', '3000', '1000', '2022-06-14', 'test', 'Admin V-aesthetic', '', 0),
(2, 'rohandas_9932035382', 'Rohan Das', '9932035382', 'Business', '3000', '1000', '2000', '2022-06-14', 'test', 'user1@vaesthetic', '', 1),
(3, 'dhirajdas_7906547879', 'Dhiraj Das', '7906547879', 'Business', '4000', '3000', '2000', '2022-06-14', 'test1', 'user2@vaesthetic', '', 2),
(4, 'rohanroy_9932035383', 'Rohan Roy', '9932035383', 'Education', '2000', '500', '1500', '2022-06-14', 'test2', 'user2@vaesthetic', '', 2),
(5, 'aquibjawad_9554092856', 'Aquib Jawad', '9554092856', 'massage', '3000', '1000', '2000', '2022-06-25', 'great', 'user1@vaesthetic', 'Admin V-aesthetic', 1),
(6, 'dhirajdas_7906547879', 'Dhiraj Das', '7906547879', 'massage', '5000', '3000', '2000', '2022-06-24', 'great', 'Admin V-aesthetic', 'user2@vaesthetic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tickets_info`
--

CREATE TABLE `tickets_info` (
  `id` int(12) NOT NULL,
  `username` varchar(55) NOT NULL,
  `issues` varchar(255) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `date` varchar(55) NOT NULL,
  `time` varchar(20) NOT NULL,
  `user_uid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets_info`
--

INSERT INTO `tickets_info` (`id`, `username`, `issues`, `file1`, `file2`, `file3`, `date`, `time`, `user_uid`) VALUES
(43, 'user1@vaesthetic', 'jhff', 'f58315c8a35bcf270bc2f6ea69ee3bb7.png', '9faa6dc4fedb752cb1ba1237238e0942.png', '58b3460d350c89c01d505a04e23afebb.png', '2022-6-17', '07:02 pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `phno` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `username`, `email`, `password`, `phno`) VALUES
(1, 'user1', 'user1@vaesthetic', 'user1@vaesthetic.com', 'user1', '9932456789'),
(2, 'user2', 'user2@vaesthetic', 'user2@vaesthetic.com', 'user2', '8970564787');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expences_info`
--
ALTER TABLE `expences_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_info`
--
ALTER TABLE `lead_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_info`
--
ALTER TABLE `sales_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets_info`
--
ALTER TABLE `tickets_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expences_info`
--
ALTER TABLE `expences_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lead_info`
--
ALTER TABLE `lead_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sales_info`
--
ALTER TABLE `sales_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tickets_info`
--
ALTER TABLE `tickets_info`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
