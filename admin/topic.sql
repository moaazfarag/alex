-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 03:46 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `debono`
--

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
`tobic_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `mini_desc` tinytext NOT NULL,
  `topic` tinytext NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `upload_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`tobic_id`, `title`, `mini_desc`, `topic`, `type`, `date`, `upload_id`) VALUES
(1, 'sdafs', 'sfafsaffsa', '                                    estdgfhghkjhkljhgdfgfhgjhtrrtfgyh', 'event', '2015-03-24', 0),
(2, 'sdafs', 'sfafsaffsa', '                                    estdgfhghkjhkljhgdfgfhgjhtrrtfgyh', 'media', '2015-03-24', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
 ADD PRIMARY KEY (`tobic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
MODIFY `tobic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
