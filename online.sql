-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2021 at 07:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(25) NOT NULL,
  `brand` varchar(225) DEFAULT NULL,
  `category` varchar(25) NOT NULL,
  `product_img_name` varchar(100) NOT NULL DEFAULT 'no_image.jpg',
  `product_name` varchar(100) NOT NULL,
  `price` int(5) NOT NULL,
  `product_qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `brand`, `category`, `product_img_name`, `product_name`, `price`, `product_qty`) VALUES
(1, 'rolex1', 'Rolex', 'watch', 'rolex1.png', 'Rolex Submariner', 120000, 99),
(2, 'rolex2', 'Rolex', 'watch', 'rolex2.png', 'Rolex Oyster Perpetual Everose', 355500, 99),
(3, 'rolex3', 'Rolex', 'watch', 'rolex3.png', 'Rolex Cellini', 265500, 99),
(4, 'zenith1', 'Zenith', 'watch', 'zenith1.png', 'Zenith Chronomaster', 382500, 99),
(5, 'zenith2', 'Zenith', 'watch', 'zenith2.png', 'Zenith Pilot', 485500, 99),
(6, 'zenith3', 'Zenith', 'watch', 'zenith3.png', 'Zenith Defy', 532500, 99),
(7, 'hublot1', 'Hublot', 'watch', 'hublot1.png', 'Hublot Big Bang', 755500, 99),
(8, 'hublot2', 'Hublot', 'watch', 'hublot2.png', 'Hublot Classic Fusion', 844500, 99),
(9, 'hublot3', 'Hublot', 'watch', 'hublot3.png', 'Hublot MP Tourbillon', 582500, 99),
(99, 'rolex4', 'Rolex', 'watch', 'rolex4.png', 'Rolex Sea-Dweller', 230000, 99),
(299, 'rolex5', 'Rolex', 'watch', 'rolex5.png', 'Rolex Yacht-Master', 465000, 99),
(399, 'rolex6', 'Rolex', 'watch', 'rolex6.png', 'Rolex Oyster Datejust 41', 860000, 99);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `password`) VALUES
(17, 'Admin', 'Admin', 12345, 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3'),
(19, 'Rishabh', 'Chopda', 9326765878, 'aaditchopda2@gmail.com', 'e7542ce6612a903e4e8832a943eccba0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
