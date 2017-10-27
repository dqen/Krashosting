-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 27 okt 2017 om 10:47
-- Serverversie: 5.6.35
-- PHP-versie: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nieuws`
--
CREATE DATABASE IF NOT EXISTS `nieuws` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `nieuws`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `nieuwsitems`
--

CREATE TABLE `nieuwsitems` (
  `idnieuws` int(12) NOT NULL,
  `header` varchar(30) NOT NULL,
  `articlesnippet` varchar(900) NOT NULL,
  `article` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `nieuwsitems`
--

INSERT INTO `nieuwsitems` (`idnieuws`, `header`, `articlesnippet`, `article`) VALUES
(1, 'Kop1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut gravida congue accumsan...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut gravida congue accumsan. Pellentesque maximus volutpat mi iaculis convallis. Vivamus pulvinar, libero vitae euismod mattis, leo ex ultrices ligula, in euismod ipsum mauris non metus. Phasellus aliquam porta magna vitae venenatis. Mauris fringilla nisi et hendrerit sagittis. Quisque scelerisque nibh id quam dignissim aliquam. Sed non tempor magna. Morbi feugiat id eros vehicula dictum. Vestibulum nec convallis lacus, id hendrerit nibh. Vestibulum ac sapien ac nisl feugiat eleifend. Praesent et nunc dapibus, dapibus nisl quis, volutpat enim. Maecenas porttitor sollicitudin lacus, eget maximus libero feugiat in. Vestibulum congue nunc id tellus lacinia, a aliquam erat placerat.\r\n\r\nNunc vel ex fringilla, placerat justo in, luctus tellus. Pellentesque imperdiet libero at neque ullamcorper dictum. Sed id accumsan orci, sit amet faucibus nisi. Nullam cursus, nunc id scelerisque luctus, elit sem rhoncus leo, vitae mollis lacus purus at sapien. Duis eget aliquam tortor, ac ullamcorper leo. Sed et bibendum ante. Morbi vestibulum at justo at condimentum. Sed malesuada luctus est, ut volutpat risus consectetur non. Nulla facilisi. Nulla mollis, massa sit amet luctus lacinia, dui felis vestibulum mi, vitae hendrerit ligula nibh eget nulla. Vestibulum pellentesque at metus eget iaculis. Nulla facilisi. Ut iaculis.'),
(2, 'Kop2', 'This snippet is different from the first news item.', 'Ayy fam just testing B)'),
(3, 'Brand new title!', 'This should be an article with at least onehundredandsixtyfive characters. This should not take too long, but It\'s hard to think of a random string of words that don...', 'This should be an article with at least onehundredandsixtyfive characters. This should not take too long, but It\'s hard to think of a random string of words that don\'t really have anything in common. The best would be if this actually surpasses onehundredandsixtyfive characters, so I can test if my class function works all right and fine.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `nieuwsitems`
--
ALTER TABLE `nieuwsitems`
  ADD PRIMARY KEY (`idnieuws`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `nieuwsitems`
--
ALTER TABLE `nieuwsitems`
  MODIFY `idnieuws` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
