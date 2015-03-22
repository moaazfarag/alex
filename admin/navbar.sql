-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2015 at 05:27 PM
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
-- Table structure for table `navbar`
--

CREATE TABLE IF NOT EXISTS `navbar` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `textarea_name` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `title`, `description`, `name`, `textarea_name`) VALUES
(1, 'الاهداف ', '[rtl]تكمن اهداف اكاديمية ديبونو حول [/rtl]\r\n\r\n\r\n                                                                                                           ', 'اهداف الاكاديمية', 'goal'),
(2, 'عن اكاديمية ديبونو', '[right]   تاسست اكاديمية ديبونو سنة      شهر     يوم       \r\n[/right]\r\n', 'عن الاكاديمية', 'about'),
(3, 'الرؤية ', '[right]تكمن رؤية اكاديمية ديبونو حول [/right]\r\n', 'الرؤية', 'vision'),
(4, 'الرسالة', '[right]تكمن رسالة اكاديمية ديبونو حول [/right]\r\n', 'الرسالة', 'message'),
(5, 'ركن الخدمات ', '[rtl]تكمن خدمات اكاديمية ديبونو حول [/rtl]', 'ركن الخدمات', 'services'),
(6, 'الدفع ', '[right]                                    تكمن طرق دفع اكاديمية ديبونو حول [/right]\r\n', 'طرق الدفع ', 'pay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
