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
-- Table structure for table `oxy_users`
--

CREATE TABLE `oxy_users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oxy_users`
--

INSERT INTO `oxy_users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Trinayani', 'trinayani@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Shibani', 'shibani@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'Jiban_Deep', 'jibanDeep@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'Fyrax', 'fyrax@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'Bijoli', 'bijoli@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(6, 'Aryan', 'aryan@gmail.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oxy_users`
--
ALTER TABLE `oxy_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oxy_users`
--
ALTER TABLE `oxy_users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
