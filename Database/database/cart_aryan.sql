-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 02:46 PM
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
-- Table structure for table `cart_aryan`
--

CREATE TABLE `cart_aryan` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `litre` int(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_aryan`
--

INSERT INTO `cart_aryan` (`id`, `username`, `date`, `litre`, `price`, `qty`, `total_price`, `code`) VALUES
(5, 'Aritra Dutta', '2021-07-24', 2, '1000.00', 1, '1000', 'p1000'),
(6, 'Aritra', '2021-07-24', 4, '1200.00', 1, '1200', 'p1001'),
(7, 'Aritra Dutta', '2021-07-25', 4, '1200.00', 1, '1200', 'p1001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_aryan`
--
ALTER TABLE `cart_aryan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_aryan`
--
ALTER TABLE `cart_aryan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
