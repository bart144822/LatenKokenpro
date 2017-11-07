-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 01:35 PM
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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `product_id` int(11) NOT NULL,
  `restaurant_restaurant_id` int(11) NOT NULL,
  `product_naam` varchar(50) NOT NULL,
  `prijs` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
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

-- --------------------------------------------------------

--
-- Table structure for table `klant`
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
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`klant_id`, `voornaam`, `achternaam`, `straatnaam`, `postcode`, `huisnummer`, `plaatsnaam`, `email`, `wachtwoord`, `rol`) VALUES
(1, 'Henk', 'Boer', 'hoofdstraat', '9444PB', '14', 'Grolloo', 'h.boer@hotmail.com', 'cuby+blizzards62', 'A1'),
(2, 'John', 'Mccluskey', 'Ubbo Emmiussingel', '9711BH', '2', 'Groningen', 'j.mccluskey@mccluskey.com', 'mccluskeynumber1', 'R1'),
(3, 'Gerard', 'Pieters', 'Jadestraat', '9743HB', '65', 'Groningen', 'g.pieters@steakschops.com', 'Geheim', 'R2'),
(4, 'Enrico', 'Crispo', 'Hondsruglaan', '9722SE', '18', 'Groningen', 'e.crispo@monalisa.nl', 'Venetie1874', 'R3'),
(5, 'Qiao', 'Liang', 'Sint Eustatiusstraat', '9715PH', '12', 'Groningen', 'q.liang@reddragon.com', 'Reddragon1687', 'R4'),
(6, 'Pepe', 'Salieri', 'Siriusstraat', '9742KW', '24', 'Groningen', 'p.@peperestaurant.nl', 'Giantisalieri12', 'R5');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `klant_klant_id` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_items_id` int(11) NOT NULL,
  `orders_order_id` int(11) NOT NULL,
  `restaurant_restaurant_id` int(11) NOT NULL,
  `items_product_id` int(11) NOT NULL,
  `items_qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `items_restaurant_fk` (`restaurant_restaurant_id`);

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klant_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_klant_fk` (`klant_klant_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_items_id`),
  ADD KEY `order_items_items_fk` (`restaurant_restaurant_id`),
  ADD KEY `order_items_orders_fk` (`orders_order_id`),
  ADD KEY `items_product_fk` (`items_product_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `klant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_items_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`restaurant_restaurant_id`) REFERENCES `restaurant` (`restaurant_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`klant_klant_id`) REFERENCES `klant` (`klant_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`restaurant_restaurant_id`) REFERENCES `restaurant` (`restaurant_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`orders_order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_3` FOREIGN KEY (`items_product_id`) REFERENCES `items` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
