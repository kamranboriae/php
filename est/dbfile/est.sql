-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 07:52 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `est`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) UNSIGNED NOT NULL,
  `ausername` varchar(255) NOT NULL,
  `apassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `ausername`, `apassword`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` int(10) UNSIGNED NOT NULL,
  `cnam` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `cmahal` text COLLATE utf8_persian_ci NOT NULL,
  `cmablagh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `cnam`, `cmahal`, `cmablagh`) VALUES
(1, 'Ú©Ø±Ø§Ù„', 'ÙØ§Ø² ÛŒÚ©', 380000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(10) UNSIGNED NOT NULL,
  `snam` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `sfamily` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `snampedar` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `scodemeli` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `sage` int(11) NOT NULL,
  `ssex` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `cnam` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `tnam` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `susername` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `spassword` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `snam`, `sfamily`, `snampedar`, `scodemeli`, `sage`, `ssex`, `cnam`, `tnam`, `susername`, `spassword`) VALUES
(1, 'Ù…Ø­Ø³Ù†', 'Ø§Ø¨Ø±Ø§Ù‡ÛŒÙ…ÛŒ', 'Ø¨Ù‡Ø§Ø¯Ø±', '2036155012', 18, 'Ù…Ø±Ø¯', 'Ú©Ø±Ø§Ù„', 'h1', 'm1', '123'),
(2, 'Ù…Ø±ÛŒÙ…', 'Ù…Ø±Ø§Ø¯ÛŒ', 'Ø¨Ù‡Ø±Ø§Ù…', '2030630125', 15, 'Ø²Ù†', 'Ú©Ø±Ø§Ù„', 'z1', 'mm1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(10) UNSIGNED NOT NULL,
  `tnam` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `tfamily` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `cnam` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `tusername` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `tpassword` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tnam`, `tfamily`, `cnam`, `tusername`, `tpassword`) VALUES
(1, 'Ø­Ø³ÛŒÙ†', 'Ø§Ù…ÛŒØ¯ÛŒ', 'Ú©Ø±Ø§Ù„', 'h1', '123'),
(2, 'Ø²ÛŒÙ†Ø¨', 'ÛŒÙˆØ³ÙÛŒ', 'Ú©Ø±Ø§Ù„', 'z1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tiid` int(10) UNSIGNED NOT NULL,
  `nam_moshtari` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `codemeli_moshtary` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `mablagh_blit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tiid`, `nam_moshtari`, `codemeli_moshtary`, `phonenumber`, `mablagh_blit`) VALUES
(1, 'ÙØ±Ø§Ù†Ú© Ø¯Ø§ÙˆÙˆØ¯ÛŒ', '2036120195', '09302513385', 28000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tiid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
