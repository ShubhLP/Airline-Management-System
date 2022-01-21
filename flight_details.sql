-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 01:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight details`
--

CREATE TABLE `flight details` (
  `flightname` varchar(25) NOT NULL,
  `pnumber` int(5) NOT NULL,
  `firstclassfare` int(10) NOT NULL,
  `businessclassfare` int(10) NOT NULL,
  `economyclassfare` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight details`
--

INSERT INTO `flight details` (`flightname`, `pnumber`, `firstclassfare`, `businessclassfare`, `economyclassfare`) VALUES
('Boeing', 11123, 50000, 25000, 10000),
('Boeing', 12334, 50000, 25000, 10000),
('Emirates', 12345, 5000, 2500, 1000),
('Emirates', 13344, 50000, 25000, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight details`
--
ALTER TABLE `flight details`
  ADD PRIMARY KEY (`pnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight details`
--
ALTER TABLE `flight details`
  MODIFY `pnumber` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13345;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
