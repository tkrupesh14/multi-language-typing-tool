-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 01:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techtyping`
--

-- --------------------------------------------------------

--
-- Table structure for table `typingtools`
--

CREATE TABLE `typingtools` (
  `id` int(11) NOT NULL,
  `lang_name` varchar(255) NOT NULL,
  `lang_value` varchar(255) NOT NULL,
  `google_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typingtools`
--

INSERT INTO `typingtools` (`id`, `lang_name`, `lang_value`, `google_value`) VALUES
(1, 'Hindi', '1', 'HINDI'),
(2, 'Gujarati', '2', 'GUJARATI'),
(3, 'Tamil', '3', 'TAMIL'),
(4, 'Telugu', '4', 'TELUGU'),
(5, 'Urdu', '5', 'URDU'),
(6, 'Punjabi', '6', 'PUNJABI'),
(7, 'Kannada', '7', 'KANNADA'),
(8, 'Marathi', '8', 'MARATHI'),
(9, 'Sanskrit', '9', 'SANSKRIT'),
(10, 'Oriya', '10', 'ORIYA'),
(11, 'Bangali', '11', 'BENGALI'),
(12, 'Malyalam', '12', 'MALAYALAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `typingtools`
--
ALTER TABLE `typingtools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `typingtools`
--
ALTER TABLE `typingtools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
