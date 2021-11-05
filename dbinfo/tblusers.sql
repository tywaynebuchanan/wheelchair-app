-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2021 at 06:37 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wheelchair-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL,
  `timeloggedin` varchar(255) NOT NULL,
  `IschangedPassword` varchar(10) NOT NULL,
  `isActive` varchar(255) NOT NULL,
  `agreedtodisclosure` varchar(10) NOT NULL,
  `isloggedin` varchar(10) NOT NULL,
  `passKey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `username`, `password`, `firstname`, `lastname`, `role`, `timeloggedin`, `IschangedPassword`, `isActive`, `agreedtodisclosure`, `isloggedin`, `passKey`) VALUES
(1, 'tywayne.buchanan@mustardseed.com', '70CCD9007338D6D81DD3B6271621B9CF9A97EA00', 'Tywayne', 'Buchanan', 'Administrator', '', 'Yes', 'YES', '', 'No', ''),
(2, 'Liz', '70CCD9007338D6D81DD3B6271621B9CF9A97EA00', 'Liz', 'Merrick', 'Viewer', '', 'Yes', 'YES', 'Yes', 'No', ''),
(3, 'cordell.huie@mustardseed.com', '70CCD9007338D6D81DD3B6271621B9CF9A97EA00', 'Cordell', 'Huie', 'Viewer', '', 'Yes', '', '', '', ''),
(4, 'dummyuser', '2b6de5b9342f0fec819a265bbf6eba221ae6cbe2', 'Tywayne', 'Buchanan', 'Viewer', '', 'Yes', 'YES', '', '', '0398AC81999954A8046036971CD44330F1D0D05D4A5A708F6EFAC0154942E6830DAF7454ECEFE8F5260259BE053FA6C58FE1CCE00A76397BB69CA4C35B76B9D5'),
(5, 'opal.bailey@mustardseed.com', '70CCD9007338D6D81DD3B6271621B9CF9A97EA00', 'Opal', 'Bailey', 'Administrator', '', 'Yes', 'YES', '', '', ''),
(6, 'claudette.angus@mustardseed.com', '70CCD9007338D6D81DD3B6271621B9CF9A97EA00', 'Claudette', 'Angus', 'Viewer', '', 'Yes', 'YES', 'Yes', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
