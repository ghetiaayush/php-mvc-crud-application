-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 07:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_databse`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `password`, `role`) VALUES
(14, 'Prem', 'Rathod', 'prem@gmail.com', '123456', 'admin'),
(15, 'kjnllll', 'kjbkj', 'bkjbjk', 'bkjbkbh', ''),
(16, 'jbkj', 'bjkbj', 'bhkjb', 'kjbhkjb', ''),
(17, 'jbkj', 'bjkbjsss', 'bhkjb', 'kjbhkjb', ''),
(18, 'ljkn', 'kjlnkjl', 'nljkn', 'lkjnlkn', NULL),
(19, 'jkh', 'kjh', 'kjh', 'kjhjkh', NULL),
(20, 'Prem', 'Rathod', 'prem@gmail.com', '123456', ''),
(21, 'kjn', 'kjbkj', 'bkjbjk', 'bkjbkbh', ''),
(22, 'jbkj', 'bjkbj', 'bhkjb', 'kjbhkjb', ''),
(23, 'jbkj', 'bjkbj', 'bhkjb', 'kjbhkjb', ''),
(24, 'ljkn', 'kjlnkjl', 'nljkn', 'lkjnlkn', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
