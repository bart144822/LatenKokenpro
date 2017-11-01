-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 nov 2017 om 15:01
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
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `klant_id` int(11) NOT NULL,
  `voornaam` varchar(20) NOT NULL,
  `achternaam` varchar(25) NOT NULL,
  `straatnaam` varchar(30) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `huisnummer` varchar(6) NOT NULL,
  `plaatsnaam` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `wachtwoord` char(32) NOT NULL,
  `rol` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`klant_id`, `voornaam`, `achternaam`, `straatnaam`, `postcode`, `huisnummer`, `plaatsnaam`, `email`, `wachtwoord`, `rol`) VALUES
(1, 'Henk', 'Boer', 'hoofdstraat', '9444PB', '14', 'Grolloo', 'h.boer@hotmail.com', 'cuby+blizzards62', 'A1'),
(2, 'John', 'Mccluskey', 'Ubbo Emmiussingel', '9711BH', '2', 'Groningen', 'j.mccluskey@mccluskey.com', 'mccluskeynumber1', 'R1'),
(3, 'Gerard', 'Pieters', 'Jadestraat', '9743HB', '65', 'Groningen', 'g.pieters@steakschops.com', 'Geheim', 'R2'),
(4, 'Enrico', 'Crispo', 'Hondsruglaan', '9722SE', '18', 'Groningen', 'e.crispo@monalisa.nl', 'Venetie1874', 'R3'),
(5, 'Qiao', 'Liang', 'Sint Eustatiusstraat', '9715PH', '12', 'Groningen', 'q.liang@reddragon.com', 'Reddragon1687', 'R4'),
(6, 'Pepe', 'Salieri', 'Siriusstraat', '9742KW', '24', 'Groningen', 'p.@peperestaurant.nl', 'Giantisalieri12', 'R5');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klant_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `klant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
