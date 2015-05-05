-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 03:37 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurants`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
`address_id` int(11) NOT NULL,
  `restaurant` int(11) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='A restuarnt with multiple branches is classified only once' AUTO_INCREMENT=20 ;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`address_id`, `restaurant`, `telephone`, `address`) VALUES
(1, 1, '012 342 1530', '1066 Burnette St. Hatfield'),
(2, 2, '012 342 3675', '1122 Burnett Street, Hatfield'),
(3, 3, '012 430 2775', 'Corner Festival & Burnett Streets'),
(4, 4, '012 362 6616', '1101 Burnett St, Shop 1, Hatfield'),
(5, 5, '012 362 8834', 'No 495 cnr. Prospect & Hilda St. Hatfield'),
(6, 6, '012 362 7311', '1081 Burnett Street, Hatfield'),
(7, 7, '012 362 6626', '1145 Grosvenor & Burnett Street, Hatfield'),
(8, 8, '012 362 5865', '1137 Burnett Street, Hatfield'),
(9, 9, '012 342 8888', '1102 Burnett Street, Hatfield'),
(10, 10, '', '1066 Burnett Street, Hatfield'),
(11, 11, '012 001 2451', 'Corner Hilda & Burnette Street, Hatfield'),
(12, 12, '012 362 5849', 'Hatfield Plaza, 1122 Burnett Street, Hatfield'),
(13, 13, '012 430 3449', 'Pretorius Street & Grosvenor St, Hatfield'),
(14, 14, '012 362 2224', 'Corner Jan Shoba & Prospect Streets, Hatfield'),
(15, 15, '012 362 1800', '129 Duxbury Road, Hatfield'),
(16, 16, '012 362 7190', 'Hatfield Square, 1115 Burnett Street, Hatfield'),
(17, 17, '012 342 7815', '1066 Bunett Street, The Fields, Hatfield'),
(18, 18, '012 362 4483', 'Unit2 Hatfield Sq, 1119 Burnette St, Hatfield'),
(19, 19, '012 342 1720', ' 1122 Burnett Street, Hatfield');

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

CREATE TABLE IF NOT EXISTS `food_categories` (
`food_id` int(11) NOT NULL,
  `food_category` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `food_categories`
--

INSERT INTO `food_categories` (`food_id`, `food_category`) VALUES
(9, 'Asian'),
(10, 'Breakfast'),
(1, 'Burgers'),
(2, 'Chicken'),
(12, 'Chinese'),
(13, 'Cuban Cuisine'),
(14, 'Fast Food'),
(15, 'Health Food'),
(3, 'Italian'),
(4, 'Japanese'),
(16, 'Light Lunches'),
(5, 'Pasta'),
(17, 'Pizza'),
(18, 'Seafood'),
(6, 'Steak'),
(7, 'Taiwanese'),
(8, 'Wraps');

-- --------------------------------------------------------

--
-- Table structure for table `food_link`
--

CREATE TABLE IF NOT EXISTS `food_link` (
  `restaurant` int(11) NOT NULL,
  `food_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_link`
--

INSERT INTO `food_link` (`restaurant`, `food_type`) VALUES
(1, 6),
(1, 1),
(2, 1),
(2, 14),
(3, 2),
(3, 14),
(4, 2),
(4, 14),
(5, 4),
(5, 7),
(5, 12),
(6, 3),
(6, 5),
(6, 17),
(7, 18),
(8, 17),
(9, 8),
(9, 14),
(10, 1),
(10, 14),
(11, 3),
(11, 5),
(11, 17),
(12, 1),
(12, 10),
(13, 6),
(14, 3),
(14, 5),
(14, 17),
(15, 13),
(16, 16),
(17, 15),
(18, 2),
(18, 14),
(19, 3),
(19, 5),
(19, 17);

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
`price_id` int(11) NOT NULL,
  `price_category` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`price_id`, `price_category`) VALUES
(1, 'Super Cheap'),
(2, 'Budget'),
(3, 'Middleclass'),
(4, 'Pricy'),
(5, 'Big Spender');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
`restaurant_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Dresscode` varchar(30) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Facebook` varchar(255) NOT NULL,
  `Twitter` varchar(255) NOT NULL,
  `Youtube` varchar(255) NOT NULL,
  `logoPath` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `Name`, `Price`, `Dresscode`, `Website`, `Facebook`, `Twitter`, `Youtube`, `logoPath`) VALUES
