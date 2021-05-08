-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 08:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `created`, `modified`, `quantity`) VALUES
(37, 'Redmi note  8', 'Mi Phone', 500000, '0000-00-00 00:00:00', '2020-05-05 18:06:34', 25),
(38, 'Sony Xperia  8', 'Sony Phone', 5000000, '0000-00-00 00:00:00', '2020-05-05 18:08:47', 20),
(39, 'Redmi Y2', 'MI Phone', 10000, '0000-00-00 00:00:00', '2020-05-05 17:59:35', 30),
(40, 'Sony Xperia 5', 'Sony Phone', 50000, '0000-00-00 00:00:00', '2020-05-05 18:07:44', 25),
(42, 'Samsung Galaxy S9', 'Samsung Phone', 7000000, '0000-00-00 00:00:00', '2020-05-05 18:05:33', 45),
(43, 'Samsung Galaxy A50', 'Samsung Phone', 50000, '0000-00-00 00:00:00', '2020-05-05 18:03:22', 20),
(45, 'Redmi note 4', 'Mi Phone', 15000, '0000-00-00 00:00:00', '2020-05-05 18:01:26', 32),
(47, 'Samsung Galaxy  S20', 'Samsung Phone', 5000000, '0000-00-00 00:00:00', '2020-05-05 18:04:43', 45),
(48, 'Sony Experia 10', 'Sony Phone', 7000000, '0000-00-00 00:00:00', '2020-05-05 18:09:39', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
