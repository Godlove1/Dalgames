-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 12:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalgames`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `userid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `stat` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `paymethod` varchar(20) NOT NULL,
  `timeoforder` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`userid`, `fname`, `lname`, `company`, `country`, `stat`, `zip`, `phone`, `email`, `notes`, `paymethod`, `timeoforder`) VALUES
(1, 'grgrgrgr', 'arrrgreg', 'gawgdga', 'vdvdacdavd', 'vdvdvadvdv', 'dvdvdwavvav', 'vewfefead', 'cdcdc@gmail.com', 'efefecC', 'cashapp', '2021-09-03 18:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `consoles`
--

CREATE TABLE `consoles` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `images` varchar(500) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consoles`
--

INSERT INTO `consoles` (`id`, `filename`, `images`, `price`) VALUES
(1, 'ps 5', 'uploads/ad7746e9b6014ff3f0497e5f06d70112ben-iwara-tnfbre82_hc-unsplash.jpg', 499.99),
(2, 'nintendo blue switvh', 'uploads/e468194bcda60a01b665268fb3135b93brandon-romanchuk-gFFhJPuERII-unsplash.jpg', 200.99),
(3, 'xbox live', 'uploads/24dc61bdba6d00074a1691d3219e276abilly-freeman-DPOdCl4bGJU-unsplash.jpg', 235.44);

-- --------------------------------------------------------

--
-- Table structure for table `featgames`
--

CREATE TABLE `featgames` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `images` varchar(400) NOT NULL,
  `price` double(10,2) NOT NULL,
  `console` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featgames`
--

INSERT INTO `featgames` (`id`, `filename`, `images`, `price`, `console`) VALUES
(1, 'dihonored', 'uploads/c937070808ef3465badff269ff2cdb63dishonored.png', 499.67, 'ps5'),
(2, 'unchatered', 'uploads/fd94570babe0dd34181e7af4434a347euncd.png', 455.99, 'xbox 360'),
(3, 'nioh', 'uploads/3695049aa527544410c8ff933fa68afenioh.png', 119.99, 'ps5'),
(4, 'gundam versus', 'uploads/1e72d3c9e5cc8cf079b14e1dc4acce0dgundam.png', 355.55, 'xbox 1 series x');

-- --------------------------------------------------------

--
-- Table structure for table `newproducts`
--

CREATE TABLE `newproducts` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `images` varchar(500) NOT NULL,
  `console` varchar(30) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newproducts`
--

INSERT INTO `newproducts` (`id`, `filename`, `images`, `console`, `price`) VALUES
(1, 'wolfenstein', 'uploads/e0498a3b631ed182cee0469e4af5ef28wolf.png', 'xbox', 499.44),
(2, 'until dawn', 'uploads/0662b7b778517497d8c3033a803df29cund.jpg', 'playstion 5', 399.99),
(3, 'god of war', 'uploads/37877b39d53d33505b9067ae66d4ae35gow3.png', 'ps3,ps4,xbox live', 599.99),
(4, 'unchatered 4', 'uploads/cc80f885c2688ae3f5fa606c0c2e85ecunc4.jpg', 'ps3', 245.99);

-- --------------------------------------------------------

--
-- Table structure for table `nintendo`
--

CREATE TABLE `nintendo` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `images` varchar(500) NOT NULL,
  `console` varchar(30) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nintendo`
--

INSERT INTO `nintendo` (`id`, `filename`, `images`, `console`, `price`) VALUES
(1, 'dihinired', 'uploads/399f91be3c0953c631dffa94b6719952dishonored.png', 'nintendo swithc', 434.99),
(2, 'red switcgh', 'uploads/c6b6e3d75bfa221e3d54b8ff34eff8faaedrian-zs9T9sjwAQ8-unsplash.jpg', 'n.switch', 453.77),
(3, 'horizon', 'uploads/06b24610d75ea64316c6b2d8076ebf01horizon.png', 'nintendo switvh', 299.75);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `items` varchar(50) NOT NULL,
  `prices` varchar(40) NOT NULL,
  `timeoforder` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`items`, `prices`, `timeoforder`) VALUES
