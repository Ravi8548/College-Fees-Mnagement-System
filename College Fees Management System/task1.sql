-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 06:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud3`
--

-- --------------------------------------------------------

--
-- Table structure for table `task1`
--

CREATE TABLE `task1` (
  `id` int(11) NOT NULL,
  `studentName` text NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `fatherName` text NOT NULL,
  `contactNumber` text NOT NULL,
  `class` enum('1Yr PUC','2Yr PUC','Degree') NOT NULL,
  `course` enum('Science','Commerce') NOT NULL,
  `combination` enum('PCMB','PCMCs','PCME','EGBA','EBACs','BACSt','B.Com','BBA','B.Sc','B.Sc(Hons)','BCA') NOT NULL,
  `au` enum('Aided','Unaided') NOT NULL,
  `markss` text NOT NULL,
  `TMarks` text NOT NULL,
  `percentage` text NOT NULL,
  `category` enum('SC','ST','OBC','GM','Others') NOT NULL,
  `Tuition` text NOT NULL,
  `dmFee` text NOT NULL,
  `Building` text NOT NULL,
  `imFee` text NOT NULL,
  `total` text NOT NULL,
  `pa1` text NOT NULL,
  `pa2` text NOT NULL,
  `created_at2` text NOT NULL,
  `pa3` text NOT NULL,
  `created_at3` text NOT NULL,
  `ba` text NOT NULL,
  `tfiw` text NOT NULL,
  `created_at1` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task1`
--

INSERT INTO `task1` (`id`, `studentName`, `gender`, `fatherName`, `contactNumber`, `class`, `course`, `combination`, `au`, `markss`, `TMarks`, `percentage`, `category`, `Tuition`, `dmFee`, `Building`, `imFee`, `total`, `pa1`, `pa2`, `created_at2`, `pa3`, `created_at3`, `ba`, `tfiw`, `created_at1`) VALUES


--
-- Indexes for dumped tables
--

--
-- Indexes for table `task1`
--
ALTER TABLE `task1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task1`
--
ALTER TABLE `task1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
