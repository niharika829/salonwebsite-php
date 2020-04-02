-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 09:33 AM
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
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `uname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `joining` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`uname`, `email`, `gender`, `mobile`, `course`, `type`, `joining`, `id`) VALUES
('swetank', 'sonalfeb7@gmail.com', 'male', '8529525840', 'Beauty Therapy', 'Certification', '2020-03-20', 1),
('swetank', 'sonalagrawal2021999@gmail.com', 'male', '8529525840', 'Beauty Therapy', 'Certification', '2020-03-24', 3),
('swetank', 'swetankbansal16@gmail.com', 'male', '6265320652', 'Beauty Therapy', 'Certification', '2020-03-25', 4),
('swetank', 'sheetal7@gmail.com', 'male', '6265320652', 'Beauty Therapy', 'Certification', '2020-03-25', 5),
('swetank', 'sonalfeb8@gmail.com', 'male', '6265320652', '', 'Foundation', '2020-03-18', 6),
('szdxfcgvbnm', 'sonalfeb5@gmail.com', 'female', '6265320652', 'Beauty Therapy,Hair,Makeup', 'Certification', '2020-03-11', 7),
('swetank', 'sonalfeb18@gmail.com', 'female', '6265320652', 'Beauty Therapy,Hair,Makeup', 'Foundation', '2020-03-18', 8),
('swetank', 'sonalfeb11@gmail.com', 'female', '6265320652', 'Beauty Therapy,Hair', 'Certification', '2020-03-05', 9),
('swetank', 'sonalfe@gmail.com', 'male', '62653206', 'Hair', 'Certification', '2020-03-03', 10),
('swetank', 'sonalfegmail.com', 'male', '62653206', 'Hair', 'Certification', '2020-03-03', 11),
('swetank', 'sonalfeb202@gmail.com', 'female', '6265320652', 'Hair,Makeup', 'Certification', '2020-03-10', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
