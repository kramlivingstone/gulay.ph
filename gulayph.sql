-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2017 at 01:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gulayph`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `full_name`, `email`) VALUES
(1, 'root', '', 'regular', '', ''),
(2, 'admin', 'password', 'regular', '', ''),
(4, 'administrator', '8be3c943b1609fffbfc51aad666d0a04adf83c9d', 'regular', '', ''),
(5, 'kramlivingstone', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'admin', 'Mark Marasigan', 'kramlivingstone@yahoo.com.ph');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` double NOT NULL,
  `item_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`item_id`, `item_name`, `item_description`, `item_image`, `item_price`, `item_category`) VALUES
(1, 'Artichoke', 'Globe artichokes have always been considered a delicacy. They have been grown in Southern Europe for many centuries. The immature flower bud before the flower appears, when it consists of overlapping green/purple scales, is the part eaten. In New Zealand ', 'img/artichoke.jpg', 150, 'Bulbs'),
(2, 'Cabbage', '  Cabbages are from the brassica family and are one of the oldest vegetables known.\r\n				\r\n				\r\n				\r\n				\r\n				\r\n				\r\n												', 'img/cabbage.jpg', 300, 'Bulbs'),
(3, 'Carrot', '\r\nCarrots have been a staple in many countries for thousands of years although it is only since the 16th century that they have been orange.\r\n\r\nEarliest records show carrots were purple; later records show red, yellow and white carrots\r\nwere grown. Orange', 'img/carrot.jpg', 50, 'Roots'),
(5, 'Asian Greens', 'Choy is the Chinese word for any leafy vegetable. Asian greens have also been called cabbage â€“ even though they donâ€™t resemble Western cabbages. The names of Asian vegetables can be confusing as they are called different names in different areas of Ch', 'img/asian_greens.jpg', 100, 'Leaves');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
