-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2013 at 07:01 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `19a`
--

-- --------------------------------------------------------

--
-- Table structure for table `sidemenu`
--

CREATE TABLE IF NOT EXISTS `sidemenu` (
  `class` varchar(64) NOT NULL,
  `name` varchar(32) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidemenu`
--

INSERT INTO `sidemenu` (`class`, `name`, `link`, `title`) VALUES
('gn-icon-download', 'Home', 'homegrid.php', '19a | MSRIT Official Magazine'),
('gn-icon-download', 'Us', 'pages/us/us.php', '19a | The Team'),
('gn-icon-download', 'MSRIT Scenes', 'pages/msrscenes/msrscenes.php', '19a | MSR Scenes'),
('gn-icon-download', 'Literature', 'pages/literary/literary.php', '19a | Literature'),
('gn-icon-download', 'Music', 'pages/music/music.php', '19a | Music'),
('gn-icon-download', 'Food', 'pages/food/food.php', '19a | Food'),
('gn-icon-download', 'Gaming', 'pages/gaming/gaming.php', '19a | Gaming'),
('gn-icon-download', 'Sci-tech', 'pages/scitech/scitech.php', '19a | Sci-Tech'),
('gn-icon-download', 'Horoscopes', 'pages/horoscopes/horoscopes.php', '19a | horoscopes'),
('gn-icon-download', 'Art', 'pages/art/art.php', '19a | Art'),
('gn-icon-download', 'Comic', 'pages/comic/comic.php', '19a | Comic'),
('gn-icon-download', 'Sports', 'pages/sports/sports.php', '19a | Sports'),
('gn-icon-download', 'Pop Culture', 'pages/popcul/popcul.php', '19a | Pop Culture'),
('gn-icon-download', 'Free Advice', 'pages/freeadvice/freeadvice.php', '19a | Free Advice');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
