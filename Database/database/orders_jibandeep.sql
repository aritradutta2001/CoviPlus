-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 02:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders_jibandeep`
--

CREATE TABLE `orders_jibandeep` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `main_date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_jibandeep`
--

INSERT INTO `orders_jibandeep` (`id`, `name`, `username`, `main_date`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(1, 'Moumita Maity', '', '0000-00-00', 'moumitamaity1208@gmail.com', '7364890951', 'Tamluk', 'cod', '6(1)', '1400'),
(2, 'Moumita Maity', '', '0000-00-00', 'moumitamaity1208@gmail.com', '7364890951', 'dddd', 'cod', '6(1)', '1400'),
(3, 'Aritra Dutta', 'Aritra Dutta', '2021-07-25', 'aritradutta2001@gmail.com', '8420222247', 'VILL+PO-MAYAPUR PS-NODAKHALI\r\nVILL+PO-MAYAPUR District-South 24 Pgs', 'cod', '2(1), 8(1), 6(1)', '4000'),
(4, 'Aritra Dutta', 'Aritra Dutta', '2021-07-25', 'aritradutta2001@gmail.com', '8420222247', 'VILL+PO-MAYAPUR PS-NODAKHALI\r\nVILL+PO-MAYAPUR District-South 24 Pgs', 'cod', '2(1), 6(1)', '2400'),
(5, 'Aritra Dutta', 'Aritra Dutta', '2021-07-25', 'aritradutta2001@gmail.com', '8420222247', 'VILL+PO-MAYAPUR PS-NODAKHALI\r\nVILL+PO-MAYAPUR District-South 24 Pgs', 'cod', '2(1), 4(1), 6(1), 8(1)', '5200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders_jibandeep`
--
ALTER TABLE `orders_jibandeep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders_jibandeep`
--
ALTER TABLE `orders_jibandeep`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
