-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2016 at 09:11 AM
-- Server version: 5.6.30
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapg`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `place_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `name`, `long`, `lat`, `state`, `lga`, `type`, `address`, `deleted`, `added`) VALUES
(2, 'Abel hotel', '4.502376788916081', '7.497019742879445', 'oyo', 'lga2', 'hotel', 'Cool', 0, '2016-09-18 19:24:24'),
(3, 'New Hotel Here', '4.339470142187565', '7.476936393371527', 'oyo', 'lga2', 'hotel', '', 0, '2016-09-18 19:26:48'),
(4, 'Pretty Little Liars', '4.498771900000065', '7.4953178', 'oyo', 'lga', 'hotel', '', 0, '2016-09-27 08:36:00'),
(5, 'Kendyson Douglas', '4.436287158789128', '7.620562927069955', 'oyo', 'lga', 'hotel', '', 0, '2016-09-27 08:37:58'),
(6, 'Pretty Little Liars', '4.331917041601628', '7.4674049888128815', 'oyo', 'lga', 'hotel', '', 0, '2016-09-27 08:58:02'),
(7, 'Kendyson Douglas', '4.320244067968815', '7.476936393371527', 'oyo', 'lga', 'hotel', '', 0, '2016-09-27 08:58:12'),
(8, '', '4.642280811132878', '7.4013602770469165', 'oyo', 'club', 'hotel', '', 0, '2016-09-27 08:58:20'),
(9, 'Pretty Little Liars', '4.745277637304753', '7.475574776883225', 'oyo', 'club', 'hotel', '', 0, '2016-09-27 08:58:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
