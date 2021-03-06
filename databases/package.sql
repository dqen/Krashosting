-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2018 at 10:53 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krashosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE `package` (
  `idpackage` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`idpackage`, `name`, `description`, `visible`, `price`) VALUES
(1, 'basis pakket', '4 GB opslag\r\n1 domein\r\n\r\n\r\n\r\n\r\n\r\n', 1, '24,50 per jaar'),
(2, 'site builder basic', '6 GB opslag\r\n4 domeinen\r\n\r\n\r\n\r\n\r\n\r\n', 1, '28,50 per jaar'),
(3, 'pro pakket', '16 GB opslag\r\n12 domeinen\r\n\r\n\r\n\r\n\r\n\r\n', 1, '32,50 per jaar'),
(4, 'custom', 'voor een op maat gemaakt pakket kunt i contact met ons opnemen via de contact pagina', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`idpackage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `idpackage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
