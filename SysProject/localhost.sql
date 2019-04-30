-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2019 at 01:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DB`
--
CREATE DATABASE IF NOT EXISTS `DB` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `DB`;

-- --------------------------------------------------------

--
-- Table structure for table `Advertisement`
--

CREATE TABLE `Advertisement` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `bywhom` varchar(50) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `about` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Advertisement`
--

INSERT INTO `Advertisement` (`id`, `bywhom`, `topic`, `about`) VALUES
(2, 'faculty', 'Admission Alert', 'Admissions will start from 20th january 2018 in lecture hall iit guwahati'),
(3, 'faculty', 'Registration Alert !', 'Registration will begin soon so pack all your credentials and certificate. See You Soon');

-- --------------------------------------------------------

--
-- Table structure for table `Applicant`
--

CREATE TABLE `Applicant` (
  `username` varchar(50) NOT NULL,
  `appnum` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `gatescore` smallint(5) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `prevcolledge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Applicant`
--

INSERT INTO `Applicant` (`username`, `appnum`, `firstname`, `secondname`, `gatescore`, `email`, `prevcolledge`) VALUES
('AmanR', '190101002', 'Aman', 'Raj', 897, 'aman@gmail.com', 'IIT Delhi'),
('LakshyaC', '190101001', 'Lakshya', 'Chowdhary', 1213, 'aman@gmail.com', 'IIT BOMBAY'),
('MayankW0001', '190101000', 'Mayank', 'Wadhwani', 3240, 'monicagupta101@gmail.com', 'IIT Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `ExtraInfo`
--

CREATE TABLE `ExtraInfo` (
  `fieldname` varchar(50) NOT NULL,
  `usefield` smallint(6) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ExtraInfo`
--

INSERT INTO `ExtraInfo` (`fieldname`, `usefield`) VALUES
('Address', 1),
('Blood Group', 0),
('BTech Colledge', 0),
('Permanent Address', 0);

-- --------------------------------------------------------

--
-- Table structure for table `People`
--

CREATE TABLE `People` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `designation` varchar(20) DEFAULT 'student',
  `rollnumber` bigint(20) NOT NULL,
  `webmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `People`
--

INSERT INTO `People` (`username`, `password`, `designation`, `rollnumber`, `webmail`) VALUES
('Faculty', 'faculty', 'faculty', 1, 'facultycse@iitg.ac.in'),
('Staff', 'staff', 'staff', 2, 'staffcse@iitg.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `value` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`id`, `value`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Selection`
--

CREATE TABLE `Selection` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `value` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Selection`
--

INSERT INTO `Selection` (`id`, `value`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `UploadAssignment`
--

CREATE TABLE `UploadAssignment` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `path` varchar(200) NOT NULL,
  `about` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UploadAssignment`
--

INSERT INTO `UploadAssignment` (`id`, `path`, `about`) VALUES
(13, 'Document 210.pdf', 'yes baby take it'),
(14, 'Document 211.pdf', 'yes baby take it'),
(15, 'Document 212.pdf', 'this assignment is to fuck you well'),
(16, 'Flat-Notes3.pdf', 'This is the assignment of formal language and auto');

-- --------------------------------------------------------

--
-- Table structure for table `UploadNotices`
--

CREATE TABLE `UploadNotices` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `path` varchar(200) NOT NULL,
  `about` varchar(50) NOT NULL,
  `bywhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UploadNotices`
--

INSERT INTO `UploadNotices` (`id`, `path`, `about`, `bywhom`) VALUES
(8, 'Document 210.pdf', 'yes baby take it', 'staff'),
(9, 'Document 211.pdf', 'yes baby take it', 'staff'),
(10, 'Flat-Notes2.pdf', 'This Notice is about Cat Race', 'faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Advertisement`
--
ALTER TABLE `Advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Applicant`
--
ALTER TABLE `Applicant`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ExtraInfo`
--
ALTER TABLE `ExtraInfo`
  ADD PRIMARY KEY (`fieldname`);

--
-- Indexes for table `People`
--
ALTER TABLE `People`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Selection`
--
ALTER TABLE `Selection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `UploadAssignment`
--
ALTER TABLE `UploadAssignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `UploadNotices`
--
ALTER TABLE `UploadNotices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Advertisement`
--
ALTER TABLE `Advertisement`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Selection`
--
ALTER TABLE `Selection`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `UploadAssignment`
--
ALTER TABLE `UploadAssignment`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `UploadNotices`
--
ALTER TABLE `UploadNotices`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
