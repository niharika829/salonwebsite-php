-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 10:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parlourproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artistid` int(50) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `telephone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistid`, `name`, `address`, `telephone`) VALUES
(6, 'kanika ahuja', 'jalandhar', 1234567890),
(2, 'rahish gupta', 'jal', 1234567890),
(3, 'rudraksh', 'jal', 1234567890),
(7, 'suhani sharma', 'jal', 1234567890),
(8, 'ashina kabba', 'jal', 1234567890),
(50, 'any one', 'none', 0),
(1, 'anjali mehta', 'jal', 1234567890),
(4, 'urvi chadda', 'jal', 1234567890),
(5, 'ahana', 'jal', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `userid` int(6) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `userorder` text NOT NULL,
  `amount` int(50) NOT NULL,
  `artist_id` int(50) NOT NULL,
  `entry_time` time NOT NULL,
  `entry_date` date NOT NULL,
  `category` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orderid` int(11) NOT NULL,
  `action` text NOT NULL,
  `cardholder` text NOT NULL,
  `cardnumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`userid`, `email`, `address`, `userorder`, `amount`, `artist_id`, `entry_time`, `entry_date`, `category`, `time`, `orderid`, `action`, `cardholder`, `cardnumber`) VALUES
(6, 'musi@gmail.com', 'faridabad', ' facialnailsspahaircut', 390, 1, '16:56:00', '2020-03-31', 'outdoor', '2020-03-28 19:50:04', 5366, 'confirmed', '', ''),
(6, 'musi@gmail.com', 'goraya', ' spapedicureoption1', 160, 8, '16:06:00', '2020-03-21', 'indoor', '2020-03-20 14:05:00', 4100, 'wait for the response', '', ''),
(3, 'som@rajput.com', 'jammu', ' nailshaircut', 250, 5, '15:56:00', '2020-03-17', 'outdoor', '2020-03-25 19:12:49', 1531, 'confirmed', '', ''),
(23, 'musi@gmail.com', 'dsf', ' spa,', 60, 6, '14:05:00', '0053-03-24', 'indoor', '2020-04-01 08:47:46', 3526, 'wait for the response', 'SDTFGHB', '1234-1234-1234-1234'),
(25, 'ns1324y@gmail.com', 'pasla', ' spa,facial,acrylic extension,', 210, 6, '15:06:00', '0089-03-08', 'indoor', '2020-04-01 20:20:46', 5960, 'confirmed', 'niharika sharma', '1111-2222-3333-4444'),
(25, 'ns1324y@gmail.com', 'gfwhedb', ' spa,facial,acrylic extension,', 210, 6, '16:07:00', '0009-04-06', 'indoor', '2020-04-01 20:35:28', 9370, 'confirmed ', 'fgvhbjnm', '1111-2222-5666-2234'),
(26, 'souravsingh10386@gmail.com', 'jammu', ' cleansing,spa,', 140, 6, '15:05:00', '0006-03-04', 'indoor', '2020-04-01 20:40:45', 1313, 'cancelled', 'saurav ', '1234-1234-1234-1234'),
(27, 'muskansharma2428@gmail.com', 'pasla', ' spa,facial,gel extension,', 190, 6, '15:07:00', '0009-03-06', 'indoor', '2020-04-02 08:23:48', 6748, 'confirmed', 'dfgvchbh', '1111-5353-7432-6322'),
(27, 'muskansharma2428@gmail.com', 'pasla', ' spa,facial,pedicure,nail art,', 240, 6, '15:06:00', '0006-03-05', 'indoor', '2020-04-02 08:29:54', 9887, 'cancelled', 'nihairka', '4221-5333-7654-3224'),
(25, 'ns1324y@gmail.com', 'pune', ' cleansing,spa,facial,pedicure,acrylic extension,', 350, 6, '17:07:00', '0007-03-05', 'indoor', '2020-04-02 08:43:13', 8944, 'confirmed ', 'neha', '5271-3617-7237-2719');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(6) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `age` int(20) NOT NULL,
  `telephone` int(20) NOT NULL,
  `img` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `firstname`, `lastname`, `email`, `address`, `password`, `age`, `telephone`, `img`, `time`) VALUES
(25, 'niharika', 'sharma', 'ns1324y@gmail.com', 'pasla', 'Aqueen@1', 22, 1234567890, 'Screenshot_20190524-003739.jpg', '2020-04-02 08:41:50'),
(26, 'Sourav', 'singh', 'souravsingh10386@gmail.com', 'jammu', 'Sourav@1', 24, 1234567890, 'Screenshot_20190207-040531.jpg', '2020-04-01 20:30:09'),
(27, 'muskan', 'sharma', 'muskansharma2428@gmail.com', 'pasla', 'Muskan@1', 19, 1234567890, 'Screenshot_20190207-040841.jpg', '2020-04-02 08:20:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
