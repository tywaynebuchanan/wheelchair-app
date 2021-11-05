-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2021 at 12:56 PM
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
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblrepairs`
--

CREATE TABLE `tblrepairs` (
  `id` int NOT NULL,
  `repairid` int NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `datecompleted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblrepairs`
--

INSERT INTO `tblrepairs` (`id`, `repairid`, `details`, `status`, `datecompleted`) VALUES
(42, 8, 'Repairs: Immediate: Shane: new headrest, adjust laterals, new cushion- 14x14 w/ incontinent cover 02/21 Modifications to seat and back, new chest strap, footbox', 'Assigned', '2021-08-14'),
(22, 9, 'cart- new beanbag', 'Assigned', '2021-08-14'),
(30, 10, 'cart- new beanbag', 'Assigned', '2021-08-14'),
(37, 11, 'Repairs:\r\nImmediate\r\nShane:\r\nfix casters, anti-tilt, adjust seat back\r\n\r\n02/21\r\nQuickie  Serial #: 9508482\r\nNew back 14x14\r\ncalf straps', 'Assigned', '2021-08-14'),
(39, 12, 'Look for new Rigid chair - self propels with feet 14\" floor to seat\r\n\r\nRepairs:\r\nImmediate\r\nShane: caster repair\r\narm pads\r\n\r\n02/21\r\nnew seat back 16x16', 'Assigned', '2021-08-14'),
(43, 14, 'Repairs\r\n\r\nImmediate- \r\nShane\r\nlook for new footrests, if not available let us know as we will need to bring them\r\n\r\n02/21\r\ncalf strap\r\nseat belt', 'Assigned', '2021-08-14'),
(42, 15, 'His chair needs to be repaired', 'Assigned', '2021-08-16'),
(42, 16, 'Needs a new lateral', 'Assigned', '2021-08-16'),
(39, 17, 'Testing', 'Assigned', '2021-08-23'),
(6, 18, 'Checking to see if there is any error', 'Assigned', '2021-08-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblrepairs`
--
ALTER TABLE `tblrepairs`
  ADD PRIMARY KEY (`repairid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblrepairs`
--
ALTER TABLE `tblrepairs`
  MODIFY `repairid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
