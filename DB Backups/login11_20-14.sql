-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2014 at 07:02 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`userID` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(18) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10000020 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`userID`, `email`, `password`, `fName`, `lName`, `age`, `gender`) VALUES
(10000000, 'petty.thief@gmail.com', 'S3rn1ty', 'Malcolm', 'Reynolds', 31, 'Male'),
(10000001, 'ironman@gmail.com', 'BillPBPhil', 'Anthony', 'Stark', 40, 'Male'),
(10000007, 'kittykat@gmail.com', 'c4ts', 'Selena', 'Kyle', 34, 'Female'),
(10000009, 'blackwidow@gmail.com', 'w1dow', 'Natasha', 'Romanova', 26, 'Female'),
(10000014, 'test@gmail.com', 'test', 't', 's', 33, 'Male'),
(10000015, 'test2@hotmail.com', 'test2', 't2', 's2', 34, 'Female'),
(10000019, 'knightrider@outlook.com', 'thehoff', 'David', 'Hasselhoff', 58, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000020;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
