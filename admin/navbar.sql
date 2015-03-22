-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2015 at 01:07 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `title`, `description`) VALUES
(1, 'الاهداف', 'تكمن اهداف الاكاديمية حول التالي ذكره'),
(2, 'عن اكاديمية ديبونو', 'تاسست اكاديمية ديبونو من سنة شهر يوم \r\n'),
(3, 'الرؤية', 'تكمن رؤية اكاديمية ديبونو لتعليم التفكير حول'),
(4, 'الرسالة', 'تكمن رسالة اكاديمية ديبونو لتعليم التفكير حول'),
(5, 'ركن الخدمات الالكترونية', 'تقدم اكاديمية ديبونو اللخدمات الالكترونية التالية'),
(6, 'طرق الدفع', 'طرق الدفع من خلال ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
