-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 04:10 PM
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
(8, 'Carl Bullock', 'uploads/manet.jpg', 275.00),
(9, 'Burton Peterson', 'uploads/nintendo.jpg', 623.00),
(10, 'Allistair Whitley', 'uploads/mantte.jpg', 220.00),
(11, 'Sacha Duffy', 'uploads/tvcon.jpg', 210.00);

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
(1, 'Raya Garcia', 'uploads/59509905wolf.png', 840.00, 'Voluptate officia cu'),
(3, 'Jaquelyn Spence', 'uploads/83622545lou.jpg', 939.00, 'Vo elig'),
(4, 'Wesley Spence', 'uploads/14557762ratchet.png', 963.00, 'Eagnam'),
(5, 'Basil Vang', 'uploads/26379088unc4.jpg', 239.00, 'Iorem ipsum');

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
(4, 'dishonored', 'uploads/13092287dishonored.png', 'playstation', 167.00),
(5, 'god of war : remastered', 'uploads/51644741gow3.png', 'xbox 360', 719.00),
(7, 'horizon', 'uploads/47763250horizon.png', 'playstation 4', 77.00),
(8, 'God of war', 'uploads/42948777gow3.png', 'playstation 5', 556.00),
(10, 'dishored', 'uploads/99241257dishonored.png', 'xbox live', 455.00),
(12, 'ratchet clank', 'uploads/60328197ratchet.png', 'playstation 3', 3454.00),
(13, 'dishonored 2', 'uploads/87093337dishonored.png', 'playstation 5', 2344.00),
(14, 'horizon fall', 'uploads/90888681horizon.png', 'xbox 1', 443.00);

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
(1, 'Patricia Cash', 'uploads/26978236wolf.png', 'Eum sint in sunt fug', 885.00),
(2, 'Garrett Jones', 'uploads/40012151unc4.jpg', '64', 670.00),
(3, 'Keiko Hammond', 'uploads/75393991nioh.png', 'Sunt ullamco est ill', 453.00),
(4, 'Keiko Hammond', 'uploads/57488629nioh.png', 'Sunt ullamco est ill', 453.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `items` varchar(50) NOT NULL,
  `prices` varchar(40) NOT NULL,
  `timeoforder` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'last of us', 'uploads/92903111lou.jpg', 'Delectus  ex', 990.00),
(2, 'enoioh 2', 'uploads/74183655nioh.png', 'ps4', 203.00),
(3, 'Hyacinth Rose', 'uploads/66819654lou.jpg', 'ps4', 540.00),
(4, 'uncharterd 4', 'uploads/88035372unc4.jpg', 'ps3', 454.00);

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
(1, 'ratchet', 'uploads/59533151ratchet.png', 'xbox', 3545.00, 3),
(2, 'Kelsey Richards', 'uploads/44269114unc4.jpg', 'sega', 167.00, 1),
(3, 'Theodore Harrington', 'uploads/66871426nioh.png', 'Veniam', 226.00, 4),
(4, 'Theodore Harrington', 'uploads/59951493nioh.png', 'Veniam', 226.00, 4);

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
(1, 'Jolene Britt', 'uploads/wolf.png', '64', 533.00),
(2, 'Hedwig Patton', 'uploads/horizon.png', 'SWITCH', 26.00),
(3, 'Hamilton Reilly', 'uploads/dishonored.png', 'switch', 984.00),
(4, 'Taylor Emerson', 'uploads/lou.jpg', 'minus ', 863.00);

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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consoles`
--
ALTER TABLE `consoles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `featgames`
--
ALTER TABLE `featgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newproducts`
--
ALTER TABLE `newproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nintendo`
--
ALTER TABLE `nintendo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `playstation`
--
ALTER TABLE `playstation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topratedgames`
--
ALTER TABLE `topratedgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `xbox`
--
ALTER TABLE `xbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
