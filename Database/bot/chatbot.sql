-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 08:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(0, 'hi,Hi,h,H,HELLO,hello,please help me , i want to contact you,Please help me , I want to contact you,i want help,I want help,Help,help', 'Hello User,thanks for contacting us \r\nOur contact details is-\r\nPhone no- +91 1234567890\r\nE-mail- coviplus@gmail.com'),
(0, 'oxygen cylinder,Oxygen cylinder,oxygen cylinder booking,Oxygen cylinder booking,How i can book oxygen cylinder?,how i can book oxygen cylinder?,How i can book oxygen cylinder,how i can book oxygen cylinder,help me to book oxygen cylinder,Help me to book oxygen cylinder,i can\'t book oxygen cylinder p', 'Thanks for your interest,\r\nIf you are interested in booking oxygen cylinder then,\r\n1. Go to oxygen dealers option.\r\n2. Select your desired option.\r\n3. Then select \"ADD TO CART\" and proceed for booking.'),
(0, 'hospital bed,Hospital bed,hospital bed booking ,Hospital bed booking,How i can book hospital bed?, how i can book hospital bed?,How i can book hospital bed,how i can book hospital bed, help me to book hospital bed,Help me to book hospital bed,i can\'t book hospital bed please help me,i can\'t book hos', 'Thanks for your interest,\r\nIf you are interested in booking hospital beds then,\r\n1. Go to hospital bed option.\r\n2. Select your desired option. \r\n3. Then fill your form and proceed for booking.'),
(0, 'vaccination,Vaccination,vaccine,Vaccine,vaccination booking ,Vaccination booking,How i can book slot for vaccination?, how i can book slot for vaccination?,How i can book slot for vaccination, how i can book slot for vaccination, help me to book slot for vaccination,Help me to book slot for vaccinat', 'Thanks for your interest,\r\nIf you are interested in vaccination then,\r\n1. Go to vaccination option.\r\n2. Click on \"Register Yourself For Vaccination\". \r\n3. Then fill the form and proceed for booking slot.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