('unchatered 4 ', '245.99 ', '2021-09-03 11:16:04'),
('unchatered 4 ', '245.99 ', '2021-09-03 16:52:24'),
('until dawn ', '399.99 ', '2021-09-03 16:52:24'),
('unchatered 4 ', '245.99 ', '2021-09-03 18:12:31'),
('until dawn ', '399.99 ', '2021-09-03 18:12:31'),
('unchatered 4 ', '245.99 ', '2021-09-03 18:14:27'),
('until dawn ', '399.99 ', '2021-09-03 18:14:28'),
('unchatered 4 ', '245.99 ', '2021-09-03 18:36:11'),
('until dawn ', '399.99 ', '2021-09-03 18:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `playstation`
--

CREATE TABLE `playstation` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `images` varchar(500) NOT NULL,
  `console` varchar(30) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playstation`
--

INSERT INTO `playstation` (`id`, `filename`, `images`, `console`, `price`) VALUES
(1, 'until dawn', 'uploads/58944b64e8e6ed25cfd2a98b25795812und.jpg', 'ps4', 499.99),
(2, 'dishonored', 'uploads/ec4db51e6c6fdba08bacc342d947fd3ddishonored.png', 'ps5', 399.99),
(3, 'dragon ball xeno', 'uploads/000b90a1c603d838b4df9dc413c04f95dbz.png', 'ps3', 388.00);

-- --------------------------------------------------------

--
-- Table structure for table `topratedgames`
--

CREATE TABLE `topratedgames` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `images` varchar(500) NOT NULL,
  `console` varchar(30) NOT NULL,
  `price` double(10,2) NOT NULL,
  `stars` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topratedgames`
--

INSERT INTO `topratedgames` (`id`, `filename`, `images`, `console`, `price`, `stars`) VALUES
(1, 'dishonored', 'uploads/ca4c20a00f730062a9d36cbfefbf9311dishonored.png', 'ps5', 344.88, 5),
(2, 'dragon ball x', 'uploads/e47f9cfb2d6bb324e1e0a6c3131e7456dbz.png', 'xbox 360', 299.99, 3),
(3, 'last of us', 'uploads/607b830e573dfa4cbe0f37f8a58e97a3lou.jpg', 'ps3', 200.00, 4);

-- --------------------------------------------------------

--
-- Table structure for table `xbox`
--

CREATE TABLE `xbox` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `images` varchar(500) NOT NULL,
  `console` varchar(30) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xbox`
--

INSERT INTO `xbox` (`id`, `filename`, `images`, `console`, `price`) VALUES
(1, 'nioh', 'uploads/3ad5a48d79187e68432341780670334anioh.png', 'xbox live', 231.00),
(2, 'naruto', 'uploads/e8edee8eef72a3f577e79b1dd357c1a7ns.png', 'xbox 360', 321.99),
(3, 'ratchet', 'uploads/d7e03e72df8f6abdbd6d3b2d2e4b9caeratchet.png', 'xbox 1', 425.77);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featgames`
--
ALTER TABLE `featgames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newproducts`
--
ALTER TABLE `newproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nintendo`
--
ALTER TABLE `nintendo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playstation`
--
ALTER TABLE `playstation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topratedgames`
--
ALTER TABLE `topratedgames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xbox`
--
ALTER TABLE `xbox`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consoles`
--
ALTER TABLE `consoles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `featgames`
--
ALTER TABLE `featgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newproducts`
--
ALTER TABLE `newproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nintendo`
--
ALTER TABLE `nintendo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `playstation`
--
ALTER TABLE `playstation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topratedgames`
--
ALTER TABLE `topratedgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xbox`
--
ALTER TABLE `xbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
