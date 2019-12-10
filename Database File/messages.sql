-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 09:42 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messages`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminhasan`
--

CREATE TABLE `adminhasan` (
  `SL` int(255) NOT NULL,
  `Text` varchar(1000) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminhasan`
--

INSERT INTO `adminhasan` (`SL`, `Text`, `sender`, `reciever`, `time`) VALUES
(1, 'Hello hasan. Welcome To AIUB---From Admin', 'Admin', 'hasan', '2019-04-27 11:06:57'),
(2, 'Asslaamualikum---From hasan', 'Admin', 'hasan', '2019-04-28 12:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `generalforum`
--

CREATE TABLE `generalforum` (
  `SL` int(11) NOT NULL,
  `Text` varchar(1000) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasanadmin`
--

CREATE TABLE `hasanadmin` (
  `SL` int(255) NOT NULL,
  `Text` varchar(1000) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasanadmin`
--

INSERT INTO `hasanadmin` (`SL`, `Text`, `sender`, `reciever`, `time`) VALUES
(1, 'Hello hasan. Welcome To AIUB---From Admin', 'hasan', 'Admin', '2019-04-27 11:06:57'),
(2, 'Asslaamualikum---From hasan', 'hasan', 'Admin', '2019-04-28 12:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `hasanrobin`
--

CREATE TABLE `hasanrobin` (
  `SL` int(255) NOT NULL,
  `Text` varchar(1000) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasanrobin`
--

INSERT INTO `hasanrobin` (`SL`, `Text`, `sender`, `reciever`, `time`) VALUES
(1, 'Hey man, Its Robin.---From robin', 'hasan', 'robin', '2019-04-26 19:35:33'),
(5, 'Hows Everything?   :)---From robin', 'hasan', 'robin', '2019-04-26 19:40:08'),
(6, 'Hows Life?\r\nUMMMM.---From robin', 'hasan', 'robin', '2019-04-26 19:40:40'),
(7, 'Great .    :p---From hasan', 'hasan', 'robin', '2019-04-26 19:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `hasansunny`
--

CREATE TABLE `hasansunny` (
  `SL` int(255) NOT NULL,
  `Text` varchar(1000) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasansunny`
--

INSERT INTO `hasansunny` (`SL`, `Text`, `sender`, `reciever`, `time`) VALUES
(8, 'Hello---From hasan', 'hasan', 'sunny', '2019-04-25 21:32:05'),
(9, 'Hello hasan---From sunny', 'hasan', 'sunny', '2019-04-25 21:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `robinhasan`
--

CREATE TABLE `robinhasan` (
  `SL` int(255) NOT NULL,
  `Text` varchar(1000) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robinhasan`
--

INSERT INTO `robinhasan` (`SL`, `Text`, `sender`, `reciever`, `time`) VALUES
(1, 'Hey man, Its Robin.---From robin', 'robin', 'hasan', '2019-04-26 19:35:33'),
(5, 'Hows Everything?   :)---From robin', 'robin', 'hasan', '2019-04-26 19:40:08'),
(6, 'Hows Life?\r\nUMMMM.---From robin', 'robin', 'hasan', '2019-04-26 19:40:40'),
(7, 'Great .    :p---From hasan', 'robin', 'hasan', '2019-04-26 19:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `sunnyhasan`
--

CREATE TABLE `sunnyhasan` (
  `SL` int(255) NOT NULL,
  `Text` varchar(1000) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sunnyhasan`
--

INSERT INTO `sunnyhasan` (`SL`, `Text`, `sender`, `reciever`, `time`) VALUES
(8, 'Hello---From hasan', 'sunny', 'hasan', '2019-04-25 21:32:05'),
(9, 'Hello hasan---From sunny', 'sunny', 'hasan', '2019-04-25 21:32:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminhasan`
--
ALTER TABLE `adminhasan`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `generalforum`
--
ALTER TABLE `generalforum`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `hasanadmin`
--
ALTER TABLE `hasanadmin`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `hasanrobin`
--
ALTER TABLE `hasanrobin`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `hasansunny`
--
ALTER TABLE `hasansunny`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `robinhasan`
--
ALTER TABLE `robinhasan`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `sunnyhasan`
--
ALTER TABLE `sunnyhasan`
  ADD PRIMARY KEY (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminhasan`
--
ALTER TABLE `adminhasan`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generalforum`
--
ALTER TABLE `generalforum`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hasanadmin`
--
ALTER TABLE `hasanadmin`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hasanrobin`
--
ALTER TABLE `hasanrobin`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hasansunny`
--
ALTER TABLE `hasansunny`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `robinhasan`
--
ALTER TABLE `robinhasan`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sunnyhasan`
--
ALTER TABLE `sunnyhasan`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
