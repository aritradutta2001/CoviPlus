-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 02:47 PM
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
-- Table structure for table `hos_users`
--

CREATE TABLE `hos_users` (
  `id` int(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hos_users`
--

INSERT INTO `hos_users` (`id`, `Username`, `email`, `Password`) VALUES
(1, 'sskm', 'sskm@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'R_j_kar', 'rjkar@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'Id_Bg', 'prin_idbg@wbhealth.gov.in', '25d55ad283aa400af464c76d713c07ad'),
(6, 'Cmc', 'cmc@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(7, 'Cnmc', 'cnmc@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(8, 'Nrs', 'nrs@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(9, 'apollo', 'ips_kol@apollohospitals.com', '25d55ad283aa400af464c76d713c07ad'),
(10, 'belle', 'marketing@bellevueclinic.com', '25d55ad283aa400af464c76d713c07ad'),
(11, 'jimsh', 'contact@jimsh.org', '25d55ad283aa400af464c76d713c07ad'),
(12, 'medica', 'internationaldesk.mshk@medicasynergie.in', '25d55ad283aa400af464c76d713c07ad'),
(13, 'peerless', 'internationaldesk@peerlesshospital.com', '25d55ad283aa400af464c76d713c07ad'),
(14, 'tagore', 'arnab.banerjee01@nhhospitals.org', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hos_users`
--
ALTER TABLE `hos_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hos_users`
--
ALTER TABLE `hos_users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
