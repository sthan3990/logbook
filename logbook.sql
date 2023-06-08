-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 11:26 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `ID` tinyint(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`ID`, `Username`, `Password`, `Email`, `Firstname`, `Lastname`) VALUES
(1, 'sk3han', 'p@ssw0rd1234', 'hanpc14@gmail.com', 'Stephen', 'Han'),
(2, 'Bob69420', '3Yn4$zT&', 'ssw0rd2@gmail.com', 'Bobby', 'VB0'),
(3, 'p@dsw0rd', 'p@ssw0rd1234A', 'han203@gmail.com', 'Stephen', 'Han');

-- --------------------------------------------------------

--
-- Table structure for table `logbookentries`
--

CREATE TABLE `logbookentries` (
  `ID` tinyint(3) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logbookentries`
--

INSERT INTO `logbookentries` (`ID`, `date`, `time`, `text`) VALUES
(1, '2019-08-15', '14:55:51', '					 \r\n				helloh'),
(2, '2019-08-15', '14:55:58', '					 \r\n				hasad'),
(3, '2019-08-15', '15:21:50', '					 \r\nhello how are you '),
(4, '2019-08-15', '15:55:08', ' \r\n				hasdasd'),
(5, '2019-08-15', '16:41:38', '93heloa'),
(6, '2019-08-15', '16:41:57', 'hello1234'),
(7, '2019-08-15', '16:42:07', 'how are you today?'),
(8, '2019-08-15', '16:42:38', 'hrelo'),
(9, '2019-08-15', '16:42:42', 'hrelo'),
(10, '2019-08-15', '16:43:21', 'hrelo'),
(11, '2019-08-15', '17:23:25', 'hello@gmail.comaheidjiasjd'),
(12, '2019-08-15', '17:23:28', 'hello@gmail.comaheidjiasjd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logbookentries`
--
ALTER TABLE `logbookentries`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `ID` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logbookentries`
--
ALTER TABLE `logbookentries`
  MODIFY `ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