(1, 'Spur', 3, 'Casual', 'http://www.spur.co.za/', 'https://www.facebook.com/SpurSteakRanches', 'https://twitter.com/SpurRestaurant', 'https://www.youtube.com/user/SpurChannel', 'NightSky.jpg'),
(2, 'McDonalds', 2, 'Casual', 'http://www.mcdonalds.co.za/', 'https://www.facebook.com/McDonalds', 'https://twitter.com/mcdonalds', 'https://www.youtube.com/user/mcdonaldsza', NULL),
(3, 'KFC', 2, 'Casual', 'http://www.kfc.co.za/', 'https://www.facebook.com/KFCSA', 'https://twitter.com/kfcsa', 'https://www.youtube.com/user/KFCsouthafrica', NULL),
(4, 'Nando''s', 3, 'Casual', 'www.nandos.co.za/', 'https://www.facebook.com/NandosSouthAfrica', 'https://twitter.com/NandosSA', 'https://www.youtube.com/user/NandosADS', NULL),
(5, 'Kung Fu Kitchen', 3, 'Casual', 'http://www.kungfukitchen.co.za/', 'https://www.facebook.com/pages/Kung-Fu-Kitchen-Hatfield/111217985627015', '', '', NULL),
(6, 'Mimmo''s', 3, 'Casual', 'http://www.mimmos.co.za/', 'https://www.facebook.com/pages/Mimmos-South-Africa/278396680163', 'https://twitter.com/mimmos_sa', '', NULL),
(7, 'Ocean Basket', 4, 'Semi-formal', 'www.oceanbasket.com/', 'https://www.facebook.com/daoceanbasket', 'https://twitter.com/TheOceanBasket', 'https://www.youtube.com/user/TheOceanBasket', NULL),
(8, 'Romans Pizza', 2, 'Casual', 'http://www.romanspizza.co.za/', 'https://www.facebook.com/RomansPizza', 'https://twitter.com/romans_pizza', '', NULL),
(9, 'Uncle Faouzi', 1, 'Casual', '', '', '', '', NULL),
(10, 'Burger King', 2, 'Casual', 'http://www.burgerking.co.za/', 'https://www.facebook.com/BurgerKingSouthAfrica', 'https://twitter.com/BurgerKingZA', 'https://www.youtube.com/user/BurgerKingSouthAfric', NULL),
(11, 'Domino''s Pizza', 3, 'Casual', 'http://www.dominospizza.co.za/', 'https://www.facebook.com/dominosza', 'https://twitter.com/DominosPizza_SA', 'https://www.youtube.com/user/DominosPizzaSA/videos', NULL),
(12, 'Wimpy', 2, 'Casual', 'www.wimpy.co.za', 'https://www.facebook.com/WimpySA', 'https://twitter.com/wimpy_sa', 'https://www.youtube.com/user/WimpySouthAfrica', NULL),
(13, 'Dros', 4, 'Semi-formal', 'http://www.dros.co.za/', 'https://www.facebook.com/DrosRestaurant', '', '', NULL),
(14, 'Papa''s Real Food', 4, 'Semi-formal', 'http://www.papasrestaurant.co.za/', 'https://www.facebook.com/papashatfield', '', '', NULL),
(15, 'Just Cuban', 5, 'Formal', 'http://www.justcuban.co.za/welcome.htm', '', '', '', NULL),
(16, 'News Café', 4, 'Semi-formal', 'http://www.newscafe.co.za/', 'https://www.facebook.com/NewsCafeVibez', 'https://twitter.com/NewsCafeVibez', '', NULL),
(17, 'Kauai', 3, 'Casual', 'http://www.kauai.co.za/content/hatfield', 'https://www.facebook.com/KauaiSouthAfrica', 'https://twitter.com/KauaiSA', '', NULL),
(18, 'Barcelos', 2, 'Casual', 'http://www.barcelos.co.za/', 'https://www.facebook.com/BarcelosFlameGrilledChicken', '', '', NULL),
(19, 'Debonairs', 3, 'Casual', 'https://www.debonairspizza.co.za/', 'https://www.facebook.com/DebonairsPizza', 'https://twitter.com/DebonairsPizza', 'https://www.youtube.com/user/DebonairsPizzaTube', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venue_categories`
--

CREATE TABLE IF NOT EXISTS `venue_categories` (
`venue_id` int(11) NOT NULL,
  `venue_name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `venue_categories`
--

INSERT INTO `venue_categories` (`venue_id`, `venue_name`) VALUES
(1, 'Sit Down'),
(2, 'Take-Away'),
(3, 'Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `venue_link`
--

CREATE TABLE IF NOT EXISTS `venue_link` (
  `restaurant` int(11) NOT NULL,
  `venue_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_link`
--

INSERT INTO `venue_link` (`restaurant`, `venue_type`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(14, 1),
(14, 2),
(15, 1),
(16, 1),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(19, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
 ADD PRIMARY KEY (`address_id`), ADD KEY `restaurant` (`restaurant`);

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
 ADD PRIMARY KEY (`food_id`), ADD UNIQUE KEY `food_category` (`food_category`);

--
-- Indexes for table `food_link`
--
ALTER TABLE `food_link`
 ADD KEY `restaurant` (`restaurant`), ADD KEY `food_type` (`food_type`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
 ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
 ADD PRIMARY KEY (`restaurant_id`), ADD UNIQUE KEY `Name` (`Name`), ADD KEY `Price` (`Price`);

--
-- Indexes for table `venue_categories`
--
ALTER TABLE `venue_categories`
 ADD PRIMARY KEY (`venue_id`);

--
-- Indexes for table `venue_link`
--
ALTER TABLE `venue_link`
 ADD PRIMARY KEY (`restaurant`,`venue_type`), ADD KEY `restaurant` (`restaurant`), ADD KEY `venue_type` (`venue_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `venue_categories`
--
ALTER TABLE `venue_categories`
MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`restaurant`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `food_link`
--
ALTER TABLE `food_link`
ADD CONSTRAINT `food_link_ibfk_1` FOREIGN KEY (`restaurant`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `food_link_ibfk_2` FOREIGN KEY (`food_type`) REFERENCES `food_categories` (`food_id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`Price`) REFERENCES `prices` (`price_id`);

--
-- Constraints for table `venue_link`
--
ALTER TABLE `venue_link`
ADD CONSTRAINT `venue_link_ibfk_1` FOREIGN KEY (`restaurant`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `venue_link_ibfk_2` FOREIGN KEY (`venue_type`) REFERENCES `venue_categories` (`venue_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
