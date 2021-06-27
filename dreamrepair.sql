-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 12:49 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamrepair`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `RequestID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `ExpertID` int(11) NOT NULL,
  `ServiceType` varchar(40) DEFAULT NULL,
  `ServiceAddress` varchar(240) DEFAULT NULL,
  `ProblemDescription` varchar(255) DEFAULT NULL,
  `PaymentDescription` varchar(255) DEFAULT NULL,
  `RequestingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Payment` float DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`RequestID`, `CustomerID`, `ExpertID`, `ServiceType`, `ServiceAddress`, `ProblemDescription`, `PaymentDescription`, `RequestingDate`, `Payment`, `Status`) VALUES
(1, 3, 2, 'Computer', 'Mirpur', 'Keyboard problem', 'Not Paid', '2018-07-09 09:11:21', NULL, 'Canceled'),
(2, 3, 2, 'Computer', 'Mirpur', 'Not working', 'Paid', '2018-07-09 14:42:51', 200, 'Completed'),
(4, 3, 2, 'Computer', 'Mirpur10', 'abar kijani problem', 'Paid', '2019-01-03 23:24:43', 200, 'Completed'),
(13, 3, 2, 'Television', 'Mirpur2', 'ssad', 'Not Paid', '2019-01-04 16:55:01', 0, 'Canceled'),
(14, 3, 2, 'AC', 'Mirpur2', 'jghj', 'Paid', '2019-01-04 17:23:10', 400, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `PhoneNumber` varchar(100) DEFAULT NULL,
  `Rating` int(5) DEFAULT NULL,
  `MinimumPayment` float DEFAULT NULL,
  `SignInDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`, `Address`, `Type`, `PhoneNumber`, `Rating`, `MinimumPayment`, `SignInDate`) VALUES
(1, 'Sabit', 'sabit@gmail.com', '123', 'Mirpur13', 'Admin', '01921212121', 0, 0, '2018-07-09 15:05:50'),
(2, 'Ria', 'ria@gmail.com', '123', 'Mirpur10', 'Expert', '01912121212', 5, 100, '2018-07-09 09:06:44'),
(3, 'Mou', 'mou@gmail.com', '123', 'Mirpur6', 'Expert', '0191111112', 5, 100, '2018-07-09 09:07:31');
(4, 'Nirob', 'nirob@gmail.com', '123', 'Mirpur-10', 'Customer', 'NULL', NULL, NULL, '2019-10-20 00:55:54');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`RequestID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `RequestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
