-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 07:45 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `admin_name`, `password`) VALUES
(1, 'jessica', '32250170a0dca92d53ec9624f336ca24');

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE IF NOT EXISTS `bus_info` (
  `busid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `fromd` varchar(20) NOT NULL,
  `tod` varchar(20) NOT NULL,
  `seat` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`busid`, `userid`, `username`, `bname`, `type`, `fromd`, `tod`, `seat`, `year`, `month`, `day`, `time`) VALUES
(26, 7, 'liss', 'Akota', 'SUPER', 'Joypurhat', 'Dhaka', 1, 2015, 10, 10, 2),
(28, 7, 'lisaa', 'Anando', 'DELUX', 'Dhaka', 'Tangail', 7, 2016, 1, 3, 6),
(29, 7, 'lisaa', 'Anando', 'DELUX', 'Dhaka', 'Tangail', 7, 2016, 1, 3, 6),
(30, 7, 'lisaa', 'Anando', 'DELUX', 'Dhaka', 'Tangail', 7, 2016, 1, 3, 6),
(32, 1, 'jessie', 'AK Travels', 'SUPER DELUX', 'Dhaka', 'Tangail', 3, 2015, 4, 2, 6),
(33, 1, 'jessie', 'Agomony Paribahan', 'DELUX', 'Barguna', 'Dhaka', 3, 2015, 12, 2, 9),
(34, 1, 'jessie', 'Alam Asia', 'SUPER DELUX', 'Barishal', 'Dhaka', 2, 2016, 2, 3, 4),
(35, 1, 'jessie', 'Akota Paribahan', 'DELUX', 'Chittagong', 'Dhaka', 2, 2015, 12, 2, 6),
(36, 1, 'jessie', 'AK Travels', 'SUPER DELUX', 'Feni', 'Dhaka', 5, 2017, 5, 2, 9),
(37, 1, 'jessie', 'AK Travels', 'DELUX', 'Chittagong', 'Barguna', 2, 2016, 1, 6, 4),
(39, 17, 'zubu', 'Abdullah Paribahan', 'DELUX', 'Dhaka', 'Kurigram', 1, 2015, 2, 3, 2),
(40, 1, 'jessie', 'AK Travels', 'DELUX', 'Bogura', 'Joypurhat', 2, 2015, 1, 4, 7),
(41, 1, 'jessie', 'Abdullah_Paribahan', 'DELUX', 'Dhaka', 'Rajshai', 0, 2015, 12, 0, 0),
(42, 17, 'zubu', 'Abdullah_Paribahan', 'DELUX', 'Feni', 'Rangpur', 2, 2015, 10, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `bus_name`
--

CREATE TABLE IF NOT EXISTS `bus_name` (
  `busname_id` int(11) NOT NULL,
  `bus_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_name`
--

INSERT INTO `bus_name` (`busname_id`, `bus_name`) VALUES
(1, 'Abdullah_Paribahan'),
(2, 'Agomony_Paribahan'),
(3, 'AK_Travels'),
(4, 'Akota_Paribahan'),
(5, 'Alam_Asia'),
(6, 'Anando_Delux'),
(7, 'AR_Travels'),
(8, 'Asia_Line'),
(9, 'Bablu_Paribahan'),
(10, 'Banaful_Paribahan'),
(11, 'Bikash_Paribahan'),
(12, 'Binimoy_Paribahan'),
(13, 'Chuadanga_Delux'),
(14, 'Comfort_Line'),
(15, 'Darsana_Delux'),
(16, 'Dhaka_Express'),
(17, 'Dhalessory seatting service'),
(18, 'Digonto Paribahan'),
(19, 'DR Enterprise'),
(20, 'Dream Line'),
(21, 'Druti Paribahan'),
(22, 'Eagle Paribahan'),
(23, 'Ekono Paribahan'),
(24, 'Ena Transport pvt Ltd'),
(25, 'Falguni Paribahan'),
(26, 'Grameen Service'),
(27, 'Green Line'),
(28, 'Haque Enterprise'),
(29, 'Kornofuli Paribahan'),
(30, 'Nirala Super Service'),
(31, 'Pabna Express'),
(32, 'Rajshahi Delux'),
(33, 'Ruposhi Bangla'),
(34, 'Sky Line'),
(35, 'SR Travels'),
(36, 'Soudia Paribahan'),
(37, 'TR Travels'),
(38, 'V.I.P'),
(39, 'Voirab Paribahan'),
(40, 'ZR Paribahan');

-- --------------------------------------------------------

--
-- Table structure for table `bus_type`
--

CREATE TABLE IF NOT EXISTS `bus_type` (
  `bustype_id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_type`
--

INSERT INTO `bus_type` (`bustype_id`, `type_name`) VALUES
(1, 'DELUX'),
(2, 'SUPER_DELUX');

-- --------------------------------------------------------

--
-- Table structure for table `departure_info`
--

CREATE TABLE IF NOT EXISTS `departure_info` (
  `departureid` int(11) NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `Fare` varchar(10) NOT NULL,
  `busname_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departure_info`
--

INSERT INTO `departure_info` (`departureid`, `from`, `to`, `time`, `Fare`, `busname_id`) VALUES
(1, 'Dhaka', 'Barguna', 'First trip 7:00am - Last trip 11:30pm', '300/=', 1),
(2, 'Barguna', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '300/=', 1),
(3, 'Dhaka', 'Barishal', 'First trip 7:00am - Last trip 11:30pm', '300/=', 1),
(4, 'Barishal', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '300/=', 1),
(5, 'Dhaka', 'Patuakhali', 'First trip 7:00am - Last trip 11:30pm', '350/=', 2),
(6, 'Pirojpur', 'Bandorban', 'First trip 7:00am - Last trip 11:30pm', '400/=', 3),
(7, 'Dhaka', 'Bandorban', 'First trip 7:00am - Last trip 11:30pm', '800/=', 4),
(8, 'Bandorban', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '800/=', 4),
(9, 'Dhaka', 'Brahmanbaria', 'First trip 7:00am - Last trip 11:30pm', '500/=', 6),
(10, 'Brahmanbaria', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '500/=', 6),
(11, 'Dhaka', 'Chittagong', 'First trip 7:00am - Last trip 11:30pm', '1000/=', 24),
(12, 'Chittagong', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '1000/=', 24),
(13, 'Dhaka', 'Cox''s Bazar', 'First trip 7:00am - Last trip 11:30pm', '1000/=', 24),
(14, 'Dhaka', 'Feni', 'First trip 7:00am - Last trip 11:30pm', '170/=', 38),
(15, 'Feni', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '170/=', 38),
(16, 'Dhaka', 'Noakhali', 'First trip 7:00am - Last trip 11:30pm', '230/=', 23),
(17, 'Noakhali', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '230/=', 23),
(18, 'Dhaka', 'Rangpur', 'First trip 7:00am - Last trip 11:30pm', '300/=', 7),
(19, 'Rangpur', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '300/=', 7),
(20, 'Dhaka ', 'Jamalpur', 'First trip 7:00am - Last trip 11:30pm', '200/=', 8),
(21, 'Dhaka', 'Gopalganj', 'First trip 7:00am - Last trip 11:30pm', '200/=', 9),
(22, 'Gopalganj', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '200/=', 9),
(23, 'Dhaka', 'Joypurhat', 'First trip 7:00am - Last trip 11:30pm', '400/=', 10),
(24, 'Dhaka', 'Rajshahi', 'First trip 7:00am - Last trip 11:30pm', '300/=', 11),
(25, 'Rajshahi', 'Dhaka', 'First trip 7:00am - Last trip 11:30pm', '300/=', 11),
(26, 'Dhaka', 'Sirajganj', 'First trip 7:00am - Last trip 11:30pm', '300/=', 12),
(27, 'Dhaka', 'Dinajpur', 'First trip 7:00am - Last trip 11:30pm', '300/=', 15),
(28, 'Dhaka', 'Kurigram', 'First trip 7:00am - Last trip 11:30pm', '300/=', 16),
(29, 'Dhaka', 'Tangail', 'First trip 7:00am - Last trip 11:30pm', '90/=', 17),
(30, 'Dhaka', 'Lalmonirhat', 'First trip 7:00am - Last trip 11:30pm', '300/=', 18),
(31, 'Dhaka', 'Thakurgaon', 'First trip 7:00am - Last trip 11:30pm', '400/=', 19),
(32, 'Dhaka', 'Sylhet', 'First trip 7:00am - Last trip 11:30pm', '500/=', 20),
(33, 'Dhaka', 'Habiganj', 'First trip 7:00am - Last trip 11:30pm', '400/=', 21),
(34, 'Dhaka', 'Manikganj', 'First trip 7:00am - Last trip 11:30pm', '300/=', 22),
(35, 'Dhaka', 'Munshiganj', 'First trip 7:00am - Last trip 11:30pm', '300/=', 23),
(36, 'Dhaka', 'Maymensingh', 'First trip 7:00am - Last trip 11:30pm', '170/=', 24),
(37, 'Dhaka', 'Narayanganj', 'First trip 7:00am - Last trip 11:30pm', '100/=', 25),
(38, 'Dhaka', 'Narshingdi', 'First trip 7:00am - Last trip 11:30pm', '200/=', 26),
(39, 'Dhaka', 'Netrokona', 'First trip 7:00am - Last trip 11:30pm', '300/=', 27),
(40, 'Dhaka', 'Chuadanga', 'First trip 7:00am - Last trip 11:30pm', '300/=', 13);

-- --------------------------------------------------------

--
-- Table structure for table `fromdis`
--

CREATE TABLE IF NOT EXISTS `fromdis` (
  `from_id` int(11) NOT NULL,
  `from_dis` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fromdis`
--

INSERT INTO `fromdis` (`from_id`, `from_dis`) VALUES
(1, 'Dhaka'),
(2, 'Tangail'),
(3, 'Barishal'),
(4, 'Barguna'),
(5, 'Pirojpur'),
(6, 'Bandorban'),
(7, 'Brahmanbaria'),
(8, 'Chittagong'),
(9, 'Feni'),
(10, 'Noakhali'),
(11, 'Rangpur'),
(12, 'Jessore'),
(13, 'Norail'),
(14, 'Bogura'),
(15, 'Pabna'),
(16, 'Bagerhat'),
(17, 'Kustia'),
(18, 'Joypurhat'),
(19, 'Jessore'),
(20, 'Chuadanga'),
(21, 'Satkhira'),
(22, 'Kishorgonj'),
(23, 'Narayongonj'),
(24, 'Shylet'),
(25, 'Madaripur'),
(26, 'Jhinaida'),
(27, 'Irshordi'),
(28, 'Norshingdi'),
(29, 'Jhalkathi'),
(30, 'Biranibazar'),
(31, 'COxbazar'),
(32, 'Khagrachori'),
(33, 'Rangamati');

-- --------------------------------------------------------

--
-- Table structure for table `passanger`
--

CREATE TABLE IF NOT EXISTS `passanger` (
  `passid` int(11) NOT NULL,
  `passname` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `busid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE IF NOT EXISTS `seat` (
  `seat_id` int(11) NOT NULL,
  `seat_no` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `seat_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `to_place`
--

CREATE TABLE IF NOT EXISTS `to_place` (
  `to_id` int(11) NOT NULL,
  `to_dis` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_place`
--

INSERT INTO `to_place` (`to_id`, `to_dis`) VALUES
(1, 'Dhaka'),
(2, 'Tangail'),
(3, 'Barishal'),
(4, 'Barguna'),
(5, 'Patuakhali'),
(6, 'Bandorban'),
(7, 'Brahmanbaria'),
(8, 'Chittagong'),
(9, 'CoxBazar'),
(10, 'Feni'),
(11, 'Noakhali'),
(12, 'Rangpur'),
(13, 'Jamalpur'),
(14, 'Gopalgonj'),
(15, 'Joypurhat'),
(16, 'Rajshai'),
(17, 'Shirajgonj'),
(18, 'Dinajpur'),
(19, 'Kurigram'),
(20, 'Tangail'),
(21, 'Lalmonirhat'),
(22, 'Thakurgaon'),
(23, 'Shylet'),
(24, 'Habigonj'),
(25, 'Manikgonj'),
(26, 'Munshigonj'),
(27, 'Maymensingh'),
(28, 'Narayongonj'),
(29, 'Norshingdi'),
(30, 'Netrokona'),
(31, 'Chuadanga');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'jessie', '32250170a0dca92d53ec9624f336ca24', 'jessica', 'sharmin'),
(2, 'tanjee', '32250170a0dca92d53ec9624f336ca24', 'tanjee', 'akter'),
(3, 'tonny', '32250170a0dca92d53ec9624f336ca24', 'tonny', 'akter'),
(4, 'Rokhsana', '81dc9bdb52d04dc20036dbd8313ed055', 'Rokhsana', 'Siddiqua'),
(5, 'Momtaz', 'e2fc714c4727ee9395f324cd2e7f331f', 'Momtaz ', 'Uddin'),
(6, 'muni', '81dc9bdb52d04dc20036dbd8313ed055', 'muni', 'moni'),
(7, 'lisa', '81dc9bdb52d04dc20036dbd8313ed055', 'lisa', 'eshrat'),
(8, 'susmita', '81dc9bdb52d04dc20036dbd8313ed055', 'effat', 'jahan'),
(9, 'alex', 'e2fc714c4727ee9395f324cd2e7f331f', 'alex', 'billy'),
(10, 'tonu', 'e2fc714c4727ee9395f324cd2e7f331f', 'tonny', 'tonu'),
(11, 'angel', '81dc9bdb52d04dc20036dbd8313ed055', 'eshrat', 'jahan'),
(12, 'dd', 'd81f9c1be2e08964bf9f24b15f0e4900', 'da', 'vb'),
(13, 'sharmin', '827ccb0eea8a706c4c34a16891f84e7b', 'sharmin', 'tarafder'),
(14, 'rahim', '1a1dc91c907325c69271ddf0c944bc72', 'rahim', 'khan'),
(15, 'jessica', '81dc9bdb52d04dc20036dbd8313ed055', 'jessica', 'angel'),
(16, 'karim', '202cb962ac59075b964b07152d234b70', 'karim', 'khan'),
(17, 'zubu', '8b2508b21b93815b7bf342ac2f773de5', 'zubu', 'khan'),
(18, 'mithila', '202cb962ac59075b964b07152d234b70', 'mithila', 'akter'),
(19, 'yusuf', '81dc9bdb52d04dc20036dbd8313ed055', 'yusuf', 'khan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `bus_info`
--
ALTER TABLE `bus_info`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `bus_name`
--
ALTER TABLE `bus_name`
  ADD PRIMARY KEY (`busname_id`);

--
-- Indexes for table `bus_type`
--
ALTER TABLE `bus_type`
  ADD PRIMARY KEY (`bustype_id`);

--
-- Indexes for table `departure_info`
--
ALTER TABLE `departure_info`
  ADD PRIMARY KEY (`departureid`), ADD KEY `busname_id` (`busname_id`);

--
-- Indexes for table `fromdis`
--
ALTER TABLE `fromdis`
  ADD PRIMARY KEY (`from_id`);

--
-- Indexes for table `passanger`
--
ALTER TABLE `passanger`
  ADD PRIMARY KEY (`passid`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `to_place`
--
ALTER TABLE `to_place`
  ADD PRIMARY KEY (`to_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bus_info`
--
ALTER TABLE `bus_info`
  MODIFY `busid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `bus_name`
--
ALTER TABLE `bus_name`
  MODIFY `busname_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `bus_type`
--
ALTER TABLE `bus_type`
  MODIFY `bustype_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departure_info`
--
ALTER TABLE `departure_info`
  MODIFY `departureid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `fromdis`
--
ALTER TABLE `fromdis`
  MODIFY `from_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `passanger`
--
ALTER TABLE `passanger`
  MODIFY `passid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `to_place`
--
ALTER TABLE `to_place`
  MODIFY `to_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `departure_info`
--
ALTER TABLE `departure_info`
ADD CONSTRAINT `departure_info_ibfk_1` FOREIGN KEY (`busname_id`) REFERENCES `bus_name` (`busname_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
