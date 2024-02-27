-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 08:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Sername` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Birthdate` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`ID`, `Name`, `Sername`, `Email`, `Phone`, `Birthdate`, `Gender`, `Address`) VALUES
(1, 'Patanin', 'Phomsisuk', 'patanineh@gmail.com', '0931903172', '2024-02-14', 'male', '203 หมู่1 ต.แม่วะ'),
(2, 'ปธานิน', ' พรหมศรีสุข', 'patanineh@gmail.com', '0931903172', '2004-09-15', 'male', '203 หมู่1 ต.แม่วะ อ.เถิน จ.ลำปาง 52230'),
(3, 'Patanin', 'Phomsisuk', 'patanineh@gmail.com', '0931903172', '2020-06-16', 'female', '203 หมู่1 ต.แม่วะ อ.เถิน จ.ลำปาง 52230'),
(4, 'Patanin', 'Phomsisuk', 'patanineh@gmail.com', '0931903172', '2021-02-28', 'male', '203 Village No.1 Maeไพไำพไa'),
(5, 'Patanin', 'Phomsisuk', 'patanineh@gmail.com', '0931903172', '2021-02-28', 'male', '203 Village No.1 Maeไพไำพไa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
