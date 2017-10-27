-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2017 at 08:13 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakketen`
--
CREATE DATABASE IF NOT EXISTS `pakketen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pakketen`;

-- --------------------------------------------------------

--
-- Table structure for table `pakket`
--

DROP TABLE IF EXISTS `pakket`;
CREATE TABLE `pakket` (
  `idpakket` int(11) NOT NULL,
  `naam` text NOT NULL,
  `omschrijving` text NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakket`
--

INSERT INTO `pakket` (`idpakket`, `naam`, `omschrijving`, `prijs`) VALUES
(1, 'Pakket1', 'nog invullen', 0),
(2, 'Pakket2', 'nog invullen\r\n', 0),
(3, 'Pakket3', 'nog invullen', 0),
(4, 'Pakket4', 'custom', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakket`
--
ALTER TABLE `pakket`
  ADD PRIMARY KEY (`idpakket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakket`
--
ALTER TABLE `pakket`
  MODIFY `idpakket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
