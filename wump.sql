-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 11:55 PM
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
-- Database: `sa000822680`
--

-- --------------------------------------------------------

--
-- Table structure for table `wump`
--

CREATE TABLE `wump` (
  `ID` int(10) NOT NULL,
  `row` int(50) NOT NULL,
  `col` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wump`
--

INSERT INTO `wump` (`ID`, `row`, `col`) VALUES
(1, 1, 1),
(2, 4, 5),
(3, 7, 9),
(4, 2, 8),
(5, 4, 4),
(6, 2, 6),
(7, 4, 5),
(8, 3, 3),
(9, 2, 3),
(10, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wump`
--
ALTER TABLE `wump`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
