-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 08:23 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'prem', 'prem123'),
(3, 'xyz', 'xyz123');

-- --------------------------------------------------------

--
-- Table structure for table `maths_marks`
--

CREATE TABLE `maths_marks` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `maths_marks` int(4) NOT NULL,
  `eng_marks` int(4) NOT NULL,
  `science_marks` int(4) NOT NULL,
  `password` varchar(20) NOT NULL,
  `marathon` text NOT NULL,
  `beach` text NOT NULL,
  `blood` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maths_marks`
--

INSERT INTO `maths_marks` (`id`, `name`, `age`, `gender`, `maths_marks`, `eng_marks`, `science_marks`, `password`, `marathon`, `beach`, `blood`) VALUES
(1, 'prem', 20, '', 10, 170, 0, 'prem123', 'Yes', 'Yes', 'Yes'),
(2, 'premraj', 20, '', 0, 0, 0, 'prem123', '', '', ''),
(3, 'satyam', 20, '', 0, 0, 0, 'satyam123', '', 'Yes', 'Yes'),
(4, 'teju', 20, '', 10, 70, 0, 'teju123', 'Yes', '', ''),
(6, 'premm', 20, '', 0, 0, 0, 'prem123', '', '', ''),
(12, 'tanu', 22, '', 0, 0, 0, '123', 'Yes', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maths_marks`
--
ALTER TABLE `maths_marks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `maths_marks`
--
ALTER TABLE `maths_marks`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4444446;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
