-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 05:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`) VALUES
(1, 'fashion'),
(2, 'sports'),
(3, 'food'),
(4, 'travelling');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedAt` datetime DEFAULT NULL,
  `categoryId` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `createdAt`, `updatedAt`, `categoryId`) VALUES
(1, 'my first blog on fashion', 'my first blog on fashion and .....', '2021-03-27 23:01:55', '2021-03-29 13:52:29', 1),
(2, 'my blog on sports', 'my blog on sports.....', '2021-03-27 23:01:55', '2021-03-27 18:30:49', 2),
(3, 'travelling places in mumbai', 'colaba is most lovable place in mumbai till date for me as it has many famous spots.....', '2021-03-29 16:11:51', NULL, 4),
(4, 'travelling places in agra', 'Taj mahal is the most loving place', '2021-03-29 16:14:03', NULL, 4),
(6, 'Fashion life in dubai', 'dubai is the best place for fashion', '2021-03-29 16:35:15', NULL, 1),
(8, 'cricket is a game in india that everyone plays from its chilhood', 'Virat kohli is one of the finest player in the world', '2021-03-29 17:19:31', '2021-03-29 14:04:32', 2),
(10, 'my first blog on food', 'In india we found a different taste and a level    of creativity in food', '2021-03-29 17:31:12', NULL, 3),
(11, 'Different types of Food', 'Mughalai,Continental,Chinese,Italian,North indian', '2021-03-29 17:33:01', NULL, 3),
(12, 'travelling places in  kashmir', 'kashmir a place which always covered with snow which makes it a diiferent and beautiful place', '2021-03-29 19:48:29', NULL, 4),
(13, 'fashion', 'in todays world fashion becomes a very impotant parameter in every ones life', '2021-03-29 19:49:59', NULL, 1),
(14, 'Travel to 2021', 'it\'s best to travel in 2021....', '2021-03-29 20:38:29', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userName`, `password`, `lastlogin`, `createdAt`, `updatedAt`) VALUES
(1, 'faraz', '8aeaf2d0387182ce37c857ba48178c18', '2021-03-27 17:51:56', '2021-03-27 22:23:33', '2021-03-27 17:51:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
