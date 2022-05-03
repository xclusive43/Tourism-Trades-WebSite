-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 06:53 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourismtrades`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usname`, `pass`) VALUES
(4, 'ajay', 'ajay'),
(5, 'taba', 'taba');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `categroy` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` varchar(100) DEFAULT NULL,
  `LName` varchar(100) DEFAULT NULL,
  `age` varchar(50) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `full_address` varchar(500) NOT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `adults` varchar(30) NOT NULL,
  `child` varchar(30) NOT NULL,
  `names` varchar(100) NOT NULL,
  `ages` varchar(50) NOT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  `room` varchar(50) NOT NULL,
  `no_room` varchar(50) NOT NULL,
  `bedding` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `T&C` varchar(50) NOT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `Booking_id` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `package_name`, `categroy`, `price`, `Title`, `FName`, `LName`, `age`, `Email`, `full_address`, `Country`, `Phone`, `adults`, `child`, `names`, `ages`, `cin`, `cout`, `nodays`, `room`, `no_room`, `bedding`, `vehicle`, `T&C`, `stat`, `Booking_id`, `userid`) VALUES
(3, 'Ziro-Festival', 'Friends tour/family ', '2000', 'Miss', 'Nabam ', 'yadap', '21', 'yadapnabam43@gmail.com', 'nirjuli,791109,papumpare,arunachal pradesh', 'India', '9089441405', '2', '1', 'nabam yadap\r\nnabam rini\r\nnabam unga\r\n ', '21\r\n23\r\n22', '2018-04-27', '2018-04-30', 3, 'Deluxe', '3', 'Single Bed', 'Standard class', 'agree', 'Confirm', 'TT1701105006', 'yadap');

-- --------------------------------------------------------

--
-- Table structure for table `canclerequest`
--

CREATE TABLE `canclerequest` (
  `userid` varchar(100) NOT NULL,
  `Booking_id` varchar(30) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canclerequest`
--

INSERT INTO `canclerequest` (`userid`, `Booking_id`, `Status`, `Date`, `Time`) VALUES
('yadap', 'TT1701105006', 'confirm', '17/04/2018', '09:48:51pm ');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Package Name` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoofDays` int(50) NOT NULL,
  `Child` int(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Message` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `userid` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `ratings` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`userid`, `comment`, `ratings`) VALUES
('yadap', 'great system  love it...', '*****');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packagename` varchar(50) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `Avail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packagename`, `discription`, `category`, `price`, `Avail`) VALUES
('Bomdila-Tawnag-Tourist-Circuit', 'Th circiut covers a distance of 350 km starting form Tezpur, the headquarter of Sonitpur district in Assam to the 17th century Monastery built on a jutting spur overlooking the wide Tawang valley at an altitude of 10,000 ft.\r\ntourist places are\r\n1.Bhalukpong(Archaeological ruins of king Bhaluka).\r\n2.Tipi(Botanical Paradise of the state).\r\n3.Sessa (orchid sanctuary).\r\n4.Bomdila.\r\n5.Dirang\r\n6.Sela Pass(Second highest Motorable pass at 14000 ft.).\r\n7.Nurang(Trout Fish Hatchery of Cold Water)\r\n', 'Family Tour', '12000', 'yes'),
('Ziro-Festival', 'location Ziro', 'Friends tour/family ', '2000', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `package_price` varchar(50) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL,
  `t_adults` double(8,2) NOT NULL,
  `t_childs` double(8,2) NOT NULL,
  `t_vehicle` double(8,2) NOT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `booking_id`, `package_name`, `category`, `package_price`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `btot`, `noofdays`, `t_adults`, `t_childs`, `t_vehicle`, `fintot`, `userid`) VALUES
(3, 'TT1701105006', 'Ziro-Festival', 'Friends tour/family ', '2000', 'Miss', 'Nabam ', 'yadap', '220', '2.2', 3, '2018-04-27', '2018-04-30', 1980.00, 6.60, 3, 600.00, 150.00, 900.00, 5636.60, 'yadap');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', NULL),
(2, 'Superior Room', 'Double', 'Free', NULL),
(3, 'Superior Room', 'Triple', 'Free', 0),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'Free', NULL),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(10, 'Guest House', 'Single', 'Free', NULL),
(11, 'Guest House', 'Double', 'Free', 0),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `MoblieNumber` varchar(10) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `Password`, `UserName`, `Gender`, `Address`, `MoblieNumber`, `Country`, `Email_Id`, `status`) VALUES
('arun', '1111', 'arun maurya', 'Male', 'nirjuli', '7005192537', 'india', 'arun@gnail.com', 'Accept'),
('rajesh', '55555', 'rajesh', 'Male', 'doimukh', '7005192537', 'india', 'ajayxd43@gmail.com', 'Accept'),
('rini', '666', 'nabam rini', 'Female', 'aalo', '9009009090', 'india', 'rininabam@gmail.com', 'Accept'),
('taba', '1234', 'taba unga', 'Female', 'B.K.MISSION SCHOOL, MIDPU-II', '0762806647', 'india', 'emo@gmail.com', 'Accept'),
('viva', '1234', 'viva prajapati', 'Female', 'Boum kakir mission school midpu ii doimukh', '7005192537', 'india', 'viva43@gmail.com', 'Accept'),
('yadap', 'yadap123', 'nabam yadap', 'Female', 'nirjuli', '9089441405', 'india', 'yadapnabam43@gmail.com', 'Accept');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback` ADD FULLTEXT KEY `id` (`userid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packagename`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
