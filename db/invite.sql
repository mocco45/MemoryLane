-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 03:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invite`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eid` int(11) NOT NULL,
  `gfname` varchar(50) NOT NULL,
  `glname` varchar(50) NOT NULL,
  `bfname` varchar(50) NOT NULL,
  `blname` varchar(50) NOT NULL,
  `edate` date NOT NULL,
  `gdescription` varchar(250) NOT NULL,
  `bdescription` varchar(250) NOT NULL,
  `etime` time NOT NULL,
  `eloc` varchar(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `file_location` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `gfname`, `glname`, `bfname`, `blname`, `edate`, `gdescription`, `bdescription`, `etime`, `eloc`, `userid`, `file_location`, `image`, `createat`) VALUES
(23, 'Juma', 'Witala', 'Peace', 'John', '2022-12-15', 'Familia ya Witala wa Chang\'ombe Dodoma', 'Famlilia ya John wa Arusha', '18:00:00', 'Roma socia', 1, 'basic1.php', 'tim-stagge-yEcKzQtGUgw-unsplash.jpg', '2022-11-09 14:48:34'),
(26, 'Ally', 'Said', 'Jane', 'Ally', '2022-02-25', 'Ewq', 'Qwe2', '15:00:00', 'Qwe', 1, 'standard1.php', 'samantha-gades-RHAtRIT3-CE-unsplash.jpg', '2022-11-09 12:23:58'),
(27, 'Elisante', 'Mark', 'Grace', 'Kapongo', '2022-12-15', 'Familia ya maffa', 'Familia ya kapongo', '15:00:00', 'Kilimani', 8, 'basic1.php', 'tim-stagge-yEcKzQtGUgw-unsplash.jpg', '2022-11-09 12:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `rsvp`
--

CREATE TABLE `rsvp` (
  `rid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `rdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `eid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rsvp`
--

INSERT INTO `rsvp` (`rid`, `fullname`, `email`, `mobile`, `address`, `relation`, `rdate`, `eid`) VALUES
(21, 'Juma Mark', '123@123.123', 654789321, '258doas', 'Groom', '2022-11-09 10:44:39', 23),
(22, 'Jerome Mapile', 'mapile@jerpome.com', 654789654, '124 dkma', 'Bride', '2022-11-09 12:49:05', 27);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`, `createat`) VALUES
(1, '123', '123@123.123', '202cb962ac59075b964b07152d234b70', '2022-11-07 09:18:11'),
(8, 'van', 'van@van.com', '202cb962ac59075b964b07152d234b70', '2022-11-09 12:45:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `rsvp`
--
ALTER TABLE `rsvp`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rsvp`
--
ALTER TABLE `rsvp`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
