-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 04:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foka`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

CREATE TABLE `enquiry_form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `tracker` varchar(30) NOT NULL,
  `products` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `comments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_form`
--

INSERT INTO `enquiry_form` (`id`, `name`, `email`, `phone`, `city`, `state`, `status`, `tracker`, `products`, `date`, `comments`) VALUES
(1, 'hello', 'hello@world.com', '1234567890', 'Alesund', 'Hordaland', '6', 'p', 'Security Monitor ', '2021-06-12', 'testqweqwe'),
(48, 'Test2', 'test1@test.com', '7010551045', 'Alesund', 'More og Romsdal', '4', '', 'Battery Monitor', '2021-06-14', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `status_comments_history`
--

CREATE TABLE `status_comments_history` (
  `id` int(11) NOT NULL,
  `Enquiry_form_id` int(11) NOT NULL,
  `old_status` varchar(255) NOT NULL,
  `new_status` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `commented_by` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_comments_history`
--

INSERT INTO `status_comments_history` (`id`, `Enquiry_form_id`, `old_status`, `new_status`, `comment`, `commented_by`, `datetime`) VALUES
(1, 1, '1', '5', '', '', '2021-07-09 14:28:24'),
(2, 48, '0', '4', '', '', '2021-07-09 14:29:00'),
(3, 1, '5', '3', '', '', '2021-07-09 15:09:23'),
(4, 1, '3', '5', '', '', '2021-07-09 16:12:55'),
(5, 1, '5', '4', '', '', '2021-07-09 17:11:20'),
(6, 1, '4', '6', 'comment', '', '2021-07-09 17:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `usrdata`
--

CREATE TABLE `usrdata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(64) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usrdata`
--

INSERT INTO `usrdata` (`id`, `uname`, `pwd`, `role`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 0),
(2, 'admin1', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `status_comments_history`
--
ALTER TABLE `status_comments_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usrdata`
--
ALTER TABLE `usrdata`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `status_comments_history`
--
ALTER TABLE `status_comments_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usrdata`
--
ALTER TABLE `usrdata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
