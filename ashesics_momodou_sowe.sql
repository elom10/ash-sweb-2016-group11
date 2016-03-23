-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2016 at 10:07 PM
-- Server version: 5.5.48-cll
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ashesics_momodou_sowe`
--

-- --------------------------------------------------------

--
-- Table structure for table `Equipment`
--

CREATE TABLE IF NOT EXISTS `Equipment` (
  `equipID` int(11) NOT NULL,
  `equipName` varchar(200) NOT NULL,
  PRIMARY KEY (`equipID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itPersonnel`
--

CREATE TABLE IF NOT EXISTS `itPersonnel` (
  `username` varchar(200) NOT NULL,
  `personnelID` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`personnelID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itPersonnel`
--

INSERT INTO `itPersonnel` (`username`, `personnelID`, `firstname`, `lastname`, `email`, `password`) VALUES
('segla.carlos', 123456, 'Segla', 'Carlos', 'segla.carlos@ashesi.edu.gh', 'itpersonnel'),
('segla.carlos', 78901, 'Segla', 'Carlos', 'segla.carlos@ashesi.edu.gh', 'segla12'),
('gloria.kuweke', 654321, 'Gloria', 'Kuweke', 'gloria.kuweke@ashesi.edu.gh', 'gloria12');

-- --------------------------------------------------------

--
-- Table structure for table `LabEquipment`
--

CREATE TABLE IF NOT EXISTS `LabEquipment` (
  `labID` int(11) NOT NULL,
  `equipID` int(11) NOT NULL,
  KEY `labequipment_ibfk_1` (`equipID`),
  KEY `labequipment_ibfk_2` (`labID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Labs`
--

CREATE TABLE IF NOT EXISTS `Labs` (
  `labID` int(11) NOT NULL,
  `labName` enum('McNulty Foundation Design Lab','science lab','electronic lab','mechanical engineering lab','Lab222','Lab221') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE IF NOT EXISTS `problem` (
  `problemID` int(11) NOT NULL AUTO_INCREMENT,
  `equipID` int(11) NOT NULL,
  `labID` int(11) NOT NULL,
  PRIMARY KEY (`problemID`),
  KEY `equipID` (`equipID`),
  KEY `labID` (`labID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `USERCODE` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(30) NOT NULL,
  `PWORD` varchar(36) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `USERGROUP` int(11) NOT NULL,
  `STATUS` enum('DISABLED','NEWUSER','ENABLED','') NOT NULL,
  `PERMISSION` set('VIEW','UPDATE','DELETE','ADD') NOT NULL,
  PRIMARY KEY (`USERCODE`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USERCODE`, `USERNAME`, `PWORD`, `FIRSTNAME`, `LASTNAME`, `USERGROUP`, `STATUS`, `PERMISSION`) VALUES
(1, 'momodou', 'qwesjsa', 'Korka', 'sowe', 1, 'DISABLED', 'VIEW'),
(2, 'Abdoulie', 'sahfdhfdjh', 'Abdoulie K ', 'Jallow', 2, 'DISABLED', 'UPDATE'),
(3, 'Cherno', 'hdshsksf', 'Cherno A', 'Jallow', 1, 'ENABLED', 'VIEW'),
(4, 'Khadijatou', 'dghsdjdsksd', 'Khadijatou K', 'sowe', 2, 'NEWUSER', 'ADD'),
(5, 'Alpha Amadou', 'hjdksoad', 'Alpha', 'sowe', 3, 'DISABLED', 'UPDATE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
