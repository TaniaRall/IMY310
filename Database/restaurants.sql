-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 05:08 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
 ADD PRIMARY KEY (`restaurant_id`), ADD UNIQUE KEY `Name` (`Name`), ADD KEY `Price` (`Price`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`Price`) REFERENCES `prices` (`price_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
