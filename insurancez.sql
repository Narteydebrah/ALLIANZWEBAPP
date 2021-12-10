-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 10:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurancez`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL CHECK (`email` like '%@%'),
  `AgentID` int(11) DEFAULT NULL,
  `pswd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`fname`, `email`, `AgentID`, `pswd`) VALUES
('George', 'george.debrah@ashesi.edu.gh', 256, 'Al1as1aa');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL CHECK (`email` like '%@%'),
  `PersonID` int(11) NOT NULL,
  `pswd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`fname`, `email`, `PersonID`, `pswd`) VALUES
('Zach', 'zach@ashesi.edu.gh', 987, 'Zak1wert'),
('Shirley', 'shirley@ashesi.edu.gh', 2311, 'Cast1ert'),
('Eben', 'eben@ashesi.edu.gh', 6711, 'Eboat1wer'),
('Naa', 'naa@ashesi.edu.gh', 7009, 'Nate1gop');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `fname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL CHECK (`email` like '%@%'),
  `PersonID` int(11) DEFAULT NULL,
  `nkin` varchar(20) DEFAULT NULL,
  `cnumber` int(11) DEFAULT NULL,
  `ptype` varchar(30) DEFAULT NULL,
  `nclaims` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`fname`, `email`, `PersonID`, `nkin`, `cnumber`, `ptype`, `nclaims`) VALUES
('Shirleyssss', 'shirley@ashesi.edu.gh', 2311, 'nii', 244678344, 'houses', 0),
('Zach', 'zach@ashesi.edu.gh', 987, 'mike', 239015678, 'motor,house', 0),
('Eben', 'eben@ashesi.edu.gh', 6711, 'kevo', 553410011, 'motor', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`PersonID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `PersonID` (`PersonID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registers`
--
ALTER TABLE `registers`
  ADD CONSTRAINT `registers_ibfk_1` FOREIGN KEY (`PersonID`) REFERENCES `person` (`PersonID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
