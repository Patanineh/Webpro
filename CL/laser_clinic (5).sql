-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 08:48 AM
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
-- Database: `laser clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(6) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Sername` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` varchar(3) NOT NULL,
  `Birthday` date NOT NULL,
  `Phone_number` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Underlying_disease` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Sername`, `Gender`, `Age`, `Birthday`, `Phone_number`, `Email`, `Address`, `Underlying_disease`) VALUES
(100001, 'ppp', 'sss', 'Male', '19', '2024-02-25', '0123456789', 'p@gmail.com', '1', 'ไม่มี');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Sername` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` varchar(3) NOT NULL,
  `Birthday` date NOT NULL,
  `ID_card` varchar(13) NOT NULL,
  `Phone_number` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Job_position` varchar(30) NOT NULL,
  `First_day_of_work` date NOT NULL,
  `Salary` int(10) NOT NULL,
  `Education_level` varchar(30) NOT NULL,
  `Work_experience` varchar(100) NOT NULL,
  `Underlying_disease` varchar(50) NOT NULL,
  `Bank_account` varchar(15) NOT NULL,
  `Current` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `Name`, `Sername`, `Gender`, `Age`, `Birthday`, `ID_card`, `Phone_number`, `Email`, `Address`, `Job_position`, `First_day_of_work`, `Salary`, `Education_level`, `Work_experience`, `Underlying_disease`, `Bank_account`, `Current`) VALUES
(20001, 'ppp3', 'sss3', 'Male', '33', '2024-02-26', '123456', '0123456786', 'p3@gmail.com', '3', '3', '2024-03-03', 3, '3', '3', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `login_customer`
--

CREATE TABLE `login_customer` (
  `ID` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login_customer`
--

INSERT INTO `login_customer` (`ID`, `Password`, `Email`) VALUES
('ps', '123', 'p@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_employee`
--

CREATE TABLE `login_employee` (
  `ID` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login_employee`
--

INSERT INTO `login_employee` (`ID`, `Password`, `Email`) VALUES
('ps3', '1234', 'p3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_manager`
--

CREATE TABLE `login_manager` (
  `ID` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login_manager`
--

INSERT INTO `login_manager` (`ID`, `Password`, `Email`) VALUES
('ps4', '1234567', 'p4@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ID` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Sername` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` varchar(3) NOT NULL,
  `Birthday` date NOT NULL,
  `ID_card` varchar(13) NOT NULL,
  `Phone_number` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Job_position` varchar(30) NOT NULL,
  `First_day_of_work` date NOT NULL,
  `Salary` int(10) NOT NULL,
  `Education_level` varchar(30) NOT NULL,
  `Work_experience` varchar(100) NOT NULL,
  `Underlying_disease` varchar(50) NOT NULL,
  `Bank_account` varchar(15) NOT NULL,
  `Current` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`ID`, `Name`, `Sername`, `Gender`, `Age`, `Birthday`, `ID_card`, `Phone_number`, `Email`, `Address`, `Job_position`, `First_day_of_work`, `Salary`, `Education_level`, `Work_experience`, `Underlying_disease`, `Bank_account`, `Current`) VALUES
(1001, 'ppp4', 'sss4', 'Male', '44', '2024-02-27', '1234567', '0123456785', 'p4@gmail.com', '4', '4', '2024-03-05', 4, '4', '4', '4', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(2) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Course`, `Price`) VALUES
(1, 'แขน', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL,
  `Confirm` varchar(255) NOT NULL,
  `Sale_id` int(11) DEFAULT NULL,
  `Total_price` int(11) DEFAULT NULL,
  `Course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`ID`, `Name`, `Time`, `Date`, `Confirm`, `Sale_id`, `Total_price`, `Course`) VALUES
(1, '2024-03-09', '10:20:00', '2024-03-09', 'Waiting for admin confirmation', 0, 0, ''),
(2, '2024-02-25', '15:23:00', '2024-03-09', 'Waiting for admin confirmation', 0, 0, ''),
(3, '2024-03-09', '15:24:00', '2024-03-09', 'Waiting for admin confirmation', 0, 0, ''),
(4, '2024-03-09', '17:42:00', '2024-03-09', 'Waiting for admin confirmation', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `Sale_id` int(7) NOT NULL,
  `Customer_id` int(5) NOT NULL,
  `Course_id` int(2) NOT NULL,
  `Total_price` int(7) NOT NULL,
  `Sale_date` date NOT NULL,
  `Employee_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `ID` int(4) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Time_to_work` date NOT NULL,
  `Time_off_work` date NOT NULL,
  `Work_shift` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login_customer`
--
ALTER TABLE `login_customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login_employee`
--
ALTER TABLE `login_employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login_manager`
--
ALTER TABLE `login_manager`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`Sale_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100002;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20002;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `Sale_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
