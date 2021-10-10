-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 03:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `contactID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`name`, `address`, `phone_no`, `email`, `comments`, `contactID`) VALUES
('Velma J Macmillan', '217  Riverside Drive, Carlton, GA,30627\r\n', 0, 'efb0d40g1ql@temporar', '', 1),
('Asmaah Abdul-Haqq', '381 E 52nd st', 0, 'asmaah.a.haqq@gmail.', 'ordered 4 candles', 2),
('Asmaah Abdul-Haqq', '381 E 52nd st', 2147483647, 'asmaah.a.haqq@gmail.', 'ordered 2 iphone cases', 6),
('Rebecca G White', '1020  Leroy Lane, LAKE CITY', 605, 'k1xqzblmqk@temporary', 'Ordered one sultry satin sleepwear set', 7),
('Ella D Peterson', '4581  Roguski Road, Shreveport, LA,71101', 318, 'svwi27gbq4m@mail.net', '1 rose-scented candle, 3 white gold Cuban links', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) UNSIGNED NOT NULL,
  `NAME` varchar(75) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `BUSINESS` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `PASSWORD`, `BUSINESS`, `EMAIL`) VALUES
(1, 'Assata Rasheed', '123456', 'Sunrose Boutique', 'assatarasheed02@gmail.com'),
(2, 'test', '$2y$10$qynmzlJRu.FTPnNsUWXjU.a4snPBgQuZJuPkBUJmXhwTIiQalYdPy', 'test', 'test@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
