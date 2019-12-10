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
-- Database: `aiub community`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `SL` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Edition` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Approval` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`SL`, `Name`, `Author`, `Edition`, `Price`, `User`, `Image`, `Dir`, `Phone`, `Email`, `Description`, `Approval`) VALUES
(14, 'Artificial Intelligence: A Modern Approach', 'Peter Norvig and Stuart J. Russell', '2nd', '120', 'hasan', 'Artificial-Intelligence-A-Modern-Approach-3rd-Edition.jpg', 'images/Artificial-Intelligence-A-Modern-Approach-3rd-Edition.jpg', '01833049368', 'hasan@gmail.com', 'Book is in best condition. No page is torned.', 'yes'),
(15, 'Let Us C', 'Yashavant Kanetkar', '14th', '50 Tk', 'sunny', '511l5OauWmL._SX347_BO1,204,203,200_.jpg', 'images/511l5OauWmL._SX347_BO1,204,203,200_.jpg', '0183154698', 'sunny@gmail.com', 'Book is in good condition. Some pages are missing.', 'yes'),
(16, 'Introduction to Algorithms', 'Charles E. Leiserson, Clifford Stein, Ronald Rivest, and Thomas H. Cormen', '3rd', '100', 'sunny', 'introduction-to-algorithms-original-imaf8cfwr7edgndb.jpeg', 'images/introduction-to-algorithms-original-imaf8cfwr7edgndb.jpeg', '01833555368', 'sunny@gmail.com', 'Book is in best condition. No page is torned.', 'yes'),
(17, 'Teach yourself C++', 'Herbert Schildt', '3rd', '105', 'fahad', 'teach yourself c++.jpg', 'images/teach yourself c++.jpg', '01833047683', 'fahad@gmail.com', 'Book is in best condition.', 'yes'),
(18, 'Database System Concepts', 'Avi Silberschatz, Henry F. Korth, and S. Sudarshan', '6th', '150', 'mahmud', '81Vp+cPhJ5L.jpg', 'images/81Vp+cPhJ5L.jpg', '01838888368', 'mahmud@gmail.com', 'Best book and condition.', 'yes'),
(19, 'Data Structures', 'Seymour Lipschutz', '1st', '70', 'efaz', '51gOcNM4yDL._SX366_BO1,204,203,200_.jpg', 'images/51gOcNM4yDL._SX366_BO1,204,203,200_.jpg', '01898649368', 'efaz@gmail.com', 'Book is in  good condition.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `counseling`
--

CREATE TABLE `counseling` (
  `SL` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `PreCourse` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `User` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counseling`
--

INSERT INTO `counseling` (`SL`, `Name`, `Department`, `PreCourse`, `Time`, `User`) VALUES
(1, 'Hasibul Hasan', 'CSE', 'Algorithm, PL1, Data Structure', 'Mon 2-3.', 'hasan'),
(2, 'Efaz Ahmed', 'CSE', 'Maths and Data Structures', 'Tuesday10am to 2pm.', 'efaz'),
(3, 'S.M Mahmud', 'CSSE', 'PL1', 'Thursday 10am to 2pm.', 'mahmud'),
(4, 'Fazle Rabbi Sunny', 'CSSE', 'C#, Math 1', 'Wednesday 10am to 2pm.', 'sunny');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `SL` int(255) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Road` varchar(255) NOT NULL,
  `House` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Rent` varchar(255) NOT NULL,
  `AvailableFrom` varchar(255) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Approval` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`SL`, `User`, `Type`, `Road`, `House`, `Area`, `Rent`, `AvailableFrom`, `Description`, `Image`, `Dir`, `Approval`) VALUES
(2, 'hasan', 'Room', '03', '28', 'Bashundhara, Dhaka', '10,000 TK', 'May 2019', 'The room has one balcony and a wall cabinet with attaced washroom.', '5ba4be66cd34b7.31528394.jpg', 'images/5ba4be66cd34b7.31528394.jpg', 'yes'),
(3, 'hasan', 'Sit', '5', '312', 'Gulshan', '5000 TK', 'July 2019', 'One sharing room is up for rent.', '56081-8.jpg', 'images/56081-8.jpg', 'yes'),
(4, 'sunny', 'Room', '03', '2', 'banani', '5000 TK', 'June 2019', 'The room is good condition. the flat is new. Shared with 4 other members.', '5635782.jpg', 'images/5635782.jpg', 'yes'),
(5, 'fahad', 'Sit', '15', '11A', 'Nodda', '4500', 'May 2019', 'The sit is shared with another person. Nonsmoker is encouraged.', '5b3088991283a2.62661572.jpg', 'images/5b3088991283a2.62661572.jpg', 'yes'),
(6, 'mahmud', 'Room', '20', '33/A', 'Baridhara', '8000TK', 'July 2019', 'The flat will be shared with 3 other memebers. Quite and friendly place.', 'medium-Apartment-room-available-for-executive-bachelor-at-Kumarapuram-1.jpg', 'images/medium-Apartment-room-available-for-executive-bachelor-at-Kumarapuram-1.jpg', 'yes'),
(7, 'efaz', 'Sit', '5', '99/A', 'Bashundhara, Dhaka', '5000 TK', 'June 2019', 'A sit in a luxurious flat is up for rent. Contact ASAP.', 'room-at-muroor-rd-for-executive-bachelors-from-pakistanindia-2-in-al-ittihad-59ce7e362e1f4_original.jpeg', 'images/room-at-muroor-rd-for-executive-bachelors-from-pakistanindia-2-in-al-ittihad-59ce7e362e1f4_original.jpeg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sl` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sl`, `username`, `password`, `type`) VALUES
(1, 'Admin', 'admin123123', 'admin'),
(6, 'hasan', '123123123@', 'user'),
(7, 'sunny', '321321321@', 'user'),
(8, 'fahad', 'fahad123@', 'user'),
(9, 'mahmud', 'mahmud123@', 'user'),
(10, 'efaz', 'efaz123@', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `SL` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ID` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`SL`, `Username`, `Name`, `ID`, `Email`, `Password`) VALUES
(1, 'Admin', 'Hasan Mohammad', '16-32847-3', 'Hasan@gmail.com', 'admin@@##'),
(2, 'sunny', 'Fazle Rabbi Sunny', '16-32808-3', 'sunny@gmail.com', '321321321@'),
(3, 'hasan', 'Hasibul Hasan Shanto', '16-32847-3', 'hasanibnesaleh@gmail.com', '123123123@'),
(4, 'fahad', 'Fahad Bin Yousuf', '16-32888-3', 'fahad@gmail.com', 'fahad123@'),
(5, 'mahmud', 'S.M Mahmud', '15-32166-3', 'mahmud@gmail.com', 'mahmud123@'),
(6, 'efaz', 'Efaz Ahmed', '16-32047-3', 'efaz@yahoo.com', 'efaz123@');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `SL` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`SL`, `Name`, `Dir`, `Title`, `Type`, `Course`, `Department`) VALUES
(10, 'Accounting Principles, 11th edition.pdf', 'files/Accounting Principles, 11th edition.pdf', 'Accounting Principles', 'Book', 'Principle Of Accounting', 'FBA'),
(11, 'Solution of Accounting Principles By Weygandt, 9th Edition.zip', 'files/Solution of Accounting Principles By Weygandt, 9th Edition.zip', 'Accounting Principles Solution', 'Book(Solution)', 'Principle Of Accounting', 'FBA'),
(12, 'Let_Us_C_-_Yashwant_Kanetkar_5th_EDITION.pdf', 'files/Let_Us_C_-_Yashwant_Kanetkar_5th_EDITION.pdf', 'Let Us C', 'Book', 'Programming Language 1', 'FSIT'),
(13, 'teach yourself c++.pdf', 'files/teach yourself c++.pdf', 'Teach yourself c++', 'Book', 'Programming Language 2', 'FSIT'),
(14, 'CourseOutline PrinEconomics.doc', 'files/CourseOutline PrinEconomics.doc', 'Principles of Economics Course Outline', 'Course outline', 'Principle Of Economics ', 'FASS'),
(15, 'introduction-to-algorithms-3rd-edition.pdf', 'files/introduction-to-algorithms-3rd-edition.pdf', 'Introduction to Algorithms', 'Book', 'Algorithms', 'FSIT'),
(16, 'Fundamentals of Electric Circuits 4th ed - C. Alexander, M. Sadiku (McGraw-Hill, 2009) WW.pdf', 'files/Fundamentals of Electric Circuits 4th ed - C. Alexander, M. Sadiku (McGraw-Hill, 2009) WW.pdf', 'Fundamentals of Electric Circuits', 'Book', 'ELECTRICAL CIRCUITS -1', 'FE'),
(17, 'boylestad-introductory-circuit-analysis-11th-edition .pdf', 'files/boylestad-introductory-circuit-analysis-11th-edition .pdf', 'Introductory Circuit Analysis', 'Book', 'ELECTRICAL CIRCUITS -1', 'FE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `counseling`
--
ALTER TABLE `counseling`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `counseling`
--
ALTER TABLE `counseling`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sl` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
