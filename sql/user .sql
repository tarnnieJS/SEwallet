-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 09:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `name_title` varchar(20) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Userlevel` varchar(15) NOT NULL,
  `t_email` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `T_ID` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `name_title`, `Fullname`, `Userlevel`, `t_email`, `branch`, `faculty`, `T_ID`) VALUES
(44, 'admin', '1234', 'Staff', 'Tarnie', 'Admin', 'Admin@Email', 'Admin', 'Admin', '1111'),
(46, 'user', '1234', '', '', 'User', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `T_ID` (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
