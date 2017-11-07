-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 01:21 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL,
  `restaurantnaam` varchar(50) NOT NULL,
  `straatnaam` varchar(30) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `huisnummer` varchar(6) NOT NULL,
  `plaatsnaam` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefoonnummer` int(11) NOT NULL,
  `imgurl` text,
  `type` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurantnaam`, `straatnaam`, `postcode`, `huisnummer`, `plaatsnaam`, `email`, `telefoonnummer`, `imgurl`, `type`) VALUES
(1, 'Mccluskey', 'Herestraat', '9711LK', '52', 'Groningen', 'info@mccluskey.com', 504881947, 'img/Mccluskey.png', 'Amerikaans'),
(2, 'Steaks & Chops', 'Grote Markt', '9711LV', '36', 'Groningen', 'info@steakschops.com', 507924947, 'img/steak.png', 'Amerikaans'),
(3, 'Mona Lisa', 'Akerkhof', '9711JB', '6', 'Groningen', 'info@monalisa.nl', 508447766, 'img/mona-lisa-restaurant.jpg', 'Italiaans'),
(4, 'The Red Dragon', 'Schuitendiep', '9711RA', '33', 'Groningen', 'info@reddragon.com', 501865722, 'img/red.jpg', 'Chinees'),
(5, 'Pepe\'s Restaurant', 'Kleine Pelsterstraat ', '9711KN', '2', 'Groningen', 'info@peperestaurant.nl', 506587100, 'img/pepes-restaurant.png', 'Italiaans');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
