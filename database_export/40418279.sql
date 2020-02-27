-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2019 at 12:38 AM
-- Server version: 10.3.18-MariaDB-1:10.3.18+maria~xenial
-- PHP Version: 7.0.33-0ubuntu0.16.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `40418279`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authorID` int(10) UNSIGNED NOT NULL,
  `firstName` char(50) NOT NULL,
  `lastName` char(50) NOT NULL,
  `address` char(250) DEFAULT NULL,
  `phoneNumber` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authorID`, `firstName`, `lastName`, `address`, `phoneNumber`) VALUES
(1, 'John', 'Doe', '1 Queen Street, London', '+441234567890'),
(3, 'Jason', 'Tsot', 'Gorgie Road, Edinburh', '+440987654321'),
(4, 'Georgia', 'Kanavou', 'Slateford, Ediburgh', '+449988774455'),
(5, 'Chris', 'Karg', 'Ardmillan, Edinburgh', '+441122334455');

-- --------------------------------------------------------

--
-- Table structure for table `authors2`
--

CREATE TABLE `authors2` (
  `authorID` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors2`
--

INSERT INTO `authors2` (`authorID`, `firstName`, `lastName`, `address`, `phoneNumber`) VALUES
(1, 'John', 'Doe', '1 Queen Street, London', '+112233445566'),
(3, 'Jason', 'Tsotoulidis', 'Slateford, Edinburgh', '07414133370'),
(4, 'Georgia', 'Kanavou', 'Gorgie, Edinburgh', '+554868498545'),
(5, 'Chris', 'Kargidis', 'Ardmillan, Edinburgh', '+4544524525325');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(10) UNSIGNED NOT NULL,
  `title` char(200) NOT NULL,
  `authorID` int(10) UNSIGNED NOT NULL,
  `edition` int(10) DEFAULT NULL,
  `ISBN` char(30) DEFAULT NULL,
  `publicationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `title`, `authorID`, `edition`, `ISBN`, `publicationDate`) VALUES
(1, 'The passing of time', 1, 1, '5555', '0000-00-00'),
(2, 'Timeless', 1, 1, '6666', '0000-00-00'),
(3, 'Limitless', 2, 1, '7777', '0000-00-00'),
(4, 'Apocalypse', 3, 2, '8888', '0000-00-00'),
(5, 'Never', 4, 2, '9999', '0000-00-00'),
(6, 'Now it is the time', 5, 5, '1111', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(10) UNSIGNED NOT NULL,
  `firstName` char(50) NOT NULL,
  `lastName` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `password1` char(50) NOT NULL,
  `password2` char(50) NOT NULL,
  `address` char(250) NOT NULL,
  `postcode` char(20) NOT NULL,
  `homeNumber` char(20) DEFAULT NULL,
  `mobileNumber` char(20) DEFAULT NULL,
  `day` char(2) DEFAULT NULL,
  `month` char(2) DEFAULT NULL,
  `year` char(40) DEFAULT NULL,
  `agree` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `firstName`, `lastName`, `email`, `password1`, `password2`, `address`, `postcode`, `homeNumber`, `mobileNumber`, `day`, `month`, `year`, `agree`) VALUES
(86, 'natasa', 'tsotoulidou', 'natasa@gmail.com', '6946287163', '6946287163', 'eptapurgiou sukies', 'EH11 1GW', '6789098765', '56788765', '1', '1', '1999', '0'),
(106, 'Akis', 'Tsotoulidis', 'tsotoul@gmail.com', '555', '555', '6 Adamantiou Korai street\r\nSikies', 'EH11 1TN', '555', '55', '8', '8', '8', '1'),
(107, 'Georgia', 'Kanavou', 'georgia@hotmail.com', '777', '777', '21/3\r\nMurieston Lane', 'EH11 2LX', '777', '777', '4', '4', '4', '0'),
(109, 'Stefanos', 'Tsitsipas', 'stefanos@tennis.gr', '11111', '11111', 'Monaco\r\n', 'EH3 8HP', '111111', '111111', '17', '5', '2012', '1'),
(126, 'Alexandros', 'Kontopidis', 'alexandros@kontopidis', '151515', '151515', 'Ilion', 'EH11 1TN', '878564654', '6854541564', '1', '1', '1', '1'),
(128, 'Stefanos', 'Tsotoulidis', 'tsotoul@gmail.com', '44', '44', '444444444', 'EH1 1TN', '4444444444444', '44444444444', '1', '1', '1995', '1'),
(129, 'Tom', 'Cruise', 'tom@cruise.com', '5656', '5656', 'holywook', 'EH9 1JB', '212121', '212121', '1', '1', '1984', '1'),
(130, 'Iason', 'Tsotoulidis', 'manager@manager.com', '1212', '1212', 'Gorgie', 'EH9 1JB', '123456789', '123456789', '1', '1', '1992', '1'),
(131, 'Iason', 'Tsotoulidis', 'test@test.com', '40418279', '40418279', 'Napier University', 'EH3 8HP', '123456789', '23456789', '1', '1', '1986', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) UNSIGNED NOT NULL,
  `user` char(20) NOT NULL,
  `pwd` char(40) NOT NULL,
  `email` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `user`, `pwd`, `email`) VALUES
(4, 'jason', 'fa246d0262c3925617b0c72bb20eeb1d', 'tsotoul@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `visitorID` int(10) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `affiliation` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitorID`, `name`, `email`, `affiliation`) VALUES
(1, 'Jason Tsotoulidis', '', ''),
(2, 'Jason Tsotoulidis', '', ''),
(3, 'Jason Tsotoulidis', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorID`);

--
-- Indexes for table `authors2`
--
ALTER TABLE `authors2`
  ADD PRIMARY KEY (`authorID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authorID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `authors2`
--
ALTER TABLE `authors2`
  MODIFY `authorID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `visitorID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
