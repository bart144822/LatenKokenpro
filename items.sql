-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 nov 2017 om 12:38
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
-- Tabelstructuur voor tabel `items`
--

CREATE TABLE `items` (
  `product_id` int(11) NOT NULL,
  `restaurant_restaurant_id` int(11) NOT NULL,
  `product_naam` varchar(50) NOT NULL,
  `prijs` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `items`
--

INSERT INTO `items` (`product_id`, `restaurant_restaurant_id`, `product_naam`, `prijs`) VALUES
(1, 1, 'Hamburger', '1.25'),
(2, 1, 'Cheeseburger', '1.50'),
(3, 1, 'Hotdog', '1.75'),
(4, 1, 'Quarter pounder', '2.25'),
(5, 1, 'Big hamburger', '2.50'),
(6, 1, 'Caesar salad', '2.75'),
(7, 1, 'French fries', '1.45'),
(8, 1, 'Sundae icecream', '2.00'),
(9, 1, 'Mccluskey Burger', '2.60'),
(10, 1, 'Mccluskey Special', '3.00'),
(11, 2, 'T-bone', '38.00'),
(12, 2, 'Rib Eye', '32.50'),
(13, 2, 'Runder Steak', '20.50'),
(14, 2, 'Ossenhaasspies', '25.00'),
(15, 2, 'Spareribs', '18.50'),
(16, 2, 'BBQ Mixed Grill', '19.50'),
(17, 2, 'Mexican Beef Stew', '16.50'),
(18, 2, 'Grilled Salmon fillet', '19.50'),
(19, 2, 'Grilled Catfish with Bearnaise', '18.00'),
(20, 2, 'Skewer of Giant prawns', '19.00'),
(21, 3, 'Margherita', '7.00'),
(22, 3, 'Salami', '8.50'),
(23, 3, 'Tonno', '9.00'),
(24, 3, 'Carbonara', '10.00'),
(25, 3, 'Quattro Stagioni', '9.50'),
(26, 3, 'Capriccio', '13.50'),
(27, 3, 'Tagliatelle Al Formaggio', '12.50'),
(28, 3, 'Laane Vegetali', '13.00'),
(29, 3, 'Lasagna Formaggio', '11.00'),
(30, 3, 'Lasagna Capriccio', '12.50'),
(31, 4, 'Dragon soep', '4.80'),
(32, 4, 'Loempia', '4.20'),
(33, 4, 'Nasi goreng', '6.00'),
(34, 4, 'Bami goreng', '6.00'),
(35, 4, 'Mi-fang met gesneden kip', '10.50'),
(36, 4, 'Mi-fang goreng \'singapore', '11.00'),
(37, 4, 'Tjap tjoy en foe yong hai saté', '12.00'),
(38, 4, 'Foe yong hai met krab', '11.50'),
(39, 4, 'Gesneden kipfilet met yu hsiang saus', '13.00'),
(40, 4, 'Babi pangang met pikante saus', '11.50'),
(41, 5, 'Insalata Mista', '4.00'),
(42, 5, 'Insalata mozzarella', '5.50'),
(43, 5, 'Zucchine gamberoni', '11.00'),
(44, 5, 'Alla carbonara', '9.50'),
(45, 5, 'Pollo cacciatore', '17.00'),
(46, 5, 'Scaloppa funghi e peperoni ', '17.00'),
(47, 5, 'Del corsaro ', '10.25'),
(48, 5, 'Del cacciatore', '11.50'),
(49, 5, 'Santa lucia speciale', '9.75'),
(50, 5, 'Buongustaio', '11.50');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `items_restaurant_fk` (`restaurant_restaurant_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `items`
--
ALTER TABLE `items`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`restaurant_restaurant_id`) REFERENCES `restaurant` (`restaurant_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
