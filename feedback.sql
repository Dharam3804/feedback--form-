-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb26.awardspace.net
-- Generation Time: Aug 21, 2020 at 04:27 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3318186_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Sno` int(11) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Subject_Name` varchar(50) NOT NULL,
  `Faculty` varchar(50) NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL,
  `Comments` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Sno`, `Department`, `Course`, `Semester`, `Subject_Name`, `Faculty`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Comments`) VALUES
(1, 'CSE', 'BTECH', '4', 'TOC', 'Nilay Khare', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, ''),
(2, 'CSE', 'BTECH', '4', 'CA', 'Jaytrilok Chaudhary', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, ''),
(3, 'CSE', 'BTECH', '4', 'SE', 'Gagan Vishwakarma', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, ''),
(4, 'CSE', 'BTECH', '4', 'PQT', 'Vijay Bhaskar', 3, 4, 3, 4, 3, 3, 4, 3, 4, 3, ''),
(5, 'CSE', 'BTECH', '4', 'ADA', 'Manish Pandey', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, ''),
(6, 'CSE', 'BTECH', '4', 'DBMS', 'Shweta Jain', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
(7, 'CSE', 'BTECH', '4', 'TOC', 'Nilay Khare', 4, 4, 3, 3, 3, 3, 4, 4, 4, 4, ''),
(8, 'CSE', 'BTECH', '4', 'TOC', 'Nilay Khare', 3, 5, 4, 3, 4, 4, 5, 4, 3, 2, ''),
(9, 'CSE', 'BTECH', '4', 'TOC', 'Nilay Khare', 5, 5, 5, 5, 4, 4, 4, 3, 3, 3, ''),
(10, 'CSE', 'BTECH', '4', 'CA', 'Jaytrilok Chaudhary', 5, 4, 4, 5, 4, 5, 4, 4, 4, 4, ''),
(11, 'CSE', 'BTECH', '4', 'DBMS', 'Shweta Jain', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
(12, 'CSE', 'BTECH', '4', 'DBMS', 'Shweta Jain', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
(13, 'CSE', 'BTECH', '4', 'DBMS', 'Shweta Jain', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
(14, 'CSE', 'BTECH', '4', 'DBMS', 'Shweta Jain', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
(15, 'CSE', 'BTECH', '4', 'DBMS', 'Shweta Jain', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
(16, 'CSE', 'BTECH', '4', 'DBMS', 'Shweta Jain', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
(17, 'CSE', 'BTECH', '4', 'DBMS', 'Shweta Jain', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
(18, 'CSE', 'BTECH', '4', 'DBMS', 'Shweta Jain', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, ''),
(19, 'CSE', 'MTECH', '6', 'ADA', 'Manish Pandey', 4, 3, 3, 4, 4, 4, 4, 3, 4, 4, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
