-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 12:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `CompanyName` varchar(200) NOT NULL,
  `companyCity` varchar(200) NOT NULL,
  `companyAdress` varchar(200) NOT NULL,
  `phoneNum` bigint(200) NOT NULL,
  `CompanySize` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` int(200) NOT NULL,
  `status` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `CompanyName`, `companyCity`, `companyAdress`, `phoneNum`, `CompanySize`, `email`, `password`, `type`, `status`) VALUES
(7, 'hamza', 'bang', 'burewala', 'joah', 2323344567, 6, 'hamzamunir@gmail.com', 'Dellomen786', 0, 1),
(8, 'fahd', 'muqit', 'lahore', 'johar town', 3417301491, 5, 'fahadmunir78617@gmail.com', 'Dellomen786', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `appliedjob`
--

CREATE TABLE `appliedjob` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `studentfname` varchar(255) NOT NULL,
  `studentlname` varchar(255) NOT NULL,
  `studentemail` varchar(255) NOT NULL,
  `cv` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cdesc` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `empid` int(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliedjob`
--

INSERT INTO `appliedjob` (`id`, `cname`, `studentfname`, `studentlname`, `studentemail`, `cv`, `status`, `cdesc`, `cid`, `empid`) VALUES
(4, 'web Development', 'hamza', 'munir', 'hamza@gmail.com', 'old.pdf', 'Pending', 'Next Bridge requires a web developer internee\r\nwho have experience in php javascript and html', 24, 8),
(5, 'Android Development', 'hamza', 'munir', 'hamza@gmail.com', 'old.pdf', 'Pending', 'johar town', 25, 7);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `employerid` int(200) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `csalary` int(10) NOT NULL,
  `ccity` varchar(255) NOT NULL,
  `cdesc` varchar(255) NOT NULL,
  `cexperience` varchar(255) NOT NULL,
  `clogo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `employerid`, `cname`, `csalary`, `ccity`, `cdesc`, `cexperience`, `clogo`) VALUES
(24, 8, 'web Development', 15000, 'lahore', 'Next Bridge requires a web developer internee\r\nwho have experience in php javascript and html', 'fresh candidate', '../upload/Muqit logo 2-01-01.png'),
(25, 7, 'Android Development', 34534, 'lahore', 'johar town', '2', '../upload/22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `cv` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `email`, `password`, `address`, `city`, `contact`, `qualification`, `stream`, `skills`, `about`, `state`, `cv`) VALUES
(7, 'hamza', 'munir', 'hamza@gmail.com', 'Dellomen786', 'nemat colony gagooo', 'lahore', 3417301491, 'bscs', '2', 'laravel', 'notning ', 'punjab', 'old.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliedjob`
--
ALTER TABLE `appliedjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `appliedjob`
--
ALTER TABLE `appliedjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
