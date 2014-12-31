-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2014 at 02:29 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `information`
--

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE IF NOT EXISTS `references` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `hobby` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `name`, `organization`, `address`, `phone`, `email`, `relation`, `hobby`) VALUES
(2, '', '', '     ', '     ', '', '', 'tennis,cricket,dance,sketching'),
(3, 'yn', 'nm', 'w6nam  ', 'awh4b  ', 'wa46jn', 'e6jn', ''),
(4, 'Arif', 'Who', 'dshhhhhhhhhhhh  ', 'byeb h    ', 'enb', 'Mama', 'tennis,cricket'),
(7, 'twhb', 'b ', 'ar n', ' n b', 'sdbyn', 's dn', 'tennis,cricket'),
(8, '', '', ' ', ' ', '', '', ''),
(9, '', '', '  ', '  ', '', '', 'tennis,cricket'),
(10, 'Arif', 'Who', 'atb ', 'byeb h  ', 'digital_pervej@yahoo.com', 'Mama', ''),
(11, '', '', '   ', '   ', '', '', 'cricket,dance,sketching'),
(12, '', '', ' ', ' ', '', '', ''),
(13, '', '', '   ', '   ', '', '', 'sketching'),
(14, 'yn', 'nm', 'atb   ', '01478648966', 'digital_pervej@yahoo.com', 'bnu eb', 'tennis,dance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `references`
--
ALTER TABLE `references`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
