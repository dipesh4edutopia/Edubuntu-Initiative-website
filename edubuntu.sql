-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 04:32 AM
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
-- Database: `edubuntu`
--

-- --------------------------------------------------------

--
-- Table structure for table `global`
--

CREATE TABLE `global` (
  `likes` mediumint(9) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `global`
--

INSERT INTO `global` (`likes`, `downloads`) VALUES
(8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `sem` int(10) DEFAULT NULL,
  `branch` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `valid` varchar(10) NOT NULL,
  `likes` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`email`, `password`, `sem`, `branch`, `name`, `valid`, `likes`) VALUES
('hello@123.com', '123', NULL, NULL, NULL, 'true', 0),
('hi2@gmail.com', '1234', 2, 'IT', 'hi', 'false', 0),
('hi3@gmail.com', 'pass', 0, '', '', 'true', 0),
('hi4@gmail.com', 'passw', NULL, NULL, NULL, 'true', 0),
('hi@gmail.com', '1234', 1, 'comp', 'hi', 'true', 1),
('hi@hi.com', 'hi', NULL, NULL, NULL, 'true', 1),
('mohit@123.com', '1234', NULL, NULL, NULL, 'true', 1),
('mohit@mohit.com', '123', NULL, NULL, NULL, 'true', 1),
('mohitburkule@m.b', 'm', 1, 'Computer', NULL, 'true', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `valid` varchar(10) NOT NULL,
  `likes` mediumint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`email`, `password`, `valid`, `likes`) VALUES
('hi@hi.hi', '123', 'true', 0),
('m@m.m', 'm', 'true', 0),
('teachermohit@tea.ch', 'g', 'true', 0),
('tea@tea.t', 'a', 'true', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
