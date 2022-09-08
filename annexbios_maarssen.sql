-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 08, 2022 at 12:44 PM
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
  `email` varchar(256) NOT NULL,
  `reservering_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Reserveringen`
--

CREATE TABLE `Reserveringen` (
  `id` int(9) NOT NULL,
  `ticket_normaal` int(2) NOT NULL,
  `ticket_kind` int(2) NOT NULL,
  `ticket_65` int(2) NOT NULL,
  `klant_id` int(9) NOT NULL,
  `vertoning_id` int(9) NOT NULL,
  `betaalwijze` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Reserveringen`
--
ALTER TABLE `Reserveringen`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Vertoningen`
--
ALTER TABLE `Vertoningen`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
