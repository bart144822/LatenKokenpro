-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 nov 2017 om 15:02
-- Serverversie: 10.1.26-MariaDB
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latenkoken`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL,
  `restaurantnaam` varchar(50) NOT NULL,
  `straatnaam` varchar(30) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `huisnummer` varchar(6) NOT NULL,
  `plaatsnaam` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefoonnummer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurantnaam`, `straatnaam`, `postcode`, `huisnummer`, `plaatsnaam`, `email`, `telefoonnummer`) VALUES
(1, 'Mccluskey', 'Herestraat', '9711LK', '52', 'Groningen', 'info@mccluskey.com', 504881947),
(2, 'Steaks & Chops', 'Grote Markt', '9711LV', '36', 'Groningen', 'info@steakschops.com', 507924947),
(3, 'Mona Lisa', 'Akerkhof', '9711JB', '6', 'Groningen', 'info@monalisa.nl', 508447766),
(4, 'The Red Dragon', 'Schuitendiep', '9711RA', '33', 'Groningen', 'info@reddragon.com', 501865722),
(5, 'Pepe\'s Restaurant', 'Kleine Pelsterstraat ', '9711KN', '2', 'Groningen', 'info@peperestaurant.nl', 506587100);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
