-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 15, 2022 at 11:20 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `annexbios_maarssen`
--

-- --------------------------------------------------------

--
-- Table structure for table `Klant`
--

CREATE TABLE `Klant` (
  `id` int(9) NOT NULL,
  `voornaam` varchar(256) NOT NULL,
  `achternaam` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Klant`
--

INSERT INTO `Klant` (`id`, `voornaam`, `achternaam`, `email`) VALUES
(1, 'Test', 'Test', 'test@123.nl'),
(2, 'Test', 'Test', 'test@123.nl'),
(3, 'Test', 'Test', 'test@123.nl'),
(4, 'Test', 'Test', 'test@123.nl'),
(5, 'Test', 'Test', 'test@123.nl'),
(6, 'Test', 'Test', 'test@123.nl'),
(7, 'Test', 'Test', 'test@123.nl'),
(8, 'Test', 'Test', 'test@123.nl'),
(9, 'Test', 'Test', 'test@123.nl'),
(10, 'Test', 'Test', 'test@123.nl'),
(11, 'Test', 'Test', 'test@123.nl'),
(12, 'Test', 'Test', 'test@123.nl'),
(13, 'Test', 'Test', 'test@123.nl'),
(14, 'Test', 'Test', 'test@123.nl'),
(15, 'Test', 'Test', 'test@123.nl');

-- --------------------------------------------------------

--
-- Table structure for table `Reserveringen`
--

CREATE TABLE `Reserveringen` (
  `id` int(9) NOT NULL,
  `ticket_normaal` int(2) DEFAULT NULL,
  `ticket_kind` int(2) DEFAULT NULL,
  `ticket_65` int(2) DEFAULT NULL,
  `klant_id` int(9) DEFAULT NULL,
  `vertoning_id` int(9) DEFAULT NULL,
  `betaalwijze` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Reserveringen`
--

INSERT INTO `Reserveringen` (`id`, `ticket_normaal`, `ticket_kind`, `ticket_65`, `klant_id`, `vertoning_id`, `betaalwijze`) VALUES
(1, 2, 0, 0, 13, NULL, '1'),
(2, 2, 0, 0, 14, NULL, 'ideal'),
(3, 2, 0, 0, 15, NULL, 'ideal');

-- --------------------------------------------------------

--
-- Table structure for table `Vertoningen`
--

CREATE TABLE `Vertoningen` (
  `id` int(9) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `zaal` int(1) NOT NULL,
  `film_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Klant`
--
ALTER TABLE `Klant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Reserveringen`
--
ALTER TABLE `Reserveringen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Vertoningen`
--
ALTER TABLE `Vertoningen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Klant`
--
ALTER TABLE `Klant`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Reserveringen`
--
ALTER TABLE `Reserveringen`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Vertoningen`
--
ALTER TABLE `Vertoningen`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
