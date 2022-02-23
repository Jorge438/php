-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2022 at 10:57 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(4, 'CD', NULL),
(5, 'Maillots', NULL),
(6, 'Chaussures', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `adress` varchar(150) NOT NULL,
  `post_code` varchar(5) NOT NULL,
  `coutry` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone_number`, `first_name`, `last_name`, `mail`, `adress`, `post_code`, `coutry`) VALUES
(1, 'Chuck Norris', '0650877519', 'Chuck', 'Norris', 'ChuckNorris@caramail.com', '54 rue diderot 38100 grenoble ', '38100', 'France'),
(2, 'Charlize Theron', '0784654122', 'Charlize', 'Theron', 'CharlizeTheron@caramail.com', '25 rue jean pierre timbaud 38130 echirolles', '38130', 'France'),
(3, 'Ryan Gosling', '0645668819', 'Ryan', 'Gosling', 'CharlizeTheron@caramail.com', '12 rue pierre delore 69008 Lyon', '69008', 'France');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` datetime(6) NOT NULL,
  `number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `number`) VALUES
(1, 1, '2022-02-11 11:43:26.000000', '870'),
(2, 1, '2022-02-07 11:47:26.000000', '970'),
(3, 2, '2022-02-03 11:47:26.000000', '602'),
(4, 2, '2022-02-08 11:47:26.000000', '504'),
(5, 2, '2022-02-11 11:48:26.000000', '305');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(1, 1, 1),
(1, 3, 2),
(2, 11, 1),
(2, 9, 2),
(3, 2, 1),
(3, 10, 1),
(4, 3, 2),
(4, 11, 1),
(5, 2, 1),
(5, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `price` int(255) NOT NULL,
  `weight` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `stock` int(5) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `discount` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `weight`, `image`, `available`, `stock`, `categories_id`, `discount`) VALUES
(1, 'Maillots Alexis Sanchez', 'Maillot Alexis Sanchez domicile Inter de milan 2021/2022', 100, 1000, 'https://www.megafoot.net/9121/maillot-inter-milan-domicile-alexis-sanchez-2021-2022.jpg', 1, 10, 5, NULL),
(2, 'Maillots Matias Fernandes', 'Maillots Matias Fernandes domicile club deportes la Serena 2021/2022', 100, 1000, 'http://granate.inet.cl/site/wp-content/uploads/2020/08/camiseta-club-deportes-la-serena-original.jpg', 1, 10, 5, NULL),
(3, 'Maillots Arturo Vidal', 'Maillots Arturo Vidal domicile inter de Milan 2021/2022', 10, 500, 'https://www.soccerfansjersey.net/images/inter-milano/inter-milano-arturo-vidal-serie-a-champions-jersey-home-20-21-black-navy-.jpg', 1, 1, 5, NULL),
(4, 'Maillots Gary Medel', 'Maillots Gary Medel domicile Bologna 2021/2022', 10, 500, 'https://www.aisope.fr/images/WZQC/WCBVH3860_1.jpg', 1, 1, 5, NULL),
(5, 'Maillots Jean Beausejour', 'Maillots Jean Beausejour domicile Universidad de Chile 2021/2022', 10, 500, 'https://cdn.footballkitarchive.com/2022/02/04/R1GJz8pmzcUJbVv-small.jpg', 0, 1, 5, NULL),
(6, 'Maillots Colo-Colo Domicile', 'Maillots domicile Colo-Colo 2021/2022', 10, 500, 'https://cdn.footballkitarchive.com/2021/06/06/aKneN7pSV4W4feO.jpg', 0, 1, 5, NULL),
(7, 'CD Los vikings 5 - Los vikings 5', 'CD 1972 Los vikings 5 - Los vikings 5 ', 13, 500, 'https://img.discogs.com/GJ6CH3fkkdpNLj0RO-jDCB8suKo=/fit-in/600x602/filters:strip_icc():format(webp):mode_rgb():quality(90)/discogs-images/R-6688295-1603938962-5192.jpeg.jpg', 1, 0, 4, NULL),
(8, 'CD Sonora Palacios - La Sonora Palacios', 'CD 1966 Sonora Palacios - La Sonora Palacios', 13, 500, 'https://img.discogs.com/1hsP7PvAyV39DazHXoc7t-xqgmU=/fit-in/600x590/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-4454252-1365324200-8391.jpeg.jpg', 1, 0, 4, NULL),
(9, 'CD Baila en el mineral - Los fenix', 'CD 1967 Baila en el mineral - Los fenix', 50, 1200, 'https://direct.rhapsody.com/imageserver/images/alb.300703475/600x600.jpg', 1, 2, 4, NULL),
(10, 'CD  En El Ojo Del Huracán - Santa Feria', 'CD 2017 Santa Feria – En El Ojo Del Huracán', 50, 1200, 'https://img.discogs.com/tWwj3TyHBMt7w-wuR36dhGep1WE=/fit-in/379x379/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-15442455-1591595581-7353.jpeg.jpg', 1, 2, 4, NULL),
(11, 'Nike Cortez OG Edition', 'Chaussures Nike Cortez OG Edition, <hite, blue and red', 500, 1200, 'https://www.iziniceshop.com/wp-content/uploads/2019/08/NIKE-CLASSIC-CORTEZ-OG-www.iziniceshop.com-3.jpg', 1, 5, 6, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relation customers` (`customer_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD KEY `relation orders` (`order_id`),
  ADD KEY `relation products` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relation categories` (`categories_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `relation customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `relation orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `relation products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `relation categories` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
